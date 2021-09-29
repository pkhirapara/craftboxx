<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.min.css') }}>
    <title>Craftboxx</title>
  </head>
  <body>
    <h1>Craftboxx Customers</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Commercial</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customer as $customer_deatils)
          <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $customer_deatils->firstname }}</td>
            <td>{{ $customer_deatils->lastname }}</td>
            <td>{{ $customer_deatils->isCommercial?"Yes":"No" }}</td>
          </tr>
          @endforeach

          
        </tbody>
      </table>


    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

  </body>
</html>