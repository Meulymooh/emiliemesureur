<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--My CSS--> 	
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!--Fonts-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Fontawesome -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Skillbar animation -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" rel="stylesheet">
	<!--Other-->
	<title>Emilie Mesureur</title>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-fixed-top" id="nav">
    <div class="container">
        <div class="navbar-header">
            <!-- Mobile Hamburger -->
            <button type="button" class="navbar-toggle navbar-light" id="nav-icon" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><b>EM</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <!-- Navigation Links -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home">
 
   <!-- Introduction -->

      <h1>Emilie Mesureur</h1><br/>
      <h2>FRONT-END DEVELOPER | CONTENT WRITER</h2>
      <br/>
      <hr> 
      <br/>
      <ul class="social-1">
          <li><a target="_blank" href="https://www.linkedin.com/in/emilie-mesureur-b0a91523/"><i class="fab fa-linkedin-in fa-2x" style="color:white"></i></a></li>
          <li><a target="_blank" href="https://github.com/Meulymooh"><i class="fab fa-github fa-2x" style="color:white"></i></a></li>
          <li><a target="_blank" href="https://www.instagram.com/belgianemilie/"><i class="fab fa-instagram fa-2x" style="color:white"></i></a></li>
          <li><a target="_blank" href="mesureur.e@gmail.com"><i class="far fa-envelope fa-2x" style="color:white"></i></a></li>
      </ul>
      <p class="scrolldown">
         <a class="arrowDown" href="#about"><i class="fas fa-chevron-circle-down"></i></a>
      </p>

  </section>

  <!-- End of introduction -->

  <!-- About -->

  <section class="wrapper navy" id="about">

    <div class="row">
      <div id="picture">
        <img src="img/emilie.png" id="profile" alt="Emilie Mesureur">
      </div>
    </div>

    <div class="row">
      <div class="title">
        <h3>ABOUT ME</h3>
      </div>
    </div>

    <div class="row">
      <div class="text subtext">
        <p><i>"Simplicity is the outcome of technical subtlety. It is the goal, not the starting point."</i><br/><br/> - Maurice Saatchi -</p><br/>
      </div>
    </div>

    <div class="row">
      <div class="text subtext">
        <p>As an experienced content writer and translator who mostly worked in the technical field, simplicity has always been my motto for making the clients understand sometimes tricky manipulations or concepts. As I'm now back to school at 39 to learn web development with BeCode Ghent, I'll keep that quote in mind as I'm specializing in front-end. I will be available for an internship from September 2019.</p>
      </div>
    </div>

    <div class="row" id="downloadCV">
       <a target="_blank" href="http://emilie.watlock.be/CV_Emilie.pdf" class="btn"><i class="fa fa-download"></i>  Download CV</a>
    </div>

  </section>

  <!-- End of About -->

  <!-- Resume -->

  <section class="wrapper" id="resume">
    <!-- Resume -->
    <div class="row">

      <!-- Education -->
      <div id="education">

        <div class="col col-sm-3 titleCV">
          <div class="inline prepend">
          	<h3><strong>//&nbsp;</strong></h3>
          </div>
          <div class="inline">
          	<h3><strong>Education</strong></h3>
          </div>
        </div>
        <div class="col col-sm-8 description">
          <div class="row title">
          	<h4>Training in Web Development (ongoing)</h4>
          </div>
          <div class="row text">
          	<p><i>BeCode, Ghent (Belgium)</i> - 2019</p>
          	<p>Intensive 7-month training based on the Simplon method. It covers front-end and back-end over 5 months, followed by 2 months of specialization.</p>
          </div>
        </div>

      <div class="col col-sm-3 titleCV">
      </div>
        <div class="col col-sm-8">
          <div class="row title">
          	<h4>Master in Translation and International Relations</h4>
          </div>
          <div class="row text">
          	<p><i>ISTI, Brussels (Belgium)</i> - 2005</p>
          	<p>Translation curriculum focusing on European and International institutions. I worked on two projects: a research and translation thesis about corruption in the US institutions, and a research work about the importance of the French language within the organization "Canadian Parents for French".</p>
          </div>
        </div>

      <div class="col col-sm-3 titleCV">
      </div>
        <div class="col col-sm-8">
          <div class="row title">
          	<h4>Bachelor in English and American Studies</h4>
          </div>
          <div class="row text">
          	<p><i>Paris X University, Nanterre (France)</i> - 2002</p>
          	<p>I majored in American literature and history.</p>
          </div>
        </div>

      </div><!-- End of education -->
    </div><!-- End of row -->

    <!-- Experience -->
    <div class="row" id="experience">

        <!-- End of experience-->
        <div class="col col-sm-3 titleCV">
          <div class="inline prepend">
          	<h3><strong>//&nbsp;</strong></h3>
          </div>
          <div class="inline">
          	<h3><strong>Experience</strong></h3>
          </div>
        </div>
        <div class="col col-sm-7">
          <div class="row title">
          	<h4>Content Writer</h4>
          </div>
          <div class="row text"><p><i>6 years of experience</i></p>
          	<p>In French: technical documentation (user manuals, quick guides, safety instructions), user-oriented materials (recipe books, educational leaflets for at-home training). In French and English: communication correspondence, website, newsletter, proofreading.
          </div>
        </div>

      <div class="col col-sm-3">
      </div>
        <div class="col col-sm-7">
          <div class="row title">
          	<h4> Translator</h4>
          </div>
          <div class="row text">
          	<p><i>13 year of experience</i></p>
          	<p>Translation and proofreading of technical documentation specialized in airport and civil engineering, and in computer science. Legal translation (contrats and HR documents). General translation (communication, website, brochures, letters...). Creation and management of a terminology database.</p>
          </div>
        </div>

      <div class="col col-sm-3">
      </div>
        <div class="col col-sm-7">
          <div class="row title">
          	<h4>French Teacher</h4>
          </div>
          <div class="row text">
          	<p><i>2 years of experience</i></p>
          	<p>(In the UK) Teaching French to high school students and preparing them for the GCSE and A-Level exams. Animating the French Club and organizing language-related events (EuropeanDay of Languages, film screenings, etc.).</p>
          </div>
        </div>
    </div><!-- End of experience-->

    <!-- Skills-->
    <div class="row">
      <div id="skills">

        <div class="col col-sm-3 titleCV">
          <div class="inline prepend">
          	<h3><strong>//&nbsp;</strong></h3>
          </div>
          <div class="inline">
          	<h3><strong>Skills</strong></h3>
          </div>
        </div>

        <div class="col col-sm-7">
          <div class="row title">
          	<h4>Web Development</h4>
          </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">HTML</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped dev" role="progressbar" data-width="90">
                  <div class="skill"><p><b>90%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">CSS</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped dev" role="progressbar" data-width="70">
                  <div class="skill"><p><b>70%</b></p></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">JAVASCRIPT</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped dev" role="progressbar" data-width="50">
                  <div class="skill"><p><b>50%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">PHP</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped dev" role="progressbar" data-width="60">
                  <div class="skill"><p><b>60%</b></p></div>
                </div>
              </div>
            </div>
        </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">MySQL</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped dev" role="progressbar" data-width="60">
                  <div class="skill"><p><b>60%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">GIT</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped dev" role="progressbar" data-width="60">
                  <div class="skill"><p><b>60%</b></p></div>
                </div>
              </div>
            </div>
        </div>
      </div><!-- End of web development skills -->

       <div class="col col-sm-3 titleCV">
       </div>

       <div class="col col-sm-7">
          <div class="row title">
            <h4>Applications</h4>
          </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">MS OFFICE</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped app" role="progressbar" data-width="90">
                  <div class="skill"><p><b>90%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">GOOGLE APPS</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped app" role="progressbar" data-width="90">
                  <div class="skill"><p><b>90%</b></p></div>
                </div>
              </div>
            </div>
        </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">ADOBE INDESIGN</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped app" role="progressbar" data-width="90">
                  <div class="skill"><p><b>90%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">ADOBE ILLUSTRATOR</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped app" role="progressbar" data-width="60">
                  <div class="skill"><p><b>60%</b></p></div>
                </div>
              </div>
            </div>
        </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">SONY VEGAS STUDIO</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped app" role="progressbar" data-width="80">
                  <div class="skill"><p><b>80%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">ADOBE PREMIERE</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped app" role="progressbar" data-width="60">
                  <div class="skill"><p><b>60%</b></p></div>
                </div>
              </div>
            </div>
          </div>

      </div><!-- End of app skills -->

       <div class="col col-sm-3 titleCV">
       </div>

        <div class="col col-sm-7">
          <div class="row title">
            <h4>Languages</h4>
          </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">FRENCH</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped lang" role="progressbar" data-width="100">
                  <div class="skill"><p><b>100%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">ENGLISH</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped lang" role="progressbar" data-width="95">
                  <div class="skill"><p><b>95%</b></p></div>
                </div>
              </div>
            </div>
        </div>

          <div class="row">
            <div class="col col-sm-6">
              <div class="skill-name">SPANISH</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped lang" role="progressbar" data-width="70">
                  <div class="skill"><p><b>70%</b></p></div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="skill-name">DUTCH</div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped lang" role="progressbar" data-width="40">
                  <div class="skill"><p><b>40%</b></p></div>
                </div>
              </div>
            </div>
        	</div>
      	</div><!-- End of language skills -->

	 </div><!-- End of all skills -->
  	</div><!-- End of row -->   

  </section>

  <section class="wrapper" id="portfolio">

    <div class="row">

    	<div class="title">
			<h3 class="title">MY BECODE PORTFOLIO</h3><br/>
		</div>
		<div class="subtext-2">
        	<p>Click on the picture to open the page</p><br/><br/>
        </div>

    <!-- Carousel -->
    <div class="container--head">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          <li data-target="#carousel-example-generic" data-slide-to="6"></li>
          <li data-target="#carousel-example-generic" data-slide-to="7"></li>
          <li data-target="#carousel-example-generic" data-slide-to="8"></li>
          <li data-target="#carousel-example-generic" data-slide-to="9"></li>
          <li data-target="#carousel-example-generic" data-slide-to="10"></li>
          <li data-target="#carousel-example-generic" data-slide-to="11"></li>
          <li data-target="#carousel-example-generic" data-slide-to="12"></li>
          <li data-target="#carousel-example-generic" data-slide-to="13"></li>
            <li data-target="#carousel-example-generic" data-slide-to="14"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <a href="https://meulymooh.github.io/VCard/index.html" target="_blank" alt="vCard">
              <img src="img/vcard.jpg" alt="image0" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>My vCard</h3> HTML semantics, CSS positioning.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/404-page/index.html" target="_blank">
              <img src="img/deadend.jpg" alt="Error 404" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Error 404</h3> HTML semantics, CSS positioning.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/My-CV/index.html" target="_blank">
              <img src="img/luggage.jpg" alt="My CV" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>My CV</h3> Grids, bootstrap, layout.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/Frameworking-FTW/index.html" target="_blank">
              <img src="img/layout.jpg" alt="Layout" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Layout</h3> Frameworks.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/suzanne-collins/index.html" target="_blank">
              <img src="img/redline.jpg" alt="Suzanne Collins" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Red Line Project</h3> Redesigning a website.
            </div>
          </div>
          <div class="item">
            <a href="https://drive.google.com/file/d/1_RwQ7mwWhzxL8pP_4QeQ1mdY-5DSOcfL/view" target="_blank">
              <img src="img/start.jpg" alt="Web Developer's Starter Kit" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Starter Kit</h3> Oral presentation.
            </div>
          </div>
          <div class="item">
            <a href="https://anton90.github.io/Main-MarioLuigi/main.html" target="_blank">
              <img src="img/group.jpg" alt="Single Page Website" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>One-Page Website</h3> Group project.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/nyan/index.html" target="_blank">
              <img src="img/cat.jpg" alt="Nyan Cat" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Nyan Cat</h3> Starting with Javascript.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/serious-business/index.html" target="_blank">
              <img src="img/business.jpg" alt="Opening and Closing Hours" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Serious Business</h3> Javascript "if" statements.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/starting-javascript/index.html" target="_blank">
              <img src="img/tools.jpg" alt="DOM Manipulation" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Fix Me!</h3> DOM manipulation.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/JS-Final-Test-2/index.html" target="_blank">
              <img src="img/shopping.jpg" alt="Shopping List" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>The Shopping List</h3> Javascript level assessment.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/dynamic-loading/index.html" target="_blank">
              <img src="img/jenga.jpg" alt="Dynamic Loading - Ajax" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Dynamic Loading</h3> Learning Ajax.
            </div>
          </div>
          <div class="item">
            <a href="https://drive.google.com/file/d/15afRLm9p8eElEqmCbmPEhIxPemLb1Bm-/view" target="_blank">
              <img src="img/hacker.jpg" alt="Cross-Site Scripting (XSS)" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Cross-Site Scripting</h3> Oral presentation.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/pokedex/index.html" target="_blank">
              <img src="img/pokemon.jpg" alt="Pokedex" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Pokedex</h3> Talking to external API.
            </div>
          </div>
          <div class="item">
            <a href="https://meulymooh.github.io/api-surfing-spots/index.html" target="_blank">
              <img src="img/surf.jpg" alt="Fetch and API" style="width:100%">
            </a>
            <div class="carousel-caption">
              <h3>Surfing Spots</h3> Fetch and API.
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

    </div><!-- End of carousel -->
      
    </div><!-- End of row -->
  </div><!-- End of section -->

  </section>

  <section class="wrapper" id="contact">

	<div class="row title">
       <h3>CONTACT ME</h3><br/>
    </div>

	<div class="row ">
      <div class="col col-sm-2">
      </div>
      <div class="col col-sm-4">
      	<div id="contactDetails" class="subContact">
      		<div class="row">
      			<h4><b>Contact details</b></h4><br/>
      		</div>
      		<div class="row text">
      			<p><b>Address: </b>Maaltebruggestraat 66, 9000 Gent (Belgium)</p>
      			<p><b>Email: </b>mesureur.e@gmail.com</p>
      			<p><b>Phone: </b>+32 (0)472 74 44 62</p>
      			<p><b>Website: </b>http://emiliemesureur.html</p>
      		</div>
      	</div>
      </div>

      <div class="col col-sm-4">

      	<div class="subContact" id="contactForm">

          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Name*">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email*">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" placeholder="Subject*">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="comment" placeholder="Message*"></textarea>
          </div>
          <div class="form-group">
            <label for="spam" class="spam"><p>Spam Control 5 + 2 = ?</p></label>
            <input id="spam" class="form-control" type="tel" placeholder="Type 7 here">
          </div>
          <div>
            <button type="submit" id="submit" class="btn btn-warning">Submit</button>
          </div>
          <div id="display"></div>

        </div>

      </div><!-- End of form column -->

    <div class="col col-sm-2">
    </div>

    </div><!-- End of row -->

  </section>

  <footer class="wrapperSmaller" id="footer">
  	<div class="row">

  		<div class="col col-sm-4 my-auto text">
			<p>© 2019 Emilie Mesureur</p>
  		</div>

  		<div class="col col-sm-4 my-auto text">
  			      
  			<ul class="social-2">
          		<li><a target="_blank" href="https://www.linkedin.com/in/emilie-mesureur-b0a91523/"><i class="fab fa-linkedin-in fa-1x" style="color:#cccccc"></i></a></li>
          		<li><a target="_blank" href="https://github.com/Meulymooh"><i class="fab fa-github fa-1x" style="color:#cccccc"></i></a></li>
          		<li><a target="_blank" href="https://www.instagram.com/belgianemilie/"><i class="fab fa-instagram fa-1x" style="color:#cccccc"></i></a></li>
          		<li><a target="_blank" href="mesureur.e@gmail.com"><i class="far fa-envelope fa-1x" style="color:#cccccc"></i></a></li>
      		</ul>

  		</div>

  		<div class="col col-sm-4 my-auto col-centered text" id="scrollup">
  			<a class="arrowUp" href="#home"><i class="fas fa-chevron-circle-up"></i></a>
  		</div>

  	</div>
  </footer>

  <!--Jquery--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootsrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <!-- Navbar -->
  <script src="js/navbar.js"></script>
  <!-- Skillbars -->
  <script src="js/progressbar.js"></script>
  <!-- Carousel -->
  <script src="js/carousel.js"></script>
  <!-- Contact -->
  <script src="js/contact.js"></script>

</body>
</html>