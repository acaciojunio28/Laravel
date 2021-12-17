<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
</head>
<body>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-light bg-primary2 shadow p-3 mb-5" style="background-color:#0000FF;" id="nav">
<a class="navbar-brand" href="#">
 
</a>
  <div class="cotainer" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="/">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/sobre">sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/contato">contato</a>
      </li>
    </ul>
  </div>
</nav>
@yield('conteudo')
<footer class="page-footer font-small">

<div class="footer-copyright text-center py-3">© 2021 Copyright:
    <p > BDR | BDR </p>
  </div>

</footer>
</body>
</html>