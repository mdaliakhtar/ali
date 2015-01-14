<?php
if(isset($_GET['success'])){
	$success = $_GET['success'];
}else{
	$success = "NotYesOrNo";	
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ali is a Software Engineer and Public Speaker, studied Computer Science and Engineering at the Dr. M. G. R. Educational & Research Institute. He is young Computer Programmer and Software Engineer.">
	<meta name="keywords" content="Ali, Md Ali Akhtar, Md Ali, Ali Akhtar, Akhtar, Mohammed, Mohammed Ali Akhtar, mdaliakhtar, Software Engineer, Software, Engineer, Computer Programmer, Computer, Programmer, Public Speaker, Public, Speaker, MSP, Microsoft Student Partner, Microsoft, Student, Partner, Gopalganj Bihar India, Gopalganj, Bihar, India, Chennai, Tamil Nadu, Tamilnadu, Java, ASP.NET, C#, PHP, MySQL, JavaScript, HTML5, AJAX, jQuery, C/C++, CSS, VB, XAML, technology, handsome, young, intelligent, perfectionist, helper, achiever, thinker, dreamer, romantic, questioner, self-motivated, adaptable, creative, diplomatic, enthusiastic, rational, sincere, patient, optimistic, inventive, humorous friendly">
    <title>Ali, MD ALI AKHTAR - Software Engineer and Public Speaker</title>
    <link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <!--Styles-->
    <link href="css/royal_preloader.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="css/owl.theme.css" type="text/css" rel="stylesheet">
    <link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" type="text/css" rel="stylesheet">
    <link href="css/slicknav.css" type="text/css" rel="stylesheet">
    <link href="css/animate.css" type="text/css" rel="stylesheet">
    <link href="css/venobox.css" type="text/css" rel="stylesheet">

    <!--for hover effect-->
    <link href="css/normalize.css" type="text/css" rel="stylesheet">
    <link href="css/component.css" type="text/css" rel="stylesheet">

    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <link href="css/style-responsive.css" type="text/css" rel="stylesheet">
    <link href="css/theme-color.css" type="text/css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
function ValidContactForm(){
	if(document.ContactForm.Name.value == ""){
			alert("Please enter your Name");
			document.ContactForm.Name.focus();
			return false;
	}
	if(document.ContactForm.Email.value == ""){
			alert("Please enter your Email");
			document.ContactForm.Email.focus();
			return false;
	}
	if(document.ContactForm.Subject.value == ""){
			alert("Please enter your Subject");
			document.ContactForm.Subject.focus();
			return false;
	}
	if(document.ContactForm.Comments.value == ""){
			alert("Please enter your Comments");
			document.ContactForm.Comments.focus();
			return false;
	}		
}
</script>
</head>
<body class="royal_preloader">
<div id="royal_preloader"></div>
<!--header start-->
<header>
    <div class="mobile-menu">
    </div>
    <nav class="navigation">
        <div class="container fixed-banner">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu page-nav">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#objective">about</a>
                        </li>
                        <li>
                            <a href="#skill">Skill</a>
                        </li>
                        <li>
                            <a href="#experience">experience</a>
                        </li>
                        <li>
                            <a href="#education">education</a>
                        </li>
                        <li>
                            <a href="#portfolio">Photos</a>
                        </li>
                        <li>
                            <a href="#favourites">favourites</a>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--header end-->
<!--banner start-->
<div class="full-banner" data-src="img/banner-bg.jpg" id="home">
    <div class="nav-toggle-icon">
        <a href="#" class="nav-toggle"><i class="fa fa-bars"></i></a>
    </div>
    <div class="info">
        <div class="title">
            <span> Ali</span>
		    <span class="designation">
		        Software Engineer and Public Speaker
            </span>
            <span>Akhtar Mohammed</span>
        </div>
    </div>
    <div class="scroll-down-icon">
        <a href="#objective" class="panel-down">
            <i class="fa fa-angle-down"></i>
            scroll down </a>
    </div>
</div>
<!--banner end-->
<!--container start-->
<!--objective section start-->
<div class="section section-objective" id="objective">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="tittle">
                    <h1>
                        <span>01</span>
                        about </h1>
                    <h2>
                        <span> I'm a Software Engineer. I use the best language for the job. I develop and try to share what I learn. I talk about software, programming and psychology.</span>
                    </h2>
                </div>
                <!--tittle end-->
                <div class="objective-info">
                    <div class="avatar wow zoomIn" data-wow-duration=".5s">
                        <img src="img/author.jpg" alt=""/>
                    </div>
                    <p>
                        I've been programming from an early age. Mostly, it was just something I did for fun but I started putting that skill to use when I joined Dr. M. G. R. Educational & Research Institute for Engineer's Degree - B. Tech in Computer Science and Engineering.
My day job is with Qmax Systems India Pvt. Ltd., where I am a Software Engineer. I am responsible for the complete life cycle of a new or modified software product from research and design to implementation. Collaborate and add value through participation in peer code reviews.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--objective section end-->
<!--skill section start-->
<div class="section section-skill gray-bg" id="skill">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="tittle">
                    <h1>
                        <span>02</span>
                        skill set </h1>
                    <h2>
                        <span>I really believe that everyone has a talent, ability, or skill that he can mine to support himself and to succeed in life. Excellence is not a skill, it's an attitude.</span>
                    </h2>
                </div>
                <!--tittle end-->
                <div class="row skill-info appear">
                    <div class="col-md-4">
                        <div class="skill-box wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".5s">
                            <div class="circle-progress" data-percent="98" data-color="#ff6059">
                                <span class="percent"></span>
                            </div>
                            <h3>Engineering</h3>
                            <p>
                                I am an engineer by training with a B.Tech in Computer Science and Engineering
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box wow zoomIn" data-wow-duration=".5s" data-wow-delay=".8s">
                            <div class="circle-progress" data-percent="93" data-color="#ff6059">
                                <span class="percent"></span>
                            </div>
                            <h3>Software Development</h3>
                            <p>
                                Results-driven software professional, cannot hold back from taking up new challenges
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".5s">
                            <div class="circle-progress" data-percent="87" data-color="#ff6059">
                                <span class="percent"></span>
                            </div>
                            <h3>Entrepreneurship</h3>
                            <p>
                                In entrepreneurship class, I learned to pitch an idea that captures imaginations
                            </p>
                        </div>
                    </div>
                </div>
                <div class="interest">
                    <div class="different-tittle">
                        <h4>interest</h4>
                        <h5>Even wisdom has to yield to self-interest.</h5>
                    </div>
                    <ul class="interest-list">
                        <li>
                            <a href="http://en.wikipedia.org/wiki/Computer_programming" target="_blank" class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">
                                <div class="bg">
                                </div>
                                <span>Coding</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://en.wikipedia.org/wiki/Gardening" target="_blank" class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".8s">
                                <div class="bg">
                                </div>
                                <span>Gardening</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://en.wikipedia.org/wiki/Painting" target="_blank" class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">
                                <div class="bg">
                                </div>
                                <span>Painting</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--skill section end-->
<!--experience section start-->
<div class="section section-experience" id="experience">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="tittle">
                    <h1>
                        <span>03</span>
                        experience </h1>
                    <h2>
                        <span>By three methods we may learn wisdom: First, by reflection, which is noblest; Second, by imitation, which is easiest; and third by experience, which is the bitterest.</span>
                    </h2>
                </div>
                <!--tittle end-->
                <div class="row">
                    <div class="experience-info">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="company-name wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".5s">
                                <a href="http://qmaxtechnologies.com" target="_blank">
                                    <h2>Qmax Systems</h2>
                                </a>
                                <div class="company-logo">
                                    <a href="http://qmaxtechnologies.com" target="_blank"><img src="img/company/qmax.jpg" alt="Qmax Systems"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                           <div class="wow fadeInRight " data-wow-duration=".5s"  data-wow-delay=".5s">
                               <h3>
                                   MAY 2013 <i class="fa fa-long-arrow-right"></i>
                                   PRESENT </h3>
                               <div class="designation">
                                   Software Engineer
                               </div>
                               <p>
                                   I am responsible for the complete life cycle of a new or modified software product, from research and design to implementation. Create software by converting project requirements into code. Collaborate and add value through participation in peer code reviews, providing comments and suggestions. Perform technical root cause analysis and outlines corrective action for given problems.
                               </p>
                           </div>
                        </div>
                    </div>
                    <div class="experience-info">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="company-name wow fadeInLeft" data-wow-duration=".5s"  data-wow-delay=".7s">
                                <a href="http://www.microsoft.com" target="_blank">
                                    <h2>Microsoft</h2>
                                </a>
                                <div class="company-logo">
                                    <a href="http://www.microsoft.com" target="_blank"><img src="img/company/microsoft.jpg" alt="Microsoft"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="wow fadeInRight " data-wow-duration=".5s"  data-wow-delay=".7s">
                                <h3>
                                    AUG 2012 <i class="fa fa-long-arrow-right"></i>
                                    NOV 2013 </h3>
                                <div class="designation">
                                    MSP
                                </div>
                                <p>
                                    Build apps, demonstrate the newest technologies and host tech events. seek out new technologies, explore them, and share that experience and knowledge gained with fellow students and faculty.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="experience-info">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="company-name wow fadeInLeft" data-wow-duration=".5s"  data-wow-delay=".9s">
                                <a href="http://www.emc.com" target="_blank">
                                    <h2>EMC Corporation</h2>
                                </a>
                                <div class="company-logo">
                                    <a href="http://www.emc.com" target="_blank"><img src="img/company/emc.jpg" alt="EMC Corporation"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="wow fadeInRight" data-wow-duration=".5s"  data-wow-delay=".9s">
                                <h3>
                                    NOV 2013 <i class="fa fa-long-arrow-right"></i>
                                    OCT 2014 </h3>
                                <div class="designation">
                                    Student Ambassador
                                </div>
                                <p>
                                    Serve as a bridge between EMC Corporation and Universities. Conduct seminars and organize events to create awareness about EMC and EMC Academic Alliance Program. Participate in the events on behalf of EMC Corporation.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--experience section end-->
<!--fun factor section start-->
<div class="fun-factor">
    <div class="one-third">
        <!--<i class="fa fa-smile-o"></i>-->
        <img src="img/smile-icon.png" alt=""/>
        <h2 class="numeric-count number-animate" data-value="56" data-animation-duration="1500">0</h2>
        <p>
            CLIENTS WORKED WITH
        </p>
    </div>
    <div class="one-third">
        <!--<i class="fa fa-suitcase"></i>-->
        <img src="img/bag-icon.png" alt=""/>
        <h2 class="numeric-count number-animate" data-value="27" data-animation-duration="1500">0</h2>
        <p>
            PROJECT COMPLETED
        </p>
    </div>
    <div class="one-third">
        <img src="img/books.png" alt=""/>
        <!--<i class="fa fa-graduation-cap"></i>-->
        <h2 class="numeric-count number-animate" data-value="865" data-animation-duration="1500">0</h2>
        <p>
            Books in my library
        </p>
    </div>
    <div class="one-third">
        <img src="img/software.png" alt=""/>
        <!--<i class="fa fa-graduation-cap"></i>-->
        <h2 class="numeric-count number-animate" data-value="964" data-animation-duration="1500">0</h2>
        <p>
            Software in my hard disk
        </p>
    </div>
    <div class="one-third">
        <img src="img/photos.png" alt=""/>
        <!--<i class="fa fa-graduation-cap"></i>-->
        <!--
        1TB = 488000 Photos
        --->
        <h2 class="numeric-count number-animate" data-value="16104" data-animation-duration="1500">0</h2>
        <p>
            My photos
        </p>
    </div>
</div>
<!--fun factor section end-->
<!--education section start-->
<div class="section section-education" id="education">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="tittle">
                    <h1>
                        <span>04</span>
                        education </h1>
                    <h2>
                        <span> An education isn't how much you have committed to memory, or even how much you know. It's being able to differentiate between what you know and what you don't.</span>
                    </h2>
                </div>
                <!--tittle end-->
                <div class="education-info">
                    <div class="year wow fadeInLeft" data-wow-duration=".5s"  data-wow-delay=".5s">
                        <div>
                            May 2013
                        </div>
                    </div>
                    <div class="degree wow zoomIn" data-wow-duration=".5s"  data-wow-delay=".5s">
                        <div>
                            <h3>Dr. MGR University</h3>
                            <p>
                                Engineer's Degree
                            </p>
                        </div>
                    </div>
                    <div class="details wow fadeInRight" data-wow-duration=".5s"  data-wow-delay=".5s">
                        <div>
                            <h5>Computer Science and Engineering</h5>
                            <p>
                                I got training in electronic engineering, software design, hardware-software integration, and many hardware and software aspects of computing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="education-info">
                    <div class="year wow fadeInLeft" data-wow-duration=".5s"  data-wow-delay=".7s">
                        <div>
                            May 2009
                        </div>
                    </div>
                    <div class="degree wow zoomIn" data-wow-duration=".5s"  data-wow-delay=".7s">
                        <div>
                            <h3>GC Gopalganj</h3>
                            <p>
                                Senior Secondary
                            </p>
                        </div>
                    </div>
                    <div class="details wow fadeInRight" data-wow-duration=".5s"  data-wow-delay=".7s">
                        <div>
                            <h5>Intermediate of Science</h5>
                            <p>
                                I developed the basic scientific skills of Physic, Chemistry and Mathematics through detailed classes and practicals in well equipped labs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="education-info">
                    <div class="year wow fadeInLeft" data-wow-duration=".5s"  data-wow-delay=".9s">
                        <div>
                            May 2007
                        </div>
                    </div>
                    <div class="degree wow zoomIn" data-wow-duration=".5s"  data-wow-delay=".9s">
                        <div>
                            <h3>BFHS</h3>
                            <p>
                                High School
                            </p>
                        </div>
                    </div>
                    <div class="details wow fadeInRight" data-wow-duration=".5s"  data-wow-delay=".9s">
                        <div>
                            <h5>Matriculation</h5>
                            <p>
                                I completed Matriculation from BFHS. I use to score very high marks in mathematics and science subjects.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--education section end-->
<!--portfolio section start-->
<div class="section section-portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="tittle">
                    <h1>
                        <span>05</span>
                        Photos </h1>
                    <h2>
                        <span>You know, photo conversations are replacing verbal conversations. I don't know if that's a bad thing. A picture tells a story just as well as a large amount of descriptive text.</span>
                    </h2>
                </div>
                <!--tittle end-->
                <div class="portfolio-container">
                    <div id="main" role="main">
                        <ul id="tiles">
                            <!-- These are our grid blocks -->
                            <li data-filter-class='["all", "acc", "des"]'>
                                <a class="venobox grid-wrap" data-gall="myGallery" href="img/portfolio/Microsoft-boot-camp.jpg">
                                    <img src="img/portfolio/Microsoft-boot-camp-thum.jpg" alt="Md Ali Akhtar at Microsoft boot camp"/>
                                    <span class="grid-hover">
                                    </span>
                                </a>
                            </li>
                            <li data-filter-class='["all", "art", "fashion"]'>
                                <a class="venobox grid-wrap" data-gall="myGallery" href="img/portfolio/SSAA.jpg">
                                    <img src="img/portfolio/SSAA-thum.jpg" alt="SSAA Seminar">
                                    <span class="grid-hover">
                                    </span>
                                </a>
                            </li>
                            <li data-filter-class='["all", "art", "acc"]'>
                                <a class="venobox grid-wrap" data-gall="myGallery" href="img/portfolio/Qmax-MaxMyTV.jpg">
                                    <img src="img/portfolio/Qmax-MaxMyTV-thum.jpg" alt="Qmax MaxMyTV">
                                    <span class="grid-hover">
                                    </span>
                                </a>
                            </li>
                            <li data-filter-class='["all", "ph", "des", "acc"]'>
                                <a class="venobox grid-wrap" data-gall="myGallery" href="img/portfolio/10th-class.jpg">
                                    <img src="img/portfolio/10th-class-thum.jpg" alt="10th Class">
                                    <span class="grid-hover">
                                    </span>
                                </a>
                            </li>
                            <li data-filter-class='["all", "wd", "des" "fashion"]'>
                                <a class="venobox grid-wrap" data-gall="myGallery" href="img/portfolio/Dr-MGR.jpg">
                                    <img src="img/portfolio/Dr-MGR-thum.jpg" alt="Dr. MGR University">
                                    <span class="grid-hover">
                                    </span>
                                </a>
                            </li>
                            <li data-filter-class='["all", "art", "fashion"]'>
                                <a class="venobox grid-wrap" data-gall="myGallery" href="img/portfolio/B-Tech.jpg">
                                    <img src="img/portfolio/B-Tech-thum.jpg" alt="B. Tech">
                                    <span class="grid-hover">
                                    </span>
                                </a>
                            </li>
                            <!-- End of grid blocks -->
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="https://plus.google.com/photos/+MdAliAkhtarMD/albums/posts" class="view-btn">view all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--portfolio section end-->
<!--parallax section start-->
<div class=" parallax-bg">
    <div class="video-bg">
    </div>
</div>
<!--parallax section end-->
<!--testimonial section start-->
<div class="section section-testimonial gray-bg" id="favourites">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="tittle">
                    <h1>
                        <span>06</span>
                        favourites </h1>
                    <h2>
                        <span>My favourite words are possibilities, opportunities and curiosity. I think if you are curious, you create opportunities, and then if you open the doors, you create possibilities.</span>
                    </h2>
                </div>
                <!--tittle end-->
            </div>
        </div>
    </div>
    <div class="testimonial-parallax">
        <div class="container">
            <div class="testimonial-carousel">
                <div class="test-info">
                    <div class="thumb">
                        <img src="img/favourites/fav/pi.jpg" alt="raspberry pi"/>
                    </div>
                    <div class="quote">
                        Well, Raspberry Pi is my favourite Single-board Computer. I used Pi for a digital signage project. It’s great success and my company made good revenue.
                    </div>
                </div>
                <div class="test-info">
                    <div class="thumb">
                        <img src="img/favourites/fav/ubuntu.jpg" alt="ubuntu"/>
                    </div>
                    <div class="quote">
                        I was educated on Windows but I started liking Linux when I was doing my OS lab. I love that I can customize it as per my requirement.
                    </div>
                </div>
                <div class="test-info">
                    <div class="thumb">
                        <img src="img/favourites/fav/php.jpg" alt="php"/>
                    </div>
                    <div class="quote">
                        I made first commercial project using php. It allows to mix HTML and JavaScript. And in very quick time I can make web applications up and running.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonial section end-->
<!--client section start-->
<div class="section section-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="different-tittle">
                    <h4>My favourite</h4>
                    <h5>I don't have one. I like many things.</h5>
                </div>
                <!--tittle end-->
                <ul class="clients-list">
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                        <a href="http://en.wikipedia.org/wiki/Android_(operating_system)" target="_blank">
                            <img src="img/favourites/android.jpg" alt="android"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".6s">
                        <a href="http://en.wikipedia.org/wiki/Macintosh" target="_blank">
                            <img src="img/favourites/apple.jpg" alt="apple"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".7s">
                        <a href="http://en.wikipedia.org/wiki/HTML" target="_blank">
                            <img src="img/favourites/html.jpg" alt="html"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".8s">
                        <a href="http://en.wikipedia.org/wiki/Java_(programming_language)" target="_blank">
                            <img src="img/favourites/java.jpg" alt="java"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay=".9s">
                        <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">
                            <img src="img/favourites/js.jpg" alt="js"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay="1s">
                        <a href="http://en.wikipedia.org/wiki/Local_area_network" target="_blank">
                            <img src="img/favourites/lan.jpg" alt="lan"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay="1.1s">
                        <a href="http://en.wikipedia.org/wiki/MySQL" target="_blank">
                            <img src="img/favourites/mysql.jpg" alt="mysql"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay="1.2s">
                        <a href="http://en.wikipedia.org/wiki/Adobe_Photoshop" target="_blank">
                            <img src="img/favourites/ps.jpg" alt="ps"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay="1.3s">
                        <a href="http://en.wikipedia.org/wiki/Microsoft_Visual_Studio" target="_blank">
                            <img src="img/favourites/VisualStudio.jpg" alt="Visual Studio"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay="1.4s">
                        <a href="http://en.wikipedia.org/wiki/Microsoft_Windows" target="_blank">
                            <img src="img/favourites/windows.jpg" alt="windows"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay="1.5s">
                        <a href="http://en.wikipedia.org/wiki/MATLAB" target="_blank">
                            <img src="img/favourites/matlab.jpg" alt="matlab"/>
                        </a>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".5s" data-wow-delay="1.6s">
                        <a href="http://en.wikipedia.org/wiki/Mainframe_computer" target="_blank">
                            <img src="img/favourites/mainframe.jpg" alt="mainframe"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--client section end-->
<!--contact section start-->
<div class="section section-contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--tittle start-->
                <div class="tittle">
                    <h1>
                        <span>07</span>
                        drop a line </h1>
                    <h2>
                        <span>The meeting of two personalities is like the contact of two chemical substances; if there is any reaction, both are transformed.</span>
                    </h2>
                </div>
                <!--tittle end-->
                <div class="contact-row">
        			<!--submit alert begins --->
					<?php
                    if($success == "yes"){
                        echo "<div class=\"alert alert-success\">";
                            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
                            echo "<strong>Thank you!</strong> I'll contact you soon";
                        echo "</div>";
                    }
                    if($success == "no"){
                        echo "<div class=\"alert alert-danger\">";
                          echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
                          echo "<strong>Oh snap!</strong> Change a few things up and send again.";
                        echo "</div>";
                    }				
                    ?>	            
                    <!--submit alert ends --->                
                    <form name="ContactForm" role="form" class="form-horizontal" action="email/php-execute/index-agent.php" method="post" onSubmit="return ValidContactForm();">
                        <div class="row form-group">
                            <div class="col-sm-4 col-xs-12">
                                <input name="Name" type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <input name="Email" type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <input name="Subject" type="text" placeholder="Subject" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12">
                                <textarea name="Comments" placeholder="Comments" class="form-control" rows="10" cols="30" id="msg" name=""></textarea>
                            </div>
                        </div>
                        <div class="row form-group text-center">
                            <div class="col-xs-12">
                                <button type="submit" id="submit" class="view-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact section end-->
<!--container end-->
<!--footer start-->
<footer>
    <div class="primary">
        <h2 class="name wow fadeInUp">MuhammedAliAkhtar</h2>
        <div class="personal-photo wow zoomIn" data-wow-duration=".5s">
            <img src="img/author.jpg" alt=""/>
        </div>
        <div class="footer-social">
        	<a target="_blank" href="https://www.linkedin.com/in/mdaliakhtar"><span class="bg"></span><i class="fa fa-linkedin"></i></a>
            <a target="_blank" href="https://www.facebook.com/ALImdaliakhtar"><span class="bg"></span><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://twitter.com/mdaliakhtar"><span class="bg"></span><i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://plus.google.com/u/0/+MdAliAkhtarMD"><span class="bg"></span><i class="fa fa-google-plus"></i></a>
            <a target="_blank" href="skype:aliakhtarmd"><span class="bg"></span><i class="fa fa-skype"></i></a>
            <a target="_blank" href="https://github.com/mdaliakhtar"><span class="bg"></span><i class="fa fa-github"></i></a>
        </div>
        <div class="address">
            14/A Shenthamil Road, Chennai 600107
        </div>
        <div class="other-info">
            <span>+91 90430 38157</span> | <a href="mailto:ali54@live.in">ali54@live.in</a> | <a href="http://merzent.com/ali">merzent.com/ali</a>
            <br>
            Last Updated on January 14, 2015. <a href="backed-up/backed-up-on-January-14,-2015/index.php">Have a look on my old site.</a>
        </div>
    </div>
    <div class="secondary">
        Copyright © 2014 All Rights Reserved.
    </div>
</footer>
<!--footer end-->
<!--jQuery-->
<script src="js/jquery-1.11.0.js"></script>
<script src="js/royal_preloader.min.js"></script>
<script src="js/preloader-init.js"></script>
<!--Bootstrap v3.2.0-->
<script src="js/bootstrap.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--slick nav-->
<script src="js/jquery.slicknav.min.js"></script>
<!--owl carousel-->
<script src="js/owl.carousel.min.js"></script>
<!--bxslider-->
<script src="js/jquery.bxslider.min.js"></script>
<!--light gallery-->
<script src="js/lightGallery.min.js"></script>
<!--justified gallery-->
<script src="js/jquery.justifiedGallery.min.js"></script>
<!--on demand fix nav-->
<script src="js/headhesive.min.js"></script>
<!--one page nav-->
<script src="js/nav.js"></script>
<!--Scroll Top-->
<script src="js/scroll-to.js"></script>
<!--Easing-->
<script src="js/easing.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/appear.js"></script>
<!--easy pie chart-->
<script src="js/jquery.easypiechart.js"></script>
<!--Video BG-->
<script src="js/video-bg.js"></script>
<script src="js/jquery.wookmark.min.js"></script>
<script src="js/venobox.min.js"></script>
<script src="js/jquery.imagesloaded.js"></script>
<!--smartresize-->
<script src="js/smartresize.js"></script>
<!--common script for all pages-->
<script src="js/scripts.js"></script>
</body>
</html>