
<?php include "template/navbar.php"; 
     include "template/header.php"; 
?>

 
  <section>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="img/toned-image-of-modern-office-buildings-in-central-hong-kong.jpg" class="d-block w-100" alt="Notre Agence">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="display-3">Retrouvez votre agence</h5>
        
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/female-financial-adviser-explaining-business-plan.jpg" class="d-block w-100" alt="Nos conseillers en investissement">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h2 class="display-3 text-white">Investissement</h2>
          <h2 class="display-6 text-white">Retrouvez nos conseillers en patrimoine immobilier</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/hand-inserting-atm-card-into-bank-machine-to-withdraw-money-businessman-men-hand-puts-credit-card-into-atm.jpg" class="d-block w-100" alt="Distributeur automatique de billets">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="display-3 text-white">retirez de l'argent</h5>
          <p class="blockquote text-white">En toute simplicité, partout dans le monde.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

  <!--************************* Card ********************************-->
  
   
    <section class="articles">
      <h2>Notre agence</h2>
      <div class="row mt-5">
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
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
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
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
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
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
      <!-- ************************** Popup ******************-->

<section id="btnPopup" class="btnPopup"></section>
<div id="overlay" class="overlay">
<div id="popup" class="popup">
  <h2>
    Attention !
    <span id="btnClose" class="btnClose">&times;</span>
    </h2>
    <div>
      <p id="contenu"> <!-- contenu Texte dans DATA-->
    </p>
    </div>
    </div>
    </div>
    <script src="js/popup.js"></script>

    
<?php include "template/footer.php"; ?>


    
