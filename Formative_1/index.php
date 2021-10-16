<?php
    $name = "Ella Fritz Sarmiento";
    $aboutMe = "an Aspiring 3rd Year BS Software Engineer College Student from the Far Eastern University - Institute of Technology in the Philippines who is knowledgable with a variety of Programming Languages such as C++, Java and Python.";
    $bachDegSchool = "Far Easter University - Institute of Technology";
    $bachDegCourse = "Bachelor of Science in Computer Science with Specialization in Software Engineer";
    $shsSchool = "Far Eastern University - High School";
    $shsStrand = "Humanities and Social Sciences (HUMSS) Strand";
    $shsHonors = "With Honors";
    $jhsSchool = "San Sebastian College Recoletos - Manila";
    $address = "2149 C.M. Recto Ave. Sampaloc Manila";
    $contNum = "+(63) 977 234 0743";
    $email = "sellafritz@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Simple CV / Resume &amp; vCard</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- ##### STYLESHEETS ##### -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.default.css" rel="stylesheet">
        <!-- Magnific popup -->
        <link href="css/magnific-popup.min.css" rel="stylesheet">
        <!-- Icons Fonts -->
        <link href="icons-fonts/style.css" rel="stylesheet">
        <!-- Preloader -->
        <link href="css/preloader.min.css" rel="stylesheet">
        <!-- Main styles -->
        <link href="css/styles.min.css" rel="stylesheet">
        <!-- Responsive styles -->
        <link href="css/responsive.min.css" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Google Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,700italic' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- end Preloader -->
		
		<div class="right-br"></div>

		<div class="left-br"></div>
		<div class="fixed-left-contact">
			<p>(+63)977&nbsp;234&nbsp;0743</p>
		</div>
		<div class="fixed-right-socials">
      <ul class="list-unstiled">
        <li><a href="https://www.facebook.com/Fruitz.prutas"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.linkedin.com/in/ellafritz/"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="https://www.instagram.com/prutas_00/"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
        <!-- Sidebar -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-2 sidebar">
                    <div class="col-sm-2 sidebarWrapper">
                        <!-- Avatar -->
						<img class="user-pic" src="images/avatar.jpg" alt="">
						<div class="signature">
							<img class="img-responsive" alt="signature" src="images/signature.png">
						</div>
                        <!-- Menu -->
                        <div class="menu">
                            <div class="toggle-btn">
                                <span class="lines"></span>
                            </div>
                            <ul class="nav">
                                <li class="active">
                                    <a href="#about">About me</a>
                                </li>
                                
                                <li>
                                    <a href="#resume">Resume</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div><!-- end Menu -->
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
        <!-- end Sidebar -->

        <!-- About section -->
        <section id="about">
            <div class="about-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 aboutWrapper">
                            <!-- Section Title -->
							<div class="nav-extra hidden-xs">
								<!-- Button Contact Modal -->
								<a data-target="#callmeModal" data-toggle="modal" href="#" class="btn btn-default">
									<span aria-hidden="true" class="icon_phone"></span>
								</a>
								<!-- Button 'Hire me' -->
								<a href="#contact" class="btn btn-info">Hire me now</a>
							</div>
                            <div class="section-title">
                                <h2><span>01</span>About me</h2>
							</div><!-- end Section Title -->
							<h1>Hello, I am <strong><?php echo $name?></strong> <br>A Student taking <span class="bg-color">Computer Science</span></h1>
							<p><?php echo $aboutMe?></p>
							
                            <div class="skills">
                                <!-- Skill 1 -->
                                <div class="skill-outer">
                                    <h4>C++<span>60%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill 2 -->
                                <div class="skill-outer">
                                    <h4>Java<span>70%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill 3 -->
                                <div class="skill-outer">
                                    <h4>Python<span>10%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill 4 -->
                                <div class="skill-outer">
                                    <h4>HTML &amp; CSS &amp; PHP<span>5%</span></h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Skill 4 -->
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end About section -->
        <!-- Services section -->
        
        <!-- Resume section -->
        <section id="resume">
            <div class="resume-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 resumeWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2><span>02</span>Resume</h2>
                            </div><!-- end Section Title -->
                            <!-- Resume box 1 -->
                            <div class="resume-box">
                                <div>
                                    <i class="icon_pencil"></i>
                                </div>
                                <div>
                                    <h3>Bachelor's Degrees</h3>
                                    <span>2019 - Present</span>
                                    <p><?php echo $bachDegSchool?></p>
                                    <p><?php echo $bachDegCourse?></p>
                                </div>
                            </div>
                            <!-- Resume box 2 -->
                            <div class="resume-box">
                                <div>
                                    <i class="icon_toolbox_alt"></i>
                                </div>
                                <div>
                                    <h3>Senior High School</h3>
                                    <span>2017 - 2019</span>
                                    <p><?php echo $shsSchool?></p>
                                    <p><?php echo $shsStrand?></p>
                                    <p><?php echo $shsHonors?></p>
                                </div>
                            </div>
                            <!-- Resume box 3 -->
                            <div class="resume-box">
                                <div>
                                    <i class="icon_genius"></i>
                                </div>
                                <div>
                                    <h3>Junior High School</h3>
                                    <span>2013 - 2017</span>
                                    <p><?php echo $jhsSchool?><br> </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Resume section -->

        <!-- Contact section -->
        <section id="contact">
            <div class="contact-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 contactWrapper">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2><span>03</span>Get In Touch</h2>
                            </div><!-- end Section Title -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 contact-form">
									<div class="widget">
                                    <form method="post" id="contactform">
                                        <div class="input-style">
                                            <div>
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Name">
                                            </div>
                                            <div>
                                              <input class="form-control" type="email" id="email" name="email" placeholder="E-Mail">
                                            </div>
                                        </div>
                                        <div class="text-style">
                                            <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                        <input type="submit" id="submit" class="btn btn-info" name="submit" value="Send Message">
                                        <div class="submit-result">
                                            <p id="success">Your Message has been sent!</p>
                                            <p id="error">Something went wrong, go back and try again!</p>
                                        </div>
                                    </form>
									</div>
                                </div>
                                <div class="col-xs-12 col-sm-6 contact-info">
									<div class="widget">
                                    <ul>
                                        <li>
                                            <h3><span class="icon_pin" aria-hidden="true"></span> Address</h3>
                                            <p><?php echo $address?></p>
                                        </li>
                                        <li>
                                            <h3><span class="icon_phone" aria-hidden="true"></span> Phone</h3>
                                            <p><?php echo $contNum?></p>
                                        </li>
                                        <li>
                                            <h3><span class="icon_mail" aria-hidden="true"></span> Email</h3>
                                            <p><?php echo $email?></p>
                                        </li>
                                    </ul>
									</div>
                                </div>
                            </div><!-- end Inner row -->
                            <!-- Google Maps -->
                            <div class="google-maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241.3106253770119!2d120.99070542700585!3d14.600784525982682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f9b328f707%3A0x49aea1c8bb573ddc!2sSSL%20Ladies%20Dormitory!5e0!3m2!1sen!2sph!4v1631639456335!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <!-- end Google Maps -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
        <!-- end Contact section -->

        <!-- Footer -->
        <footer class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-3 footer-background">
                        <div class="row">
                        <div class="col-sm-6 text-left">
                            Copyright &copy; 2016 Osahan. All Right Reserved 
                        </div>
                        <div class="col-sm-6 text-right">
                            Designed With <i class="fa fa-heart-o red"></i> By <a target="_blank" href="https://www.facebook.com/iamgurdeeposahan">Osahan Studio</a>
                        </div>
                    </div>
                      
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>
        <!-- end Footer -->
		
	

        <!-- ##### JAVASCRIPTS ##### -->
        <!-- jQuery Library -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Retina Graphics -->
        <script src="js/retina.min.js"></script>
        <!-- Magnific popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Theme Plugins -->
        <script src="js/theme-plugins.min.js"></script>
        <!-- Custom Scripts -->
        <script src="js/scripts.min.js"></script>
    </body>
</html>