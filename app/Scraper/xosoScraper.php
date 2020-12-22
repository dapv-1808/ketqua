<?php

namespace App\Scraper;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Xoso;

class xosoScraper
{

    public function scrape(string $day)
    {
        $url = 'https://ketqua.net/xo-so-truyen-thong.php?ngay=' . $day;
        $client = new Client();

        $crawler = $client->request('GET', $url);

        $crawler->filter('#result_tab_mb')->each(
            function (Crawler $node) {
                $day = $node->filter('#result_date')->text();
                $characters = $node->filter('#rs_8_0')->text();
                $special = $node->filter('#rs_0_0')->text();
                $first = $node->filter('#rs_1_0')->text();
                $secondPrize = $this->getValues($node, 2, 2);
                $thirdPrize = $this->getValues($node, 6, 3);
                $fourPrize = $this->getValues($node, 4, 4);
                $fivePrize = $this->getValues($node, 6, 5);
                $sixPrize = $this->getValues($node, 3, 6);
                $sevenPrize = $this->getValues($node, 4, 7);

                $xoso = new Xoso;
                $xoso->day = $day;
                $xoso->characters = $characters;
                $xoso->special = $special;
                $xoso->first = $first;
                $xoso->secondPrize = json_encode($secondPrize);
                $xoso->thirdPrize = json_encode($thirdPrize);
                $xoso->fourPrize = json_encode($fourPrize);
                $xoso->fivePrize = json_encode($fivePrize);
                $xoso->sixPrize = json_encode($sixPrize);
                $xoso->sevenPrize = json_encode($sevenPrize);
                $xoso->save();
            }
        );
    }

    function getValues(Crawler $node, int $pos, int $current) {
        $values = [];
        for ($i=0; $i < $pos; $i++) { 
            $stringCurrent = (string)$current;
            $stringIndex = (string)$i;
            $indexFilter = "#rs_" . $stringCurrent . "_" . $stringIndex;
            $value = $node->filter($indexFilter)->text();
            array_push($values, $value);
        }

        return $values;
    }
}
