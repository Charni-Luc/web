<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function TmplVwHome() {
    return vwTmplmenu(Vwhome());
}

function TmplVwService() {
    return vwTmplmenu(vwService());
}

function TmplVwContact() {
    return vwTmplmenu(vwContact());
}

function TmplVwTeam() {
    return vwTmplmenu(vwTeam());
}

function tmplmeta() {
    $aff = '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="tmpl_team/images/favicon/favicon.png" type="image/x-icon">
    <link rel="icon" href="tmpl_team/images/favicon/favicon.png" type="image/x-icon">

    <title>Spiritus of Africa, l\'Afrique qui vous met en confiance</title>

    <link href="tmpl_team/css/bootstrap.min.css" rel="stylesheet">
    <link href="tmpl_team/css/lib/font-awesome.css" rel="stylesheet">
    <link href="tmpl_team/css/lib/nivo-lightbox.css" rel="stylesheet">
    <link href="tmpl_team/css/lib/nivo-themes/default/default.css" rel="stylesheet">

    <!--Template Styles-->
    <link href="tmpl_team/css/style.css" rel="stylesheet">
    <link href="tmpl_team/css/scheme/purple.css" rel="stylesheet">

    <!--Dow Template -->
    <link rel="stylesheet" href="tmpl_dow/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="tmpl_dow/css/eden-responsive.css">
    <link rel="stylesheet" href="tmpl_dow/css/dow.css">

    <!-- Contact -->
    <!--link href="tmpl_ctct/css/bootstrap.min.css" rel="stylesheet">
    <link href="tmpl_ctct/css/style.css" rel="stylesheet"-->
</head>';
    return $aff;
}

function vwTmplmenu($contenu = " ") {
    $aff = tmplmeta();
    $aff .= '<body data-spy="scroll">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <div id="main-wrapper">

        <!-- Site Navigation -->
        <div id="menu">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?adrs=head#">
                        <img src="tmpl_team/images/logo.png" alt="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?adrs=head">Accueil</a></li>
                        <li><a href="index.php?adrs=service">Services</a></li>
                        <li><a href="index.php?adrs=equipe">Equiques</a></li>
                        <li><a href="index.php?adrs=contact">Contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <!-- END MENU -->';

    $aff .= isset($contenu) ? $contenu : " ";

    $aff .= '<!-- BEGIN FOOTER -->
            <footer>
                <div class="row">
                    <div class="col-md-12">
                        <div class="social">
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                            <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                        </div>
                             <p>
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Win Enterprise</a>
                            </p>
                    </div>
                </div>
            </footer>
            <!-- END FOOTER -->
        </div>
    </div>


    <!-- Back to top -->
    <div id="backtotop">
        <a class="to-top-btn sscroll" href="index.php?adrs=acc"><i class="fa fa-angle-double-up"></i></a>
    </div>


    <!-- Library Scripts -->
    <script src="tmpl_team/js/jquery-1.10.2.min.js"></script>
    <script src="tmpl_team/js/lib/jquery.preloader.js"></script>
    <script src="tmpl_team/js/lib/nivo-lightbox.min.js"></script>
    <script src="tmpl_team/js/bootstrap.min.js"></script>
    <script src="tmpl_team/js/lib/jquery.superslides.min.js"></script>
    <script src="tmpl_team/js/lib/smoothscroll.js"></script>
    <script src="tmpl_team/js/lib/jquery.sudoslider.min.js"></script>
    <script src="tmpl_team/js/lib/jquery.bxslider.min.js"></script>
    <script src="tmpl_team/js/lib/jquery.mixitup.min.js"></script>
    <script src="tmpl_team/js/lib/jquery.backtotop.js"></script>
    <script src="tmpl_team/js/lib/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="tmpl_team/js/lib/retina.min.js"></script>
    <!-- Custom Script -->
    <script src="tmpl_team/js/main.js"></script>
    <script type="text/javascript" src="tmpl_ctct/js/jquery.min.js"></script>

<script src="tmpl_ctct/js/bootstrap.min.js"></script>

</body>

</html>';
    return $aff;
}

