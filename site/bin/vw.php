<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function vwTmplmeta() {
    $aff = '<DOCTYPE html>
      <html lang="en">
      <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Finance +</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="delta/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="delta/css/font-awesome.min.css">
    <link rel="stylesheet" href="delta/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="delta/css/eden-responsive.css">
    <link rel="stylesheet" href="delta/css/default.css">
    <link rel="stylesheet" href="delta/css/main.css">
 </head>';
    return $aff;
}

function vwTmplctn($contenu = " ") {
    $aff = vwTmplmeta();
    $aff .= '<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.php"><span>BANK FINANCE PLUS</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.php">Accueil</a></li>
            <li role="presentation"><a href="index.php?adrs=pcdr">Procédure</a></li>
            <li role="presentation"><a href="index.php?adrs=cdtn">Conditions</a></li>
            <li role="presentation"><a href="index.php?adrs=dmdcdt">Demande de crédit</a></li>
            <li role="presentation"><a href="index.php?adrs=ctct">Contact</a></li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
';

    $aff .= isset($contenu) ? $contenu : "";
    $aff .= '  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.php"><h1>Bank Finance Plus</h1></a>
            <p>BANK FINANCE PLUS comprend des experts de la propriété de crédit et mobilisées pour écouter et servir ses clients. Un réseau d\'agents unis..</p>

          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Demades de Prêt</h3>
            <ul>
              <li><a href="#">Crédit Immobilier</a></li>
              <li><a href="#">Crédit Automobile</a></li>
              <li><a href="#">Crédit Travaux</a></li>
              <li><a href="#">Crédit Etudes</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Adresse</h3>
            <a href="#">
              <p><i class="fa fa-envelope"></i>A remplir</p>
            </a>
            <p><i class="fa fa-phone"></i> A remplir</p>
            <p><i class="fa fa-home"></i> A remplir</p>
          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; 2014 Bank Finance Plus. Tous droits réservés.
            <div class="credits">
            Designed by Win Enterprise
            </div>
          </div>

          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/functions.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
</body>
</html>';
    return $aff;
}

function vwTmplAcc() {
    return vwTmplctn(vwAcc());
}

function vwTmplCdtn() {
    return vwTmplctn(vwCdtn());
}

function vwTmplPcdr() {
    return vwTmplctn(vwPcdr());
}

function vwTmplDmdCdt() {
    return vwTmplctn(vwDmdCdt());
}

function vwTmplCtct() {
    return vwTmplctn(vwCtct());
}

function vwAcc() {
    $aff = '
  <div class="slider">
    <div class="img-responsive">
      <ul class="bxslider">
         <li><img src="img/8.jpg" alt="" /></li>
      </ul>
    </div>
  </div><hr>
    <div class = "container">
    <div class = "col-md-4">
    <img src = "img/p.jpg" alt = "" class = "img-responsive" />
    </div>
    <div class = "col-md-8">
    <h2>QUI SOMMES NOUS ?</h2>
    <p>
    BANK FINANCE PLUS comprend des experts de la propriété <br />de crédit et mobilisées pour écouter et servir ses clients. Un réseau d\'agents unis.<br />
    BANK FINANCE PLUS se rend disponible et vous apporte les<br /> meilleures conditions de financement.
    </p>
    </div>
    </div>
    <hr>
    <div class = "container">
    <div class = "col-md-8">
    <h2>FINANCEMENT DES PROJETS</h2>
    <p>
    La demande en ligne est une démarche sécurisée sans engagement de votre part. Elle vous permet d\'obtenir une réponse de principe immédiatement.
    Pour faire votre demande de crédit en ligne vous devez respecter certains conditions, comme être majeur capable. En outre, vous devez disposez
    d\entrées d\'argent régulières et être en mesure de régler ses mensualités. <br />
    Qui peut bénéficier d\'un crédit chez BANK FINANCE PLUS ? Les crédits sont destinés aux particuliers de tous secteurs d\'activités, que vous soyez
    fonctionnaire du secteur public ou privé, particuliers à votre propre compte, artisans, commerçants,
    vous exercez dans n\'importe quel secteur activité, vous êtes la bienvenu. Notre objectif est
    de contribuer à l\'amélioration de votre cadre de vie et à la réalisation de vos projets en vu
    de soutenir toute personne honnête en situation difficile.
    </p>
    </div>
    <div class = "col-md-4">
    <img src = "img/5.jpg" alt = "" class = "img-responsive" />
    </div>
    </div>
    <hr>
    <div class = "container">
    <div class = "col-md-4">
    <img src = "img/3.jpg" alt = "" class = "img-responsive" />
    </div>
    <div class = "col-md-8">
    <h2>NOS TAUX D\'INTERETS</h2>
    <p>
    Nous mettons à votre dispositon des prêts à des conditions très souples.
    Nos taux d\'intêrets varient en fonction du montant demandé et du délai de règlement.
    Nos taux sont relativement faibles et varient entre 2% et 8,90%. Choisir le Prêt Perso, c\'est bénéficier d\'un taux d\'intêret fixe.
    Il ne change pas pendant toute la durée de votre prêt. C\'est vous qui choisissez le montant et la durée la mieux adaptée à votre situation.
    Grâce au Prêt Perso, vous pour emprunter un montant de 3000€ à 5.000.000€ sur une durée de 12 à 240 mois.
    </p>
    </div>
    </div>
    <hr>
    <div class = "profile">

    </div>';
    return $aff;
}

