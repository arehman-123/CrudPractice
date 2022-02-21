<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
    <title>Crud Practices</title>
  </head>
  <body>
    <div class="container">
        <table class="table">
          <thead>
            <tr>
            <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $category)
              <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->email}}</td>
                <td>{{$category->description}}</td>
            </tr>
              @endforeach
          </tbody>
        </table>
        </div>
  </body>
  </html>
