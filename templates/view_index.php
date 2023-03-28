<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\stylesheet.css" >
    <link rel="stylesheet" href="style\carousel.css" >
    <link rel="javascript" href="style\javascript.js" >
    <title>Com'Studio</title>
</head>
<body>
    <header>
        <div id="home" class="header-logo">Com'STUDIO</div>
    </header>

    <div id="connexion" class="block-taille-ecran acceuil">
        <a class="boutton" href = "/login">Voire les photos</a>
    </div>

    <div id="presentation" class="block-taille-ecran presentation">
        <img src="/image/Logo_Noir.jpg" alt="logoCom'Studio" class="logo-rond">
        <h2>Qui sommes-nous ?</h2>
        <p class="paragraphe-presentation">
            Laborum ad nisi labore mollit labore laborum veniam minim laborum commodo quis laborum. Consequat non eiusmod magna consectetur elit aliqua laborum aliqua irure aliqua duis. Labore officia fugiat commodo eiusmod et. Aliquip sint Lorem et pariatur aliqua adipisicing voluptate minim pariatur Lorem incididunt Lorem.
        </p>
    </div>


    <div id="portfolio" class="block-taille-ecran portfolio">
        <h2 class="centrer">Portfolio</h2>
        <div>
            <div class="carousel">
                <ul class="slides">
                <input type="radio" name="radio-buttons" id="img-1" checked />
                <li class="slide-container">
                    <div class="slide-image">
                    <img src="image/portfolio1.jpg">
                    </div>
                    <div class="carousel-controls">
                    <label for="img-5" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-2" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                    </div>
                </li>

                <input type="radio" name="radio-buttons" id="img-2" />
                <li class="slide-container">
                    <div class="slide-image">
                    <img src="image/portfolio2.jpg">
                    </div>
                    <div class="carousel-controls">
                    <label for="img-1" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-3" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                    </div>
                </li>

                <input type="radio" name="radio-buttons" id="img-3" />
                <li class="slide-container">
                    <div class="slide-image">
                    <img src="image/portfolio2.jpg">
                    </div>
                    <div class="carousel-controls">
                    <label for="img-2" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-4" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                    </div>
                </li>

                <input type="radio" name="radio-buttons" id="img-4" />
                <li class="slide-container">
                    <div class="slide-image">
                    <img src="image/portfolio4.jpg">
                    </div>
                    <div class="carousel-controls">
                    <label for="img-3" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-5" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                    </div>
                </li>

                <input type="radio" name="radio-buttons" id="img-5" />
                <li class="slide-container">
                    <div class="slide-image">
                    <img src="image/portfolio5.jpg">
                    </div>
                    <div class="carousel-controls">
                    <label for="img-4" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-1" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                    </div>
                </li>

                <div class="carousel-dots">
                    <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
                    <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
                    <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
                    <label for="img-4" class="carousel-dot" id="img-dot-4"></label>
                    <label for="img-5" class="carousel-dot" id="img-dot-5"></label>
                    <label for="img-6" class="carousel-dot" id="img-dot-6"></label>
                </div>
                </ul>
            </div>
            
        </div> 
    </div>
   

    <div id="offres" class="block-taille-ecran offre-grand ">
        <h2>Nos offres</h2>
        <div class="offres">
            <div class="carte">
                <h3>Etudiants UniLaSalle</h3>
                <div class="offres-contenu">
                    <li>Phographe - 8€/h</li>
                    <li>Retouche photos gratuite</li>
                    <li>Publication sur le site gratuite</li>
                    <li>Vidéaste - 8€/h</li>
                    <li>Montage - 8h€/min de vidéo</li>
                </div>
                <a href="reservation" class="boutton">Demander un devis </a>
            </div>
            <div class="carte">
                <h3>Entreprise</h3>
                <div class="offres-contenu">
                    <li>Phographe - 8€/h</li>
                    <li>Retouche photos gratuite</li>
                    <li>Publication sur le site gratuite</li>
                    <li>Vidéaste - 8€/h</li>
                    <li>Montage - 8h€/min de vidéo</li>
                </div>
                <a href="reservation" class="boutton">Demander un devis </a>
            </div>
            <div class="carte">
                <h3 >Particulier</h3>
                <div class="offres-contenu">
                    <li>Phographe - 8€/h</li>
                    <li>Retouche photos gratuite</li>
                    <li>Publication sur le site gratuite</li>
                    <li>Vidéaste - 8€/h</li>
                    <li>Montage - 8h€/min de vidéo</li>
                </div>
                <a href="reservation" class="boutton">Demander un devis </a>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-coordonnees">
        <div id="contact" class="contact">
        <h2>Nous contacter</h2>
        <form action="mailer.php" method="POST">
            <p>Adresse mail</p>
            <input type="text" name = "mail" id="mail"></input>
            <p>Message</p>
            <textarea name = "message" id="message"></textarea>
            <a class=boutton type="submit">Envoyer</a>
        </form>
        </div>
        <div class="coordonnees">
            <h2>Nos coordonnées</h2>
            <p class="label">Mail</p>
            <p class="info">comstudio@asso.unilasalle.fr</p>

            <p class="label">instagram</p>
            <p class="info">@comstudio_unilasalle</p>

            <p class="label">tiktok</p>
            <p class="info">@comstudio</p>

            <p class="label">Youtube</p>
            <p class="info">@comstudiounilasalle7497</p>
        </div>
    </div>
    


    <footer>
        <div class="conteneur-footer-logo">
            <img src="/image/Logo_Noir.jpg" alt="logoCom'Studio" class="logo-footer">
        </div>
        <div class="conteneur-footer-sommaire">
            <div class="sommaire">
                <div>
                    <a href="#home">Home</a>
                    <a href="#connexion">Se connecter</a>
                    <a href="#presentation">Qui sommes-nous ?</a>
                    <a href="#portfolio">Portfolio</a>
                </div>
                <div>
                    <a href="#offres">Nos offres</a>
                    <a href="#contact">Nous contacter</a>
                    <a href="#connexion">Les photos</a>
                </div>

            </div>
            <div class="ligne-logo">
                <p>Nous suivre sur :  </p>
                <a href="https://www.instagram.com/comstudio_unilasalle/" target="_blank">
                    <img src="image/instagram.svg"
                        height="30px"
                        width="30px"   
                        alt="logo Instagram">
                </a>
                <a href="https://www.tiktok.com/@comstudio" target="_blank" rel="noopener noreferrer">
                    <img src="image/tiktok.svg"
                            height="30px"
                            width="30px"   
                            alt="logo Tiktok">
                </a>
                <a href="http://www.youtube.com/@comstudiounilasalle7497" target="_blank" rel="noopener noreferrer">
                    <img src="image/youtube.svg"
                                height="30px"
                                width="30px"   
                                alt="logo Youtube">
                </a>
                <a href="https://www.linkedin.com/company/com-studio-unilasalle" target="_blank" rel="noopener noreferrer">
                    <img src="image/linkedin.svg"
                                height="30px"
                                width="30px"   
                                alt="logo Linkedin">
                </a>
                <a href="https://www.facebook.com/ComStudioUniLaSalleBeauvais" target="_blank" rel="noopener noreferrer">
                    <img src="image/facebook.svg"
                                height="30px"
                                width="30px"   
                                alt="logo Facebook">
                </a>
            </div>
        </div>
        <div class="conteneur-footer-mail">
            <a href="mailto:Comstudio@asso.unilasalle.fr">Comstudio@asso.unilasalle.fr</a>
        </div>
      

    </footer>
</body>
</html>