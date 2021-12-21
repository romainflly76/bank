<?php include "template/navbar.php"; 

  include "template/headStat.php"; ?>

<section class="col-6 my-5 p-5">
  <h2>Nos statistiques:</h2>
  <h2>Taux d'emprunts, cours de la bourse ..</h2>
</section>
<div id="Ancre" class="contenair my-5 p-5">
<table class="table">
  <thead id="thead" class="thead">
    <tr>
      <th scope="col"></th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<!--**********************   Graphique ********************************-->
<html>
  <link
    rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    type="text/css"
  />
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script
    src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    type="text/javascript"
  ></script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
  <style>
    .container {
      width: 70%;
      margin: 15px auto;
    }
    body {
      text-align: left;
      color: #FAA916;
    }
    h2 {
      text-align: left;
      font-family: "Verdana", sans-serif;
      font-size: 30px;
    }
  </style>
  <body>
    <div class="container">
      <h2>Line Chart</h2>
      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </body>
  
  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday",
        ],
        datasets: [
          {
            label: "work load",
            data: [2, 9, 3, 17, 6, 3, 7],
            backgroundColor: "rgba(153,205,1,0.6)",
          },
          {
            label: "free hours",
            data: [2, 2, 5, 5, 2, 1, 10],
            backgroundColor: "rgba(155,153,10,0.6)",
          },
        ],
      },
    });
  </script>
</html>





  <!--************************* Card ********************************-->
  
   <main class="container">
       <div class="my-5">
    <section class="articles">
      <h2>Notre agence</h2>
      <div class="row mt-5">
        <div class="col-12 col-sm-6 col-lg-4">
          <article class="card">
            <img 1 src="img/piggy-bank-g506fbdbbf_640.jpg" class="card-img-top img-fluid" alt="epargne">
            <section class="card-body">
              <h5 class="card-title">Epargne</h5>
              <p class="card-text">Epargnes, PEL/ PER.</p>
              <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-dark me-1">Allez voir</a>
              </div>
            </section>
          </article>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <article class="card">
            <img 2 src="img/credit-card-g90f668ed2_640.jpg" class="card-img-top img-fluid" alt="T.P.E">
            <section class="card-body">
              <h5 class="card-title">TPE</h5>
              <p class="card-text">CB compatbile Tous TPE</p>
              <div class="d-flex justify-content-end"><a href="#" class="btn btn-dark me-1">Allez voir</a>
              </div>
            </section>
          </article>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <article class="card">
            <img 3 src="img/visa-g1957358f1_640.jpg" class="card-img-top img-fluid" alt="">
            <section class="card-body">
              <h5 class="card-title">E-commerce</h5>
              <p class="card-text">Protection des achats, vol..</p>
              <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-dark me-1">Aller voir</a>
              </div>
            </section>
          </article>
        </div>
      </section>
    </div>
   </main>


   <?php include "template/footer.php"; ?>