<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque Print</title>
    <style>
        body {
            background-color: #ffffff;
            color: #333333;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        @media print {
            body {
                background-color: #ffffff;
                color: #000000;
                font-size: 12px;
            }
        }

        table, th, td {
        border: none;
      }
    </style>
</head>
<style>
    body {
      /*background: url('application/public/images/signatures/336X720.jpeg'); */
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
</style>
<body>
    <table style="width:100%;">
        <tr>
          <td></td>
          <td></td>
            @php
              $checkdate = date_create($chequeInformations[0]->date);
              $year=date_format($checkdate,"Y");
              $month=date_format($checkdate,"m");
              $date=date_format($checkdate,"d");
            @endphp
          <td style="text-align: right; padding-top: 1px; padding-bottom: 20px; padding-right: -38px; font-size:20px; letter-spacing:12px;">{{$date}}{{$month}}{{$year}} </td>
        </tr> 
        <tr>
          <td style=""></td>
          <td style="padding-left: 20px; padding-top: 9px;">{{$chequeInformations[0]->pay_to}}</td>
          <td rowspan="2" style="text-align: right; padding-right: 22px; padding-top: 52px; font-size:20px;">{{$chequeInformations[0]->amount}}.00</td>
        </tr>
        <tr>
          <td></td>
          <td style="padding-left: 50px; padding-bottom: 3px;">{{$chequeInformations[0]->amount_in_word}}</td>
        </tr>
    </table>
  </body>
</html>