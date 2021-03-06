<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student prikaz</title>

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

<table>
    <tr>
        <th>Profesora</th>
        <th>Naziv</th>
        <th>ESPB</th>
        <th>Datum Polaganja</th>
    </tr>

      @foreach($predmeti as $predmet)
        <tr>
          <td>
              {{$predmet->name}}
              {{$predmet->profesor->lastname}}
          </td>
          <td>
              {{$predmet->naziv}}
          </td>
          <td>
              {{$predmet->espb}}
          </td>
          <td>
              {{$predmet->datum_polaganja}}
          </td>
        </tr>
        @endforeach


</table>



</body>
</html>
