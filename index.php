<?php
function secure ($data){
   return trim(strip_tags(stripslashes($data)));
}
if(isset($_POST['submit'])){
    $name =secure($_POST['nom']);
    $mail = secure($_POST['mail']);
    $message = secure($_POST['message']);
    if(!empty($name && $mail && $message)){
        $message = wordwrap($message,70,'\r\n');
        $recevable ='ce message vous est envoyé via le site... 
        par : 
        '.$name. ' 
        E-mail : '.$mail.' 
        Message : '.$message;
        $sujet = 'je viens de visiter votre site';
        $headers = 'Reply-to:'.$mail;
        mail('tuliamtendji@gmail.com',$sujet, 
        $recevable,$headers);
    }
    else{
        echo 'remplissez tout les champs';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,user-scalable=no"
    />
    <title>Accueil - Robbie Lens Photographie</title>
    <link href="style/style.css" rel="stylesheet" />
    <link href="style/index.css" rel="stylesheet" />
    <!-- <link href="./style/a-propos.css" rel="stylesheet" /> -->
    <link href="style/equipe.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <script src="./js/home.js" defer></script>
  </head>

  <body>
    <header>
      <nav class="navigation">
        <div class="logos">
          <img
            class="lgs"
            src="images/YUDIL CONGO SARL.png"
            alt="Logo Robbie Lens"
            width="60"
            height="60"
          />
          <h2 class="ydl-h2">YUDIL</h2>
        </div>
        <div class="links">
          <a class="items" href="index.html">Accueil</a>
          <a class="items" href="a-propos.html">À propos</a>
          <a class="items" href="portfolio.html">Services</a>
          <a class="items" href="equipe.html">Equipe</a>
        </div>
      </nav>
    </header>
    <main>
      <section class="accueil-introduction">
        <div class="intro">
          <h1>Youth Developement And Improvment of Life(YUDIL)</h1>
          <p>
            Ma vision est de promouvoir les <em>créateurs d'emplois</em> plutot
            que les <em>demandeurs d'emplois</em>
            pour une large impact et un developpement durable.
          </p>
          <a href="a-propos.html" class="detail">EN SAVOIR PLUS</a> <br />
        </div>
        <img
          class="img"
          src="images/equipe/enoc-removebg-preview.png"
          width="300px"
          height="600px"
        />
      </section>
      <section class="accueil-photos">
        <h2>ILLUSTRATION</h2>
        <div class="les-images">
          <img
            class="ullistration-img js-imgs"
            src="images/accueil/aubergine.jpeg"
            width="400px"
            height="311px"
          />
          <img
            class="ullistration-img js-imgs"
            src="images/accueil/chou.jpg"
            width="400px"
            height="311px"
          />
          <img
            class="ullistration-img js-imgs"
            src="images/portfolio/tomate.jpg"
            width="400px"
            height="311px"
          />
        </div>
        <div class="images-none images-none-container">
          <img
            class="images-none js-imgs"
            src="images/portfolio/ail.jpg"
            width="400px"
            height="311px"
          />
          <img
            class="images-none js-imgs"
            src="images/accueil/matungulu2.jpg"
            width="400px"
            height="311px"
          />
          <img
            class="images-none js-imgs"
            src="images/accueil/canard.jpg"
            width="400px"
            height="311px"
          />
        </div>
      </section>
      <section class="section-contact">
        <h2>ETES-VOUS INTERESSE ?</h2>
        <form method="post">
          <div class="form-nom-email">
            <div class="form-column">
              <label for="nom">nom</label>
              <input type="text" name="nom" id="nom" /required />
            </div>
            <div class="form-column">
              <label for="email">E-mail</label>
              <input type="e-mail" name="mail" id="email"/required />
            </div>
          </div>
          <label for="message">Ecrivez nous</label>
          <textarea name="message" id="message" rows="10" /required ></textarea>
          <input type="submit" name="submit" value="ENVOYER" class="cta" />
        </form>
      </section>
    </main>
    <br />
    <br />
    <footer>
      <div class="footer">
        <div class="foot-header">
          <div class="appel">
            <p>
              <span> <i class="fa-solid fa-phone"></i></span>
              <span class="link-non">Nous appeler</span>
            </p>
            <p class="descrip">(+243)971176128</p>
          </div>
          <div class="mssg">
            <p>
              <span><i class="fa-solid fa-envelope"></i></span>
              <span class="link-non">nous envoyer un massage</span>
            </p>
            <p class="descrip">yudilsarl@gmail.com</p>
          </div>
          <div class="location">
            <p>
              <span><i class="fa-solid fa-location-dot"></i></span>
              <span class="link-non">Localisation</span>
            </p>
            <p class="descrip">Nord_kivu/Rutshuru</p>
          </div>
        </div>
        <div class="footer-links">
          <div class="media">
            <h3 class="link-non">Medias</h3>
            <br />
            <p class="link-non">
              visitez notre page facebook pour plus de contenus concernant nos
              réalisations <br />
              rejoignez notre communauté twiter pour des échanges
              <br />
              ou visitez notre profils linkedIn
            </p>
            <br />
            <div class="icons">
              <a href="https://www.facebook.com/profile.php?id=100071136923581"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
              <a
                href="https://twitter.com/NtahobarIrakiza?t=QwpmUPYjSEZJeWL3XpXQLA&s=08"
                ><i class="fa-brands fa-twitter"></i
              ></a>
              <a href="https://www.linkedin.com/in/yudil-asbl-83b462236"
                ><i class="fa-brands fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="quick-links e">
            <h3 class="link-non">Liens direct</h3>
            <br />
            <a href="index.html">Accueil</a> <br />
            <a href="a-propos.html">À propos</a><br />
            <a href="portfolio.html">Services </a> <br />
            <a href="equipe.html">Equipe</a>
          </div>
          <div class="yudil-partenaire link-non">
            <div class="yudil-img">
              <img
                class="yudil-img-none"
                src="images/AAN.png"
                alt=""
                width="80"
                height="80"
              />
              <img
                class="yudil-img-none"
                src="images/YUDIL CONGO SARL.png"
                alt=""
                width="80"
                height="80"
              />
            </div>
            <br />
            <p class="link-non">
              En partenariat avec l'entreprise ANT (accès à la nourriture pour
              tous), <br />
              il intervient également dans l'agro alimentaire <br />
            </p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
