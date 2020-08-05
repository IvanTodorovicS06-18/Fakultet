<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    </style>

</head>
<body>
<h2 class="text-center">Prijava Ispita</h2>



<table>
    <tr>
        <th>Predmet</th>
        <th>Datum</th>
        <th>Profesor</th>

    </tr>


        @foreach($predmeti as $predmet)
            <tr>


                <td>{{$predmet->naziv}}</td>
                <td> {{$predmet->datum_polaganja}}</td>
                <td>{{$predmet->profesor->name}}</td>


                @endforeach







</table>





</body>
</html>

