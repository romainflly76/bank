<?php include "template/navbar.php"; 
     include "template/header.php"; 
?>



<section class="main">
<a class="arrow-wrap" href="#content">
<span class="arrow"></span>
<!--<span class="hint">scroll</span>-->
</a>
  
  <div class="content" id="content">
    <h1>Content Section</h1>
    <p>
      The purpose of this arrow demo is to indicate that there is further content down the page. While studies have generally shown that users <em>do, in fact,</em> scroll (thus killing the worries about page fold), it still has become somewhat fashionable to indicate scroll intent.
    </p>
    <p>
      A subtle animation triggered after a period of time draws attention to the scroll indicator. Some jQuery hides the indicator after the user begins scrolling.
      
    </p>
    
  
</section>


<main class="contenair">

   <!--************************* Card ********************************-->
  
   
   <section class="articles">
    <h2>Notre agence</h2>
    <div class="row my-5">
      <div class="col-15 col-sm-6 col-lg-4 mt-5">
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
  
    <?php include "template/footer.php"; ?>
