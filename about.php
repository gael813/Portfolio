<?php
$visit = 'about';
$title = 'À propos de moi';
require 'header.php';
?>
    <div class="container presentation bg-light">
        <img class="img-circle zoom" src="/SRC/Photo CV.jpg" height="300" width="auto" alt="Photo CV">
        
        <h2>Présentation</h2>
        <p class="width" >Je m'appelle LEULIER Gael j'ai 24 ans, et je suis actuellement étudiant chez STUDI DIGITAL EDUCATION depuis le 2 novembre 2020.<br>
        Étant passionné de l'informatique et de son potentiel, j'ai commencé à apprendre les bases de HTML/CSS & JavaScript via différentes plateformes comme OpenClassRooms.</p>
        
        <h2>Langages :</h2>
        <ul class="list-unstyled">
            <li>HTML</li>
            <li>CSS</li>
            <li>Bootstrap</li>
            <li>PHP</li>
        </ul>

        <h2>Outils de développement :</h2>
        <ul class="list-unstyled">
            <li>GitHub</li>
            <li>Visual Studio Code</li>
        </ul>

        <video controls width="250" poster="/SRC/vignette.PNG">
            <source src="/SRC/Video de motivation Stage.mp4"
                    type="video/mp4">
            Sorry, your browser doesn't support embedded videos.<br>
            Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
        </video>

        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contacter moi</h2>
            <p class="text-center w-responsive mx-auto mb-5">Vous avez des questions ? N'hésitez pas à me contacter directement.</p>

            <div class="row">

                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" disabled name="name" class="form-control">
                                    <label for="name" class="">Votre nom</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" disabled name="email" class="form-control">
                                    <label for="email" class="">Votre adresse mail</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" disabled name="subject" class="form-control">
                                    <label for="subject" class="">Sujet</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" disabled name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Votre message</label>
                                </div>

                            </div>
                        </div>

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                    </div>
                    <div class="status"></div>
                </div>

                <div class="col-md-3 text-center ">
                    <div>
                        <a href="https://goo.gl/maps/5AUYeonSMpsRaJcG7" target="_blank" class="text-decoration-none">29Ter Chemin de Beldou, 31150 Lespinasse</a>
                    </div>
    
                    <div class="my-5">
                        <a href="tel:+0645552362" class="text-decoration-none my-5">06 45 55 23 62</a>
                    </div>
            
                    <div>
                        <a href="mailto:gael.leulier@orange.fr" class="text-decoration-none">gael.leulier@orange.fr</a>
                    </div>  
                </div>

            </div>

        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
    </body>
</html>