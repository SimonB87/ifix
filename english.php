<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iFix Project | Charitable web design service for eye care provsion | Simon Buryan </title>
    <meta name="description" content="Webdesign for medium and small businesses, Rotary rotaract initiative.">

    <meta name='author' content='Simon Buryan, email@simonburyan.cz'>
    <meta name='designer' content='Simon Buryan'>
    <meta name='reply-to' content='email@simonburyan.cz'>
    <meta name='owner' content='Simon Buryan'>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/linkstyle.css"><!-- change the style look of the link button to more info about project-->
    <link rel="stylesheet" href="assets/css/gototopbtn.css"><!-- go to top my button-->

    <link rel="icon" href="assets/img/icon.png"> <!-- TAB icon -->

</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">To the top</button>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">iFix Project</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#testimonials">References</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#project-info">About project</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Eye Care</a>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" role="presentation" href="#project-info">About project</a>
                                  <a class="dropdown-item" role="presentation" href="#photo-gallery">Gallery</a>
                                  <a class="dropdown-item" role="presentation" href="#project-points">Project Background</a>
                                </div>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Webdesign </a>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" role="presentation" href="#features">Our services</a>
                                  <a class="dropdown-item" role="presentation" href="#prices-list">Prices</a>
                                  <a class="dropdown-item" role="presentation" href="#testimonials">References</a>
                                  <a class="dropdown-item" role="presentation" href="#portfolio-projects">Portfolio</a>
                                  <a class="dropdown-item" role="presentation" href="http://www.simonburyan.cz/port/" target="_blank">Project Manager and Webdesigner</a>
                                </div>
                            </li>
                        </ul><span class="navbar-text ml-auto"> <a href="index.php"><img src="assets/img/cz.jpg" id="english" alt="Česky"></a> <a href="#prices-list" class="login">Prices</a></span><a class="btn btn-light action-button" role="button" href="#contact-section">Contakt</a></div>
                </div>
            </nav>

            <?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?> <!-- div to print out errors  -->
            <span id="formerror" class="error"></span> <!-- span to print out errors  -->

            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1"><img src="assets/img/logo-side.png" data-bs-hover-animate="rubberBand" class="mainlogo">
                        <h1 class="text-center">We help others to see again...</h1>
                        <p class="text-center">We offer great web design services and the proceeds from this activity are donated to an association that provides eye surgeries and care to patients in developing countries.</p>
                        <button class="btn btn-light btn-lg action-button infobutton" type="button"><a href="#project-info" class="linkstyle">More information</a></button></div>
                    <div
                        class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img src="assets/img/eye.jpg" class="eye"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="features-clean" id="features">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">About Our Web Designer Services</h2>
                <p class="text-center">We have devote ourselves to web design for quite a few years and we provide our clients a top-notch service.</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item animate1" data-aos="zoom-in"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">We work from anywhere</h3>
                    <p class="description">Internet and communications services connect us all. That's why we can provide you with our services from anywhere.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item animate1" data-aos="zoom-in"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">We are available</h3>
                    <p class="description">We are as flexible as possible to quickly process your requirements.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item animate1" data-aos="zoom-in"><i class="fa fa-edit icon"></i>
                    <h3 class="name">We will set everything up</h3>
                    <p class="description">We have a lot of experience with web design and we can deal with most problems.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item" data-aos="fade-up" data-aos-delay="400"><i class="fa fa-camera-retro icon"></i>
                    <h3 class="name">We have a sense for details</h3>
                    <p class="description">We monitor every aspect of your site and strive for maximum perfection.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item" data-aos="fade-up" data-aos-delay="400"><i class="fa fa-space-shuttle icon"></i>
                    <h3 class="name">We are fast</h3>
                    <p class="description">We are fired into our work and we deliver the resulting product quickly.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item" data-aos="fade-up" data-aos-delay="400"><i class="fa fa-mobile-phone icon"></i>
                    <h3 class="name">We are responsive</h3>
                    <p class="description">We can deal with all platforms, devices and operating systems, whether it's an iPhone or a PC.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="article-clean" id="project-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center articleheading" data-aos="zoom-in">We help people to see again by creating awesome websites :-)</h1><img src="assets/img/_8_t460.jpg" class="img-fluid eyedoctors"></div>
                    <div class="text">
                        <p></p>
                        <h2>At which problem is this project aimed?</h2>
                        <p>285 million people from all over the world live with visual impairment. 39 million of them are blind.
                          246 million suffer from low vision. These people are long-term reliant on the help of their loved ones.
                          This is a great burden for families, who have to deal with the difficulties of poverty often.
                          However, many eye defects can be effectively resolved by cheap and fast medical treatment.
                          Nevertheless this care is often financially or technically unavailable to the people of the developing world.&nbsp;</p>.
                        <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/FunLnMcChUo?rel=0" id="video"></iframe>
                        <h2>Who provides eye care in the third world?</h2>
                        <p>Eye care treatment in the countries of the developing world is provided by non-governmental organizations (NGO) Light for the World.
                        Its Czech branch is organisation Light for the World/Světlo pro svět.
                        The mission of Light for the World is to prevent and treat blindness and to support people with visual or other disabilities in the poorest regions of the world.
                        <br><br>
                        Light For World was established in the Czech Republic in August 2007 as a sister organization of NGO of the Light for the World network,
                        which has been working successfully in the area of helping the blind since 1988. The  organization Light for the World is also active in Austria,
                        the United Kingdom of Great Britain and Northern Ireland, Germany, Switzerland, Belgium and the Netherlands.
                        <br><br>
                        The projects focus on the treatment of blindness through cataract surgery, prevention of trachea and treatment of its consequences, as well as the
                        rehabilitation of children with disabilities and their integration into society. The organisation strives to develop and respect the rights of people
                        with disabilities and to raise awareness of this issue.
                        </p>

                        <iframe width="500" height="280" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/ft0X1swzxyw?rel=0" id="video"></iframe>
                            <h2><strong>The principles of Light for the World are:&nbsp;</strong><br></h2>
                            <ul>
                                <li>help to become independent&nbsp;<br></li>
                                <li>build in the long run sustainable structures&nbsp;<br></li>
                                <li>support training of local experts&nbsp;<br></li>
                                <li>integration of people with disabilities into all areas of life<br></li>
                            </ul>
                            <figure><img class="figure-img eyedoctor" src="assets/img/_0_t460.jpg">
                                <figcaption>Gaining lost vision is priceless</figcaption>
                            </figure>
                            <p>Projects of the Light for World in Czech Republic have been supported by authorities such as&nbsp;
                              <a href="http://www.czechaid.cz/projekty/inkluzivni-vzdelavani-deti-s-vadou-zraku-v-kambodzi/">Czech Development Agency</a>&nbsp;
                              (the Czech governmental agency financing development projects in the developing world), the CEZ Foundation
                              and the Martin Romana Foundation or the AVAST Foundation.
                              Still the mayority of resources in Czech Republic is coming from donation of individual donors (64 % in 2016).
                              Even a small gift can greatly help.
                            <br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-bs-hover-animate="pulse" class="photo-gallery" id="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Gallery</h2>
                <p class="text-center">Our project aims to support eye care in developing countries.</p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="assets/img/_3_t460.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/_3_t460.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="assets/img/_2_t460.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/_2_t460.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="assets/img/trop1.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/trop1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="assets/img/trop2.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/trop2.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="assets/img/trop3.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/trop3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="assets/img/_5_t460.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/_5_t460.jpg"></a></div>
            </div>
        </div>
    </div>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro" id="project-points">
                <h2 class="text-center" data-aos="zoom-in-down" data-aos-delay="650">Project background</h2>
                <p class="text-center quote" data-bs-hover-animate="pulse">"You have not lived today until you have done something for someone who can never repay you."<br>― John Bunyan (1628-1688) English writer and Preacher<br></p>
                <p class="text-center">The project is organized by the member of the Rotaract Club Prague by its member Šimon Buryan, who has been designing websites and applications since 2017.</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_3_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">What motivates me to do this project?</h3>
                            <p class="description">For more than two years, I have been extensively dedicated to programming websites and applications, and I want to use my ability for improving vision in developing countries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_4_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">Why precisely eye care?</h3>
                            <p class="description">Being able to see is a necesity. Life without it is possible, but very difficult.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_2_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">Why Light for the World?</h3>
                            <p class="description">Light for the World (Světlo pro svět) is a charity organisation I have been supporting since 2016. I have only good experience with them.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_5_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">Motivation</h3>
                            <p class="description">Project manager, Simon Buryan, was short-sighted from the age of 13 and received stronger and stronger glasses each year. At the age of 24, with 4 diopters on both eyes, he wore glasses practically constantly.
 Then he went through the laser vision correction operation. Since then he has seen perfectly and does not need any visual aids at all :-).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-clean" id="testimonials">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="zoom-in" data-aos-delay="500">References</h2>
                <p class="text-center">We have already worked with a large number of customers and we have been able to provide them with an excellent product that has fully met their needs.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item peoplereferences" data-bs-hover-animate="pulse">
                    <div class="box">
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. *** *** ***.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h5 class="name">Irena Brichta</h5>
                        <p class="title">CEO Brichta Partners, co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item peoplereferences" data-bs-hover-animate="pulse">
                    <div class="box">
                        <p class="description">Simon is enthusiastic about webdesign and is intensely engaged in. He was able to design a solution that fits my business. Its application worked fast and flawlessly. Simon has continually sent me the results, quickly incorporating my other requirements, and quickly completing the application over the weekend. I like to recommend it to others.</p>
                    </div>
                    <div class="author"><img src="assets/img/jedlinsky.jpg" class="rounded-circle">
                        <h5 class="name">Jakub Jedlinský</h5>
                        <p class="title">CEO <a href="https://altlift.cz/">Altlift s.r.o.</a> </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item peoplereferences" data-bs-hover-animate="pulse">
                    <div class="box">
                        <p class="description">Simon pleasantly surprised us that he did add a number of features to our site. The actual result of his work exceeded the original assignment. We are fully satisfied with his proposal and appreciate the fact that he devoted himself so thoroughly and quickly to the whole site. Cooperation with Simon on the project was excellent.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/jerry.jpg">
                        <h5 class="name">Jaroslav Fořt</h5>
                        <p class="title">Past president - <a href="http://rotaractprague.com/">RAC Praha</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-horizontal" id="portfolio-projects">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Portfolio of earlier projects</h2>
                <p class="text-center">Our team has already implemented a number of projects that created websites and web applications. Below is a short list ...</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/project1.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://laborka2017.chytrak.cz/show/index.php">Brichta Partners</a></h3>
                            <p class="description">Web with a contact form for a company dedicated to employee development, recruitment of managers and corporate consultancy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/teslaroadster1.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://simonburyan.cz/tesla/">Tesla Roadster Website</a></h3>
                            <p class="description">A fully redesigned copy of the Tesla Roadster product website.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/racguide18.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://rotaractprague.com/guide/see/index.html">Rotaract Tour Guide</a></h3>
                            <p class="description">Web providing information for visitors to Prague with a focus on Rotaract clubs members arriving from abroad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/phpsite.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://www.simonburyan.cz/demos7">Corporate database site</a></h3>
                            <p class="description">Web for the Czech Energy Company to report maintenance statistics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/eshopmelnik.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://www.simonburyan.cz/testshop/">Fashion e-shop</h3>
                            <p class="description">Fully functional e-shop offering women's dresses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/project4.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://laborka2017.chytrak.cz/ind_sro/index.html">IT-Company website</a></h3>
                            <p class="description">Web site design for IT company presentation.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p class="text-center noteprojects">Portfolio of completed projects is available on: &nbsp;<a href="http://www.simonburyan.cz/port">SimonBuryan.CZ</a>. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed" id="prices-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="zoom-out">Price List</h2>
                <p class="text-center">All prices are in gross form. For each contract, we propose an agreement to perform a work that is subject to a 15% tax.</p>
                <p class="text-center">From net amount after tax <strong>40 % of earnings </strong> go to &nbsp;a charitable association&nbsp;<strong>Light for the World/Světlo pro Svět</strong>.
                  <span class="orangeprice"><strong>One eye surgery of cataract</strong></span>, which belogs to the&nbsp;main reasons&nbsp; for blindeness in &nbsp;
                  developing countries, costs about <span class="orangeprice"><strong>800 Czech Crowns (CZK)</strong></span>.&nbsp;<br></p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-code listicon"></i>
                        <h3 class="name">Web maintenance</h3>
                        <br>
                        <p class="description pricedetails">We offer steps to improve websites and applications in a number of programming languages: PHP, JavaScript, CSS, HTML and more.</p>
                        <p><strong>Involves></strong></p>
                        <p>Design: </p>
                        <p>Coding Font-end: </p>
                        <p>Coding Back-end: </p>
                        </div>
                    <p class="listprice">250,- CZK/hod<br></p>
                    <div class="charityfee">
                        <p><strong>z toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>85,- CZK/hod</strong><br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-id-card-o listicon"></i>
                        <h3 class="name">Portfolio Web</h3>
                        <br>
                        <p class="description pricedetails">We make a website for you to present yourself or your business. We have considerable experience with the implementation of these projects for corporate clients.</p>
                        <p><strong>Involves></strong></p>
                        <p>Design: 2 hod</p>
                        <p>Coding Font-end: 4 hod</p>
                        <p>Coding Back-end: 2 hod</p>
                    </div>
                    <p class="listprice">2 200,- CZK<br></p>
                    <div class="charityfee">
                        <p><strong>z&nbsp;toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>748,- CZK</strong><br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-database listicon"></i>
                        <h3 class="name">Database Web</h3>
                        <br>
                        <p class="description pricedetails">We can implement a site for you to provide specific services such as access to data after logging in, saving files online, filling out questionnaires and storing data from them in a database or sending to email.</p>
                        <p><strong>Involves></strong></p>
                        <p>Design: 3 hod</p>
                        <p>Coding Font-end: 5 hod</p>
                        <p>Coding Back-end: 6 hod</p>
                    </div>
                    <p class="listprice">3 500,- CZK<br></p>
                    <div class="charityfee">
                        <p><strong>z toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>1190,- CZK</strong><br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-cart-arrow-down listicon"></i>
                        <h3 class="name">Fully Functional Eshop</h3>
                        <br>
                        <p class="description pricedetails">We have experience with the implementation of e-shops for corporate clients. We use open-source open-source technology that offers fast e-shop implementation (including payment gateway and EET), simple management and full-set appearance of the entire e-shop.</p>
                        <p><strong>Involves></strong></p>
                        <p>Design: 4 hod</p>
                        <p>Coding Font-end: 6 hod</p>
                        <p>Coding Back-end: 6 hod</p>
                    </div>
                    <p class="listprice">6 500,- CZK<br></p>
                    <div class="charityfee">
                        <p><strong>z toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>2210,- CZK</strong><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-clean">
        <div class="container" id="contact-section">
            <div class="intro">
                <div class="col-md-12">
                    <h1 data-aos="fade-up" class="contact">Contact us</h1>
                    <?php include "process.php"; ?>
                    <?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?> <!-- div to print out errors  -->
                    <form id="myform" name="theform" class="group  bg-grey" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                      <span id="formerror" class="error"></span> <!-- span to print out errors  -->
                      <div>
                        <div>
                          <label for="myname">Name *</label>
                   			 	<input type="text" class="form-control" name="myname" id="myname" title="Prosím, uveďte své jméno." placeholder="First and Last Name" required value="<?php if (isset($myname)) { echo $myname; } ?>" />
                   				<?php if (isset($err_myname)) { echo $err_myname; } ?>
                        </div>
                        <div>
                          <label for="mycompany">Company</label>
                   				<input type="text" name="mycompany" class="form-control" id="mycompany" title="Prosím, uveďte jméno společnosti."  value="<?php if (isset($mycompany)) { echo $mycompany; } ?>" />
                        </div>
                        <div>
                          <label for="myemail">Email *</label>
                   				<input type="email" name="myemail" class="form-control" id="myemail" title="Please enter your email" placeholder="@" required value="<?php if (isset($myemail)) { echo $myemail; } ?>" />
                        </div>
                        <div>
                          <label for="mycomments">Message: (HTML signes not allowed)</label>
                          <textarea name="mycomments" class="form-control" id="mycomments" rows="5"><?php if (isset($mycomments)) { echo $mycomments; } ?></textarea>
                        </div>
                      </div>
                      <p>* ... required items</p>
                    <button type="submit" name="action" value="submit" class="btn btn-primary pull-right contactbutton">Send</button>
                    </form>
                  </div>

                <p class="text-center contactdescription">You can also contact us directly on these contacts. We would like to discuss everything you need with us :-).<br></p>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col"><i class="fa fa-user-o listicon contacticon"></i>
                        <p class="contactinfo">Simon Buryan</p>
                        <p class="contactinfo"><a href="http://rotaractprague.com/">Rotaract Klub Praha </a></p>
                    </div>
                    <div class="col"><i class="fa fa-phone listicon contacticon"></i>
                        <p class="contactinfo">+420 732 716 030</p>
                    </div>
                    <div class="col"><i class="fa fa-envelope-o listicon contacticon"></i>
                        <p class="contactinfo">simonburyan[at]rotaractprague.com </p>
                    </div>
                    <div class="col"><i class="fa fa-home listicon contacticon"></i>
                        <p class="contactinfo">Praha 8 - Ládví<br></p>
                        <p class="contactinfo">Czech Repubic, EU<br></p>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <iframe allowfullscreen="" frameborder="0" width="100%" height="450" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlWBBojCBh1jknJ9clHp8Nf16VIDPXauw&callback=initMap"></iframe></div>
        -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Služby</h3>
                        <ul>
                            <li><a href="#portfolio-projects">Portfolio</a></li>
                            <li><a href="#testimonials">References</a></li>
                            <li><a href="#prices-list">Price List</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About us</h3>
                        <ul>
                            <li><a href="#project-info">About project</a></li>
                            <li><a href="#project-points">Project Background</a></li>
                            <li><a href="#photo-gallery">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>iFix Project</h3>
                        <p>Project is run with support of the &nbsp; Rotaract Clubu Praha. The target beneficiary of the project is Light Light for the World,
                          an associate organization of Light for the World, which has been providing eye care to patients in developing countries since 1988.</p>
                    </div>
                    <div class="col item social" data-aos="zoom-in-up"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">iFix Project /&nbsp;<a href="http://www.simonburyan.cz/port/"><strong>Simon Buryan</strong></a>&nbsp;©2018 - update: 10th July 2018</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/gototopbtn.js"></script>
</body>

</html>
