<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .xosotable {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-top: 4px solid gray;
            border-bottom: 4px solid gray;
            border-left: 4px solid gray;
            border-right: 4px solid gray;
            line-height: 15px;
            margin-bottom: 50px;
        }

        td,
        th {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }

        .title {
            text-align: center;
            color: rgb(134, 0, 2);
            font-weight: bold;
            font-size: 18px;
        }

        .textBlack {
            color: black;
            font-size: 20px;
            font-weight: bold;
        }

        .textRed {
            color: red;
            font-size: 30px;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .dataTD:hover {
            background-color: white;
            line-height: 10px;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin: 50px auto 50px auto; width: 100%;">
        <table class="xosotable" id="xosotableID">
            @foreach ($xosos as $xoso)
                <?php
                $characters = $xoso->characters;
                $special = $xoso->special;
                $first = $xoso->first;
                $secondPrices = json_decode($xoso->secondPrize);
                $thirdPrices = json_decode($xoso->thirdPrize);
                $fourPrices = json_decode($xoso->fourPrize);
                $fivePrices = json_decode($xoso->fivePrize);
                $sixPrices = json_decode($xoso->sixPrize);
                $sevenPrices = json_decode($xoso->sevenPrize);
                $dateTime = new \DateTime();
                $result = $dateTime->format('Y-m-d');
                $day = $day ?? $result;
                $dayArr = explode('-', $day);
                $day = $dayArr[2] . '-' . $dayArr[1] . '-' . $dayArr[0];
                echo $day;
                if ($numberShow ?? 4 > 0) {
                $numberShow = $numberShow ?? 4;
                if ($numberShow < 4) { $special=Str::substr($special, 0, $numberShow); $first=Str::substr($first, 0,
                    $numberShow); foreach ($secondPrices as $key=> $value) {
                    $secondPrices[$key] = Str::substr($value, 0, $numberShow);
                    }
                    foreach ($thirdPrices as $key => $value) {
                    $thirdPrices[$key] = Str::substr($value, 0, $numberShow);
                    }
                    foreach ($fourPrices as $key => $value) {
                    $fourPrices[$key] = Str::substr($value, 0, $numberShow);
                    }
                    foreach ($fivePrices as $key => $value) {
                    $fivePrices[$key] = Str::substr($value, 0, $numberShow);
                    }
                    foreach ($sixPrices as $key => $value) {
                    $sixPrices[$key] = Str::substr($value, 0, $numberShow);
                    }
                    foreach ($sevenPrices as $key => $value) {
                    $sevenPrices[$key] = Str::substr($value, 0, $numberShow);
                    }
                    }
                    }
                    ?>
                    <tr>
                        <td colspan="13">
                            <h2 class="title"> XỔ SỐ TRUYỀN THỐNG </h2>
                            {{ $xoso->day }}
                        </td>
                    </tr>
                    <tr>
                        <td> Ký tự </td>
                        <td colspan="12"> {{ $characters }} </td>
                    </tr>
                    <tr>
                        <td style="color: red"> Đặc biệt </td>
                        <td class="textRed" colspan="12"> {{ $special }} </td>
                    </tr>
                    <tr>
                        <td> Giải nhất </td>
                        <td class="textBlack" colspan="12"> {{ $first }} </td>
                    </tr>
                    <tr>
                        <td> Giải nhì </td>
                        <td class="textBlack" colspan="6"> {{ $secondPrices[0] }} </td>
                        <td class="textBlack" colspan="6"> {{ $secondPrices[1] }} </td>
                    </tr>
                    <tr>
                        <th rowspan="2" style="text-align: center"> Giải ba </th>
                        <td class="textBlack" colspan="4"> {{ $thirdPrices[0] }} </td>
                        <td class="textBlack" colspan="4"> {{ $thirdPrices[1] }} </td>
                        <td class="textBlack" colspan="4"> {{ $thirdPrices[2] }} </td>
                    </tr>
                    <tr style="background-color: #f2f2f2">
                        <td class="textBlack" colspan="4"> {{ $thirdPrices[3] }} </td>
                        <td class="textBlack" colspan="4"> {{ $thirdPrices[4] }} </td>
                        <td class="textBlack" colspan="4"> {{ $thirdPrices[5] }} </td>
                    </tr>
                    <tr style="background-color: white">
                        <td> Giải tư </td>
                        <td class="textBlack" colspan="3"> {{ $fourPrices[0] }} </td>
                        <td class="textBlack" colspan="3"> {{ $fourPrices[1] }} </td>
                        <td class="textBlack" colspan="3"> {{ $fourPrices[2] }} </td>
                        <td class="textBlack" colspan="3"> {{ $fourPrices[3] }} </td>
                    </tr>
                    <tr style="background-color: #f2f2f2">
                        <th rowspan="2" style="text-align: center" colspan="1"> Giải năm </th>
                        <td class="textBlack" colspan="4" style="background-color: #f2f2f2"> {{ $fivePrices[0] }} </td>
                        <td class="textBlack" colspan="4" style="background-color: #f2f2f2"> {{ $fivePrices[1] }} </td>
                        <td class="textBlack" colspan="4" style="background-color: #f2f2f2"> {{ $fivePrices[2] }} </td>
                    </tr>
                    <tr>
                        <td class="textBlack" colspan="4"> {{ $fivePrices[3] }} </td>
                        <td class="textBlack" colspan="4"> {{ $fivePrices[4] }} </td>
                        <td class="textBlack" colspan="4"> {{ $thirdPrices[5] }} </td>
                    </tr>
                    <tr>
                        <td> Giải sáu </td>
                        <td class="textBlack" colspan="4"> {{ $sixPrices[0] }} </td>
                        <td class="textBlack" colspan="4"> {{ $sixPrices[1] }} </td>
                        <td class="textBlack" colspan="4"> {{ $sixPrices[2] }} </td>
                    </tr>
                    <tr>
                        <td> Giải bảy </td>
                        <td class="textBlack" colspan="3"> {{ $sevenPrices[0] }} </td>
                        <td class="textBlack" colspan="3"> {{ $sevenPrices[1] }} </td>
                        <td class="textBlack" colspan="3"> {{ $sevenPrices[2] }} </td>
                        <td class="textBlack" colspan="3"> {{ $sevenPrices[3] }} </td>
                    </tr>
            @endforeach
            <tr>
                <td colspan="13" class="dataTD">
                    <label>Chỉ hiển thị: </label>
                    <input type="radio" name="nameRadio" class="showButton" value="2"
                        {{ ($numberShow ?? 4) == 2 ? 'checked' : '' }}> 2 chữ số
                    <input type="radio" name="nameRadio" class="showButton" value="3"
                        {{ ($numberShow ?? 4) == 3 ? 'checked' : '' }}> 3 chữ số
                    <input type="radio" name="nameRadio" class="showButton" value="4"
                        {{ ($numberShow ?? 4) == 4 ? 'checked' : '' }}> Đầy đủ
                </td>
            </tr>
        </table>
        <input type="date" class="form-control" style="width: 50%; margin-bottom: 20px;" id="dateForm"
            value="{{ $day ?? '' }}" />
        <button onclick="getFromDate()"> Lấy kết quả theo ngày </button>
    </div>
</body>
<script>
    $(document).ready(function() {
        const inputs = document.querySelectorAll('.showButton');
        const table = document.getElementById("xosotableID");

        const clickHandler = i => {
            document.location.href = "/xoso/update/" + i.getAttribute("value");
        };

        inputs.forEach(i => i.onclick = () => clickHandler(i));

        // var now = new Date();
        // var month = (now.getMonth() + 1);
        // var day = now.getDate();
        // if (month < 10)
        //     month = "0" + month;
        // if (day < 10)
        //     day = "0" + day;
        // var today = now.getFullYear() + '-' + month + '-' + day;
        // $('#dateForm').val(today);
    });

    const dateForm = document.getElementById("dateForm");

    function getFromDate() {
        var date = formatDate(dateForm.value);
        if (date != "") {
            window.location = '/xoso/get/' + date;
        }
    }

    function formatDate(input) {
        var datePart = input.match(/\d+/g),
            year = datePart[0] // get only two digits
        month = datePart[1],
            day = datePart[2];

        return day + '-' + month + '-' + year;
    }

</script>

</html>
