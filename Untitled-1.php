<?php
include "config.php";
  ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CHAOUI OUMAIMA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
  <style type="text/css">
   
    
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">CHAOUI OUMAIMA</a> 
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#ACCUEIL"><?php echo $lang["ACCUEIL"] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#APROPOS"><?php echo $lang["A-PROPOS"] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#formation"><?php echo $lang["Mes formations"] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projets"><?php echo $lang["MES PROJETS"] ?></a>
          </li> 
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header id="ACCUEIL" class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $lang["Bienvenue dans mon site"] ?></div>
        <div class="intro-heading text-uppercase"><?php echo $lang["Ravi de vous rencontrer"] ?></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#APROPOS"><?php echo $lang["Savoir plus sur moi"] ?></a>
      </div>
    </div>
  </header>
  <!-- _____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->
   <!-- apropos -->
  <section id="APROPOS">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang["A-propos de moi"] ?></h2>
        </div>
       </div>
      </div>
    <div class="ff">
      <img class="photo" src="1.jpg" width="310" height="440" >

      <div> <p class="text-muted"><?php echo $lang["description"]?> </p> 

        <h3> <?php echo $lang["Competences"] ?> </h3>

          <label>HTML : </label> <div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
</div>

       <label>CSS : </label> <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>

          <label>Javascript : </label> <div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>

          <label>php : </label> <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
</div>

          <label>Bootstrap : </label> <div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
</div>
   </div>
    


    </div>

  </section>
<!-- _______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->
  <!-- mes formations -->
  <section id="formation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          
          <h2 class="section-heading text-uppercase"><?php echo $lang["mes formations"] ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
              <a href="https://www.facebook.com/imam.boukhari.712" target="_blank"> 
                <img class="rounded-circle img-fluid" src="imam boukhari.jpg" alt=""></a>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">

                  <h4>2012-2013</h4>
                  <h4 class="subheading"><?php echo $lang["SVT"] ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $lang["svtt"] ?></p>
                </div>
              </div>
            </li>

            <li class="timeline-inverted">
              
              <div class="timeline-image">
                <a href="http://www.ofppt.ma/" target="_blank"><img class="rounded-circle img-fluid" src="images.jpg" alt=""></a>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2014-2016</h4>
                  <h4 class="subheading"><?php echo $lang["Diplome en commerce"] ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $lang["commerce"]?></p>
                </div>
              </div>
            </li>

            <li>
              <div class="timeline-image">
                <a href="https://www.sahamassurance.com/corpo/fr" target="_blank"><img class="rounded-circle img-fluid" src="ma.tnc.sahamassurance.png" alt=""></a>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2016-2017</h4>
                  <h4 class="subheading"><?php echo $lang["Stage chez SAHAM ASSURENCE"] ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $lang["saham"]?>
                </div>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-image">
               <a href="https://youcode.ma/" target="_blank"> <img class="rounded-circle img-fluid" src="images (1).jpg" alt="" ></a>

              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4> <?php echo $lang["Octobre"] ?> </h4>
                  <h4 class="subheading"><?php echo $lang["Formation YouCode"] ?> </h4>
                </div>
                <div class="timeline-body"> 
                  <p class="text-muted"><?php echo $lang["youcode"]?></p>
                </div>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-image">
                        <a href="CV-oumchaa.pdf" target="_blank"><img class="rounded-circle img-fluid" src="cv.jpg" alt=""></a>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- _____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->
  <!-- PROJETS -->
  <section class="bg-light" id="projets">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang["MES PROJETS"] ?></h2>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="animation.PNG" alt="">
            <h4>RANDONNEE</h4>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://gitlab.com/dashboard/projects?nav_source=navbar" target="_blank">
                  <i class="fab fa-gitlab" ></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="file:///C:/Users/Youcode/Desktop/challenge/index.html" target="_blank">
                  <i class="fab fa fa-eye"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/OumaimaChaoui1?tab=projects" target="_blank">
                  <i class="fab fa-github-alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="Sanstitre.png" alt="">
            <h4>COUNTER</h4>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://gitlab.com/dashboard/projects?nav_source=navbar" target="_blank">
                  <i class="fab fa-gitlab"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="file:///C:/wamp64/www/portfoliooma/count/index.html" target="_blank">
                  <i class="fab fa fa-eye"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/OumaimaChaoui1?tab=projects" target="_blank">
                  <i class="fab fa-github-alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="css3.PNG" alt="">
            <h4>VEGAN DONUT</h4>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://gitlab.com/dashboard/projects?nav_source=navbar" target="_blank">
                  <i class="fab fa-gitlab"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="file:///C:/Users/Youcode/Desktop/portfolio/startbootstrap-agency-gh-pages/css/index.html" target="_blank">
                  <i class="fab fa fa-eye"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/OumaimaChaoui1?tab=projects" target="_blank">
                  <i class="fab fa-github-alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
       </div>
    </div>
  </section>

  <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="piano.jpg" alt="">
            <h4>PIANO</h4>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://gitlab.com/dashboard/projects?nav_source=navbar" target="_blank">
                  <i class="fab fa-gitlab" ></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="file:///C:/wamp64/www/portfoliooma/drum/index-FINISHED.html" target="_blank">
                  <i class="fab fa fa-eye"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/OumaimaChaoui1?tab=projects" target="_blank">
                  <i class="fab fa-github-alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="unnamed.png" alt="">
            <h4>CLOCK</h4>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://gitlab.com/dashboard/projects?nav_source=navbar" target="_blank">
                  <i class="fab fa-gitlab"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="file:///C:/wamp64/www/portfoliooma/clock/index-FINISHED.html" target="_blank">
                  <i class="fab fa fa-eye"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/OumaimaChaoui1?tab=projects" target="_blank">
                  <i class="fab fa-github-alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="BLUR.png" alt="">
            <h4>Blur</h4>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://gitlab.com/dashboard/projects?nav_source=navbar" target="_blank">
                  <i class="fab fa-gitlab"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="file:///C:/Users/Youcode/Desktop/portfolio/startbootstrap-agency-gh-pages/var/index-FINISHED.html" target="_blank">
                  <i class="fab fa fa-eye"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/OumaimaChaoui1?tab=projects" target="_blank">
                  <i class="fab fa-github-alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
       </div>
    </div>
  </section>

  
