<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #FECECE;
    }

    .login-box {
      margin-top: 100px;
      background-color: white;
      box-shadow: 0px 10px 10px -5px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
    }
    .login-box a {
    text-decoration: none;
  }
  .login-box .btn-primary {
    background-color: #FECECE;
    border-color: #FECECE;
    border-radius: 100px;
    height: 50px;
    width: 150px;
  }
  .login-box input[type="text"],
  .login-box input[type="password"] {
    background-color: #EAEAEA;
    border-radius: 100px;
    height: 50px;
    padding-left: 30px; /* Adjust the value as needed */
  }
  .login-box input[type="text"]::placeholder,
  .login-box input[type="password"]::placeholder {
  }
  </style>
</head>
<body>
  <!-- Your page content will go here -->
  @yield('content')
</body>
</html>
