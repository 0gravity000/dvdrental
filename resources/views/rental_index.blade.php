<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/top">Navbar</a>
            </div>
        </nav>

        <div class="row">
          <div class="col">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">rental_data</th>
                  <th scope="col">inventory_id</th>
                  <th scope="col">customer_id</th>
                  <th scope="col">return_date</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rentals as $rental)
                <tr>
                  <th scope="row">{{ $rental->id }}</th>
                  <td>{{ $rental->rental_date }}</td>
                  <td>{{ $rental->inventory_id }}</td>
                  <td>{{ $rental->customer_id }}</td>
                  <td>{{ $rental->return_date }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        
          </div>
        </div>

    </div>
</body>
</html>