function vwPcdr() {
    $aff = '
  <div class="slider">
    <div class="img-responsive">
      <ul class="bxslider">
         <li><img src="img/9.jpg" alt="" /></li>
     </ul>
    </div>
  </div>
  <div class="breadcrumb navbar-fixed-top">
    <h2>Procédures</h2>
  </div>
  <section id="content-section1" class="content-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center section-titles">
                    <h2 class="section-title">Procédure De Prêt</h2>
                    <p class="section-para">Obtenez votre prêt en 8 étapes.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-content">
                       <h3><span class="label label-info">ETAPE 1</span></h3>
                        <p>
                            Préparez-vous à signer un certificat d\'enregistrement de votre demande de prêt.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-content">
                        <h3><span class="label label-success">ETAPE 2</span></h3>
                        <p>
                            Remplissez le formulaire de prêt.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-content">
                        <h3><span class="label label-warning">ETAPE 3</span></h3>
                        <p>
                            L\'imprimante doit renvoyer cette pièce d\identité pour vérifier votre identité.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-content">
                        <h3><span class="label label-danger">ETAPE 4</span></h3>
                        <p>
                            Préparation d\'un contrat de confiance entre le prêteur et l\'imprimeur. Et les signés nous envoient plus tard.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-content">
                        <h3><span class="label label-default">ETAPE 5</span></h3>
                        <p>
                            Payer les frais d\'octroi de votre prêt en toute sécurité.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-content">
                    <h3><span class="label label-info">ETAPE 6</span></h3>
                       <p>
                            Transfert rapide du prêt sur votre compte bancaire.
                       </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="text-center single-content">
                    <h3><span class="label label-success">ETAPE 7</span></h3>
                         <p>
                            L\'imprimante doit payer les frais d\'assurance en cas de maladie, d\'accident, etc.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-content">
                        <h3><span class="label label-warning">ETAPE 8</span></h3>
                        <p>
                            Enfin, vous recevrez votre prêt en toute satisfaction.
                        </p>
                    </div>
                </div>

                    <div class="text-center single-content">
                    <h4><span class="label label-danger">NB:</span></h4>
                        <p>
                            Tout empreinte digitale qui violerait la loi ou ne paierait pas ces frais serait passible d\une amende.
                        </p>
                    </div>
                </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>';
    return $aff;
}

function vwCdtn() {
    $aff = ' <div class="slider">
    <div class="img-responsive">
      <ul class="bxslider">
        <li><img src="img/7.jpg" alt="" /></li>
      </ul>
    </div>
  </div>
  <div class="breadcrumb navbar-fixed-top">
    <h2>Conditions</h2>
  </div>
<hr>
        <div class="perso">
    <div class = "container">
    <div class = "col-md-8">
    <h4 class="section-title">Condition à remplir pour obtenir un crédit</h4>
    <p>
    *Être àgée d\'au moins 18ans.
    *Être de bonne moralité quitte à honorer un engagement.
    *Avoir une source de revenue mensuel minimun de 400€
    </p>
    </div>
    </div>
    <hr>
    <div class = "container">
    <div class = "col-md-8">
    <h4 class="section-title">Taux d\'intêret</h4>
    <p>
        Le taux d\'intêret varient de 2% à 6% en fonction du montant demandé et de la durée de remboursement.
    </p>
    </div>
    </div>
    <hr>
    <div class = "container">
    <div class = "col-md-8">
    <h4 class="section-title">Durée du prêt</h4>
    <p>
        La durée de votre prêt ne peut pas excéder les 30 ans.
    </p>
    </div>
    </div>
    <hr>
    <div class = "container">
    <div class = "col-md-8">
    <h3 class="section-title">Début des prélèvements mensuels</h3>
    <p>
        Ils débutent entre 60(2 mois) et 90(3 mois) jours à compter du jour où l\'emprunteur reçoit le montant intégral de son prêt.
    </p>
    </div>
    </div>
    <hr>
    <div class = "container">
    <div class = "col-md-12">
    <h4 class="section-title">Pause dans le remboursement ou report de mensualités</h4>
    <p>
        Pour étudier la possibilité de reporter une échéance, vous pouvez nous contacter par téléphone ou depuis le formulaire
        de contact disponible sur notre site web. Le report produit des intêrets au taux en vigeur,
        la prime ayant pour objet la garantie du crédit sera calculée si l\'assurance a été souscrite.<br />
        Pour plus d\'information veillez nous contacter.
    </p>
    </div>
    </div>
    <hr>
    <div class = "container">
    <div class = "col-md-12">
    <h4 class="section-title">Accord de prêt et assurance</h4>
    <p>
        L\'emprunteur aura à signer un accord de prêt et un certificat d\'assurance-crédit.
        L\'assurance vous couvre en cas de décès, perte total et irréversible d\'autonomie,
        incapacité total de travail par maladie ou accident et perte d\'emploi par suite de licenciement indemnisé.
    </p>
    </div>
    </div>
    </div>';
    return $aff;
}