function Vwhome() {
    $aff = '
 <div id="container">
  <section id="feature4" class="feature4">
   <br />
<div class="row titles text-center">
    <h2>ACCUEIL</h2>
    <div class="separator"><img src="tmpl_ctct/images/sep.png" alt="sep"></div>
    <p class="small-paragraph">L’Afrique, la guérison, la tradition et le monde spirituelle.</p>
  </div>
<br />
<div class="container-fluid">
            <div class="row">
                <div class="col-md-6 padding-0">
                    <div class="content-iphone">
                        <img class="img-responsive" src="tmpl_dow/images/bg1.jpg" alt="iphone">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="single-content">
                        <h3>Qui Sommes Nous ?</h3>
                        <p style="text-align: justified;">
                            Spiritus Africa est une plateforme qui se décide à vous faire découvrire les
                            merveille de la tradition africane pour la résolution de vos problème d\'ordre <span style="font-size: 1.1em; font-weight: bold;">Economique</span>,
                            <span style="font-size: 1.1em; font-weight: bold;">Physique ou Santé</span> et <span style="font-size: 1.1em; font-weight: bold;">Spirituel</span>.
                            La Tradition Africaine  n’est ni bonne ni mauvaise, il est un peu comme l’argent dont les résultats de sa dépense
                            dépendent entièrement du l’état de pensée de la personne qui la possède. Pourtant, nous ne
                            pouvons jamais cesser de chercher l’argent toute notre vie puisque nous croyons en sa capacité
                            de pouvoir nous procurer la majorité de ceux dont nous avons besoin pour notre existence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end feature 4 --><!-- Content section 9 -->
    <section id="feature4" class="feature4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-content">
                        <h3>Pourquoi Nous choisir ?</h3>
                        <p>
                            Nous vous proposons les services de nos différents partenaires responsables, très compétent
                            avec de nombreuse année de pratique ; des partenaires qui travaille avec des hommes influant
                            comme les politiciens, les multinationaux et même des particuliers comme vous et moi mais
                            qui ont le minimum de ressource financière qu’il faut. Ils vous aideront avec notre
                            accompagnement à trouver de solution à vos différents problèmes.
                        </p>
                    </div>
                </div>
                <div class = "col-md-6 col-md-offset-1 padding-0">
                    <div class = "content-iphone">
                        <img class = "img-responsive" src = "tmpl_dow/images/bg2.jpg">
                    </div>
                </div>
             </div>
    <!--end row -->
        </div>
    </section>
    <section id = "feature4" class = "feature4">
    <div class = "container-fluid">
    <div class = "row">
    <div class = "col-md-6 padding-0">
    <div class = "content-iphone">
    <img class = "img-responsive" src = "tmpl_dow/images/bg0.jpg" alt = "iphone">
    </div>
    </div>
    <div class = "col-md-6">
    <div class = "single-content">
    <h3>Nos principes</h3>
    <p>
    Le monde de la Tradition Africane sont régit par deux principes fondamentaux.<br />
    <span style="font-size: 1.1em; font-weight: bold;">La conscience:</span> Le Tradition
    Africaine est un monde d\'action - réponse donc une fois engagée on doit aller jusqu\'au bout
    en se préparant financière et physchologie.<br />
    <span style="font-size: 1.1em; font-weight: bold;">La discrétion:</span> Dans ce mon monde, vouloir tout dire peut entrainer votre chute. Ici tout ce qui existe peux ne
pas l’être et la règle des trois singes est universellement appliquer.
    </p>
    </div>
    </div>
    </div>
    <!--end row -->
    </div>
    </section>
    </div>';
    return $aff;
}

