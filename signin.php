<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="accés comptes bancaire">
    <meta name="Romain" content="connexion accés comptes">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>
    <link rel="shortcut icon" type="image/jpg" href="img/icone.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/moncompte.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">-->

    

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/moncompte.css" rel="stylesheet">
  </head>
  <body>
    
    
    
    <main class="form-signin">
      
        <img class="mb-4" src="img/RB.png" alt="" width="250" height="300">
        <h1 class="h3 mb-3 fw-normal">connectez-vous</h1>
    
        <form  action="" method="POST" id="loginForm">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"/>
            <small style="font-size: 1.2em;"></small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password"/>
            <small style="font-size: 1.2em;"></small>
          </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> se souvenir de moi
          </label>
        </div>
      </form>
      
      <a href="moncomptebancaire.php"><button id="signin" class="w-100 btn btn-lg text-white" type="submit">Connexion</button></a>
        <p class="mt-5 mb-3 text-white">&copy; 2017–2021</p>
    </main>
    
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="js/signin.js"></script>
    
    
  </body>
</html>
