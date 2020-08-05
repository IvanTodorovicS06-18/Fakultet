<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kolokvijum</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        #prva{
            width: 150px;
        }

        #druga{
            width: 550px;
        }

        .kontejner{
            width: 700px;
            display: flex;
            position: relative;
            left: 35%;
            top: 10px;

        }

            h1{
                text-align: center;
            }
    </style>

</head>
<body>

    <h1>KOLOKVIJUMI C(:</h1>

<div class="kontejner">
    <table id="prva">
        <th>
            Ime predmeta
        </th>
        @foreach($predmeti as $predmet)
        <tr>
            <td>
                {{$predmet->naziv}}
            </td>
        </tr>
        @endforeach
    </table>

    <table id="druga">
        <tr>
            <th>Dezurni profa</th>
            <th>Ucionica</th>
            <th>Datum polaganja</th>
        </tr>
        @foreach($kolokvijumi as $kolokvijum)
            <tr>
                <td>
                    {{$kolokvijum->dezurni_profesor}}
                </td>
                <td>
                    {{$kolokvijum->ucionica}}
                </td>
                <td>
                    {{$kolokvijum->datum_polaganja}}
                </td>
            </tr>
        @endforeach
    </table>

</div>


</body>
</html>