function vwService() {
    $aff = '
    <div id = "container">
    <section id = "services" class = "services">
<br />
<div class = "row">
    <div class = "col-md-12">
    <div class="row titles text-center">
    <h2>SERVICES</h2>
    <div class="separator"><img src="tmpl_ctct/images/sep.png" alt="sep"></div>
    <p class="small-paragraph">L’Afrique, la guérison, la tradition et le monde spirituelle.</p>
  </div>
    </div>
    <br />
    <div class = "col-md-12">
    <div class = "row">
    <div class = "col-md-4 col-sm-6 col-xs-12">
         <div class = "service">
            <div class = "icon-holder">
            <i class = "fa fa-heartbeat"></i>
            </div>
    <h3 class = "heading">ECONOMIE</h3>
        <p class = "description">Le service <span style="font-weight: bold;">économie</span>
            vous propose toute sorte de solution pour vos problème de boostage d\'activité, d\'accroissement
            de la chance pour les emplois et les pormotions dans votre service, de fructification de vos commencerce. <br/>
            Il met à votre disposition un personnel compétent et référentiel en la matière et vous accompagne
            le long du processus pour une sécurité et transparence totale dans les transanctions.</p>
        </div>
    </div>
    <div class = "col-md-4 col-sm-6 col-xs-12">
    <div class = "service">
    <div class = "icon-holder">
    <i class = "fa fa-life-ring"></i>
    </div>
    <h3 class = "heading">SANTE</h3>
    <p class = "description">Le service <span style="font-weight: bold;">santé</span>
            vous propose toute sorte de solution pour vos problème de santé à savoir: Diabète, Ulsère, Troma, Paralysie, etc.<br/>
            Il met à votre disposition un personnel compétent et référentiel en la matière et vous accompagne
            le long du processus pour une sécurité et transparence totale dans les transanctions.</p>
            </div>
    </div>
    <div class = "col-md-4 col-sm-6 col-xs-12">
    <div class = "service">
    <div class = "icon-holder">
    <i class = "fa fa-rocket"></i>
    </div>
    <h3 class = "heading">SPIRITUALITE</h3>
    <p class = "description">Le service <span style="font-weight: bold;">spiritualité</span>
            vous propose toute sorte de solution pour vos problème de santé à savoir: Diabète, Ulsère, Troma, Paralysie, etc.<br/>
            Il met à votre disposition un personnel compétent et référentiel en la matière et vous accompagne
            le long du processus pour une sécurité et transparence totale dans les transanctions.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>';
    return $aff;
}

function vwTeam1() {
    $aff = '';
    return $aff;
}

function vwTeam2() {
    $aff = '';
    return $aff;
}

function vwTeam3() {
    $aff = '

    ';
    return $aff;
}

function vwTeam() {
    $aff = '<div id="container">
        <section id="about" class="about gray">
                <div class="row">
                    <div class="col-md-12 mg-bt-80">
                        <div class="header-content">
                            <h2>The Team</h2>
                            <h3>People behind the success</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row mg-bt-40">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="teams">
                                    <div class="pict">
                                        <img src="tmpl_team/images/team/01.jpg" alt="Team 1">
                                    </div>
                                    <div class="desc">
                                        <h3>John Doe</h3>
                                        <span>Tradi-Thérapeutre</span>
                                        <div class="social">
                                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                                            <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="teams">
                                    <div class="pict">
                                        <img src="tmpl_team/images/team/02.jpg" alt="Team 1">
                                    </div>
                                    <div class="desc">
                                        <h3>Jane Doe</h3>
                                        <span>Chef service spiritualité</span>
                                        <div class="social">
                                            <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                            <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                                            <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="teams">
                                    <div class="pict">
                                        <img src="tmpl_team/images/team/03.jpg" alt="Team 1">
                                    </div>
                                    <div class="desc">
                                        <h3>John Doe</h3>
                                        <span>Tradi-Thérapeutre</span>
                                        <div class="social">
                                            <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                                            <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                            <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="teams">
                                    <div class="pict">
                                        <img src="tmpl_team/images/team/04.jpg" alt="Team 1">
                                    </div>
                                    <div class="desc">
                                        <h3>Jane Doe</h3>
                                        <span>Guérriseur traditionnel</span>
                                        <div class="social">
                                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:;"><i class="fa fa-instagram"></i></a>
                                            <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <!-- END TEAM -->';
    return $aff;
}

