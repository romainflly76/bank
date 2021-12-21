<?php
include "view/templates/navbar.php";

?>

        

        <section class="vh-100" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
                                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form action="" method="POST" id="loginForm">

                                        

                                            <h5 class="fw-normal mb-5 pb-3" style="letter-spacing: 1px;">
                                                Connectez-vous
                                                pour acceder à vos comptes</h5>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="email" class="form-control form-control-lg"
                                                    name="email"
                                                    placeholder="Entrez votre adresse Mail" /><small></small>
                                                <label class="form-label" for="email"></label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="password" class="form-control form-control-lg"
                                                    name="password"
                                                    placeholder="Entrez votre mot de passe" /><small></small>
                                                <label class="form-label" for="password"></label>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-lg btn-block text-white w-100"
                                                    style="background-color: #9A616D;" type="button">Login</button>
                                            </div>

                                            <hr class="my-4">

                                            <button class="btn btn-lg btn-block w-100 text-white"
                                                style="background-color: #dd4b39;" type="submit"><i
                                                    class="fab fa-google me-2"></i> Connexion avec votre compte
                                                Google</button>
                                            <button class="btn btn-lg btn-block mb-2 mt-2 w-100 text-white"
                                                style="background-color: #3b5998;" type="submit"><i
                                                    class="fab fa-facebook-f me-2"></i>Connexion avec votre compte
                                                Facebook</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       