<!-- ______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->
  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang["Contact moi"] ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form  action="" method="post" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input name="name" class="form-control" id="name" type="text" placeholder="<?php echo $lang["votre nom"]?>" required="required" data-validation-required-message="<?php echo $lang["NOM"]?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input name="email" class="form-control" id="email" type="email" placeholder="<?php echo $lang["votre Email"]?>" required="required" data-validation-required-message="<?php echo $lang["EMAIL"]?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input name="Subject" class="form-control" id="Subject" type="tel" placeholder="<?php echo $lang["votre sujet"]?>" required="required" data-validation-required-message= "<?php echo $lang["sujet"] ?>" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <textarea name="message" class="form-control" id="message" placeholder="<?php echo $lang["Votre message"]?>" required="required" data-validation-required-message="<?php echo $lang["message"]?>"></textarea>
                  <p class="help-block text-danger"></p>
                </div>


              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" name ="submit"class="btn btn-primary btn-xl text-uppercase" type="submit"> <?php echo $lang["envoyer le message"]; ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- ______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row flexbox">
       
        <div class="col-md-4 ">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/omaima.chaoui.9" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/chaoui-oumaima-342893173/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
       
      </div>
    </div>
  </footer>

<?php
if (isset($_POST['submit']))
{
        if(mail("chaouioumaima91@gmail.com",$_POST['name'],$_POST['Subject'],$_POST['email']." , ".$_POST['message']))
        {
             $cc=<<<prod
                    <div id="alert" class="alert alert-primary" role="alert">
                      message envoyé!
                    </div>
prod;
               echo $cc; 
        }
        
}
?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

<script >
  $( document ).ready(function(){
        $('#alert').fadeIn('slow', function(){
            $('#alert').delay(5000).fadeOut(); 
        });
    });
</script>
</body>

</html>
 