function vwContact() {
    $aff = ' <div id="container">
        <section class="contact-us">
      <div class="row">
        <div class="col-md-8">
          <h3>Send us a message</h3>
          <hr>
          <p>Our friendly customer service representatives are committed to answering all your questions and meeting any need you may have. We would love to hear from you! Please fill out the form below so we may assist you.</p>
          <br />
          <p id="feedback"></p>
          <form role="form" id="contact-form" name="contact-form" method="post" action="" class="contact-form">
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Your Name: *</label>
              <input required type="text" class="form-control" id="name" name="name" placeholder="Your Name: *">
            </div>
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Email: *</label>
              <input required type="email" class="form-control" id="email" name="email" placeholder="Email: *">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail1">Subject:</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject:">
            </div>
            <div class="form-group">
              <textarea required class="form-control" id="message" name="message" rows="5" placeholder="Message: *"></textarea>
            </div>
            <input id="submit-button" type="submit" class="btn btn-lg btn-info" value="Submit">
          </form>
        </div>
        <div class="col-md-4">
          <h3>Get in touch with us</h3>
          <hr>
          <p>Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
          <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
          <p class="black-text"><span class="orange">Address:</span> 123 Street, Fremont, CA, USA</p>
          <p class="black-text"><span class="orange">Telephone:</span> 866-123-4555</p>
          <p class="black-text"><span class="orange">Fax:</span> 866-111-222-3455</p>
           </div>
      </div>
    </div>
  </section>
</section>

<!--section id="contact" class="contact gray">
                <div class="row">
                    <div class="col-md-12 mg-bt-80">
                        <div class="row titles text-center">
                            <h2>Contactez Nous</h2>
                            <div class="separator"><img src="tmpl_ctct/images/sep.png" alt="sep"></div>
                            <p class="small-paragraph">L’Afrique, la guérison, la tradition et le monde spirituelle.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="address">
                            <h2>Envoyer nous un message</h2>
                            <p>Nos représentants amicaux se sont engagés à répondre toutes
                                vos questions et satisfaire tout besoin que vous pouvez avoir.
                                Nsous aimerions avoir des nouvelles de vous! S\'il vous plaît
                                remplissez le formumaire et nous pouvons vous aider.</p>
                            <h2>Team Office</h2>
                            <ul class="office">
                                <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                                <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                                <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <form id="contact-form" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="c_name" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="c_email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="c_message" rows="10" placeholder="Message"></textarea>
                            </div>
                            <br/>
                            <button type="submit" class="btn">Send Message</button>
                            <div class="ajax-response"></div>
                        </form>
                    </div>

                </div>
            </section-->
            <script type="text/javascript">
            function send_special_order() {
                var data1 = $("#name").val();
                var data2 = $("#subject").val();
                var data3 = $("#email").val();
                var data4 = $("#message").val();
        $.ajax({
			type: "POST",
			url: "send.php",
			dataType : "json",
			data: ( {"name" : data1, "subject" : data2, "email" : data3,"message" : data4} ) ,
			   success: function() {

			   },
                           complete: function(){
                                $("#feedback").append(\'<p>Thank you for sending us a message. Our specialists will contact you as soon as possible.</p><p>Your message details are:</p>\n\
                                <ul>\n\
                                    <li>Name: <b>' + data1 + '</b></li>\n\
                                    <li>Email: <b>' + data3 + '</b></li>\n\
                                    <li>Subject: <b>' + data2 + '</b></li>\n\
                                    <li>Message: <b>' + data4 + '</b></li>\n\
                                </ul>\n\
                                <p>If you want to change your information press the button:\n\
                                <p><a href="#" id="send-more" class="btn btn-lg btn-info">edit info</a></p>\');
                                $("#contact-form").slideUp();
                                $("send-more").click(function(e){
                                    e.preventDefault()
                                    $("#contact-form").slideDown();
                                    $("#feedback").html("");
                                });
                           }
        });
}
            $("#contact-form").submit(function() {
                send_special_order();
                return false;
            });
        </script>

            <!-- END CONTACT -->
</div>';
    return $aff;
}
