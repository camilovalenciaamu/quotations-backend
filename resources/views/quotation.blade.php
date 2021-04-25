<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        #quotation-info {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        #quotation-info td,
        #quotation-info th {
            border: 1px solid rgb(243, 235, 235);
            padding: 8px;
        }

        #quotation-info tbody tr:last-of-type {
            border-bottom: 2px solid #2a2b2a;
        }

        #quotation-info th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #565858;
            color: white;
        }

        @media (min-width: 1024px) {
            .custom-container {
                width: 800px;
            }
        }

    </style>
</head>

<body>
    <br>
    <br>
    <div class="custom-container">
        <h2>{{ $details['title'] }}</h2>
        <table id="quotation-info">
            <tr>
                <th>Modelo</th>
                <th>Nombre cliente</th>
                <th>Celular</th>
                <th>Departamento</th>
                <th>Ciudad</th>
            </tr>
            <tr>
                <td data-title="Modelo">{{ $details['quotation']['modelo'] }}</td>
                <td data-title="Nombre cliente"> {{ $details['quotation']['nombre_completo'] }}</td>
                <td data-title="Celular">{{ $details['quotation']['nombre_completo'] }}</td>
                <td data-title="Departamento">{{ $details['quotation']['departamento'] }}</td>
                <td data-title="Ciudad">{{ $details['quotation']['ciudad'] }}</td>
            </tr>
        </table>
    </div>

</body>

</html>