function vwCtct() {
    $aff = '
<div class="slider">
    <div class="img-responsive">
      <ul class="bxslider">
         <li><img src="img/portfolio/1.jpg" alt="" /></li>
     </ul>
    </div>
  </div>
  <div class="breadcrumb navbar-fixed-top">
    <h2>Contact</h2>
  </div>
<div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="recent">
          <h3>Envoyez-nous un message</h3>
        </div>

        <form action="index.php?adrs=trtmt" method="post" role="form" class="contactForm">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>

          <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Envoyer Message</button></div>
        </form>
      </div>

      <div class="col-lg-6">
        <div class="recent">
          <h3>Get in touch with us</h3>
        </div>
        <div class="">
          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>
          <h4>Address:</h4>Little Lonsdale St, New York<br>
          <h4>Telephone:</h4>345 578 59 45 416</br>
          <h4>Fax:</h4>123 456 789
        </div>
      </div>
    </div>
  </div>';
    return $aff;
}

function vwDmdCdt() {
    $aff = '    <div class="slider">
    <div class="img-responsive">
      <ul class="bxslider">
         <li><img src="img/9.jpg" alt="" /></li>
     </ul>
    </div>
  </div>
  <div class="breadcrumb navbar-fixed-top">
    <h2>Demande de crédit</h2>
  </div>
  <div class="container">
        <div class="row">
           <div class="col-md-8 col-md-offset-2 text-center section-titles">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Formulaire de demande de crédit</h4>
                  <p class="card-description">
                    Veillez bien remplir les champs ci-dessous:
                  </p>
                  <form class="forms-sample" action="index.php?adrs=cdttr" method="post">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email:*</label>
                      <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Votre email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom:*</label>
                      <input type="text" class="form-control" name="nom" id="exampleInputUsername1" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Prénoms:*</label>
                      <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" placeholder="Vos Prénoms">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Téléphone:*</label>
                      <input type="text" class="form-control" name="tel" id="exampleInputConfirmPassword1" placeholder="Votre contact">
                    </div>

                    <div class="container">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername5">Adresse:*</label>
                      <input type="text" class="form-control" name="adresse" id="exampleInputUsername5" placeholder="Adresse">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail6">Code Postal:*</label>
                      <input type="text" class="form-control" name="postal" id="exampleInputEmail6" placeholder="Code postal">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword7">Pays:*</label>
                      <input type="text" class="form-control" name="pays" id="exampleInputConfirmPassword7" placeholder="Pays">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword8">Ville:*</label>
                      <input type="text" class="form-control" name="ville" id="exampleInputPassword8" placeholder="Ville">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword9">Durée du prêt(Année):*</label>
                      <input type="text" class="form-control" name="durée" id="exampleInputConfirmPassword9" placeholder="Durée du prêt">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword10">Montant du prêt(€):*</label>
                      <input type="number" class="form-control" name="pret" id="exampleInputPassword10" placeholder="Montant du prêt">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Envoyer la demande</button>
                  </form>
                  <br />Nous sommes à votre disposition. Nos taux de variation varient en fonction du montant demandé et du délai de règlement.
                  Nos taux sont relativement faibles et variables entre 2% et 8,90%.<br />
                  <br />
                  <span>NB:</span> Les champs marqués (*) sont obligatoires.
                  <hr>
                </div>
              </div>
            </div>
            </div>
            </div>';
    return $aff;
}
