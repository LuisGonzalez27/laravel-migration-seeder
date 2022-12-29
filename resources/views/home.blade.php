<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container pt-5">
            <h2>Treni in partenza:</h2>
            <table class="table">
                <thead>
                  <tr class="table-info">
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo</th>
                    <th>Codice treno</th>
                    <th>Numero carrozze</th>
                    <th>In orario</th>
                    <th>Cancellato</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($trains as $train)
                    <tr class="table-group-divider">
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->in_orario == true ? 'Si' : 'No' }}</td>
                        <td>{{ $train->cancellato == false ? 'No' : 'Si' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>