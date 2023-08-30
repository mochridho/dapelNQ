<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <meta name="robots" content="noindex,nofollow" />

    <title>
        Laporan Data Pelanggaran
    </title>
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #777;
        }

        body h1 {
            font-weight: 300;
            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #000;
        }

        body h3 {
            font-weight: 300;
            margin-top: 10px;
            margin-bottom: 20px;
            font-style: italic;
            color: #555;
        }

        body a {
            color: #06f;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box.pdf {
            font-size: 14px;
            min-width: 980px !important;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            position: relative;
            font-size: 25px;
            /* line-height: 2; */
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #111;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 7px;
            padding-top: 7px;
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        .table-spp,
        .table-spp th,
        .table-spp td {
            border: 1px solid black !important;
            border-collapse: collapse;
        }

        .table-spp th {
            padding: 8px;
            background-color: #333;
        }

        .text-white {
            color: #f2f2f2;
        }

        .bg-primary {
            /* soft primary pastel */
            background-color: #60a5fa;
        }

        .bg-warning {
            /* color bg warning pastel */
            background-color: #facc15;
        }

        .bg-red {
            background-color: #f44336;
        }

        .bg-success {
            background-color: #4ade80;
        }

        .badge-success {
            padding: 4px 8px;
            background-color: #99cc33;
            font-size: .8rem;
            color: #fff;
            border-radius: 5px;
        }

        .badge-warning {
            padding: 4px 8px;
            background-color: #ffcc00;
            font-size: .8rem;
            color: #fff;
            border-radius: 5px;
        }

        .badge-primary {
            padding: 4px 8px;
            background-color: #7286D3;
            font-size: .8rem;
            color: #fff;
            border-radius: 5px;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        @media print {
            .invoice-box {
                max-width: unset;
                box-shadow: none;
                border: 0px;
            }

            .noprint {
                display: none;
            }
        }
    </style>
</head>

<body>
    @yield('content')
</body>

</html>
