<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iFix Project | Charitativní web design pro péči o oči | Šimon Buryan </title>
    <meta name="description" content="Webdesign pro střední a malé firmy, iniciativa rotary rotaract">

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
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/linkstyle.css"><!-- change the style look of the link button to more info about project-->
    <link rel="stylesheet" href="assets/css/gototopbtn.css"><!-- go to top my button-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="icon" href="assets/img/icon.png"> <!-- TAB icon -->
</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Nahoru</button>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">iFix Project</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#testimonials">Reference</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#project-info">O projektu</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Péče o oči </a>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" role="presentation" href="#project-info">O projektu</a>
                                  <a class="dropdown-item" role="presentation" href="#photo-gallery">Galerie</a>
                                  <a class="dropdown-item" role="presentation" href="#project-points">Pozadí projektu</a>
                                </div>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Webdesign </a>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" role="presentation" href="#features">Naše služby</a>
                                  <a class="dropdown-item" role="presentation" href="#prices-list">Ceník</a>
                                  <a class="dropdown-item" role="presentation" href="#testimonials">Reference</a>
                                  <a class="dropdown-item" role="presentation" href="#portfolio-projects">Portfolio</a>
                                  <a class="dropdown-item" role="presentation" href="http://www.simonburyan.cz/port/" target="_blank">Manager a webdesigner projektu</a>
                                </div>
                            </li>
                        </ul><span class="navbar-text ml-auto"> <a href="english.php"><img src="assets/img/usuk.gif" id="english" alt="English"></a> <a href="#prices-list" class="login">Ceník</a></span><a class="btn btn-light action-button" role="button" href="#contact-section">Kontakt</a></div>
                </div>
            </nav>

            <?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?> <!-- div to print out errors  -->
            <span id="formerror" class="error"></span> <!-- span to print out errors  -->

            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1"><img src="assets/img/logo-side.png" data-bs-hover-animate="rubberBand" class="mainlogo">
                        <h1 class="text-center">Pomáháme prozřít...</h1>
                        <p class="text-center">Nabízíme realizaci skvělých webových stránek a výtěžek z této činnosti věnujeme sdružení, která navrací zrak pacientům v rozvojových zemích.</p>
                        <button class="btn btn-light btn-lg action-button infobutton" type="button"><a href="#project-info" class="linkstyle">Více informací</a></button></div>
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
                <h2 class="text-center">O našich webdesignerských službách</h2>
                <p class="text-center">Věnujeme se web designu dlouhodobě a poskytujeme našim klientům maximální servis.</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item animate1" data-aos="zoom-in"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Pracujeme odkudkoli</h3>
                    <p class="description">Internet a komunikační služby nás všechny propojuje. Proto Vám můžeme poskytnout naše služby odkudkoli.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item animate1" data-aos="zoom-in"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Jsme k dispozici</h3>
                    <p class="description">Jsme maximálně flexibilní, abychom dokázali rychle zpracovat Vaše požadavky.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item animate1" data-aos="zoom-in"><i class="fa fa-edit icon"></i>
                    <h3 class="name">Vše plně nastavíme</h3>
                    <p class="description">Máme plno zkušensotí s webdesignem a dokážeme si poradit s většinou problémů.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item" data-aos="fade-up" data-aos-delay="400"><i class="fa fa-camera-retro icon"></i>
                    <h3 class="name">Máme smysl pro detail</h3>
                    <p class="description">Sledujeme každý aspekt Vašeho webu a usilujeme o maximální dokonalost.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item" data-aos="fade-up" data-aos-delay="400"><i class="fa fa-space-shuttle icon"></i>
                    <h3 class="name">Jsme rychlí</h3>
                    <p class="description">Jsme zapálení do naší práce a výsledný produkt Vám dodáme rychle.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item" data-aos="fade-up" data-aos-delay="400"><i class="fa fa-mobile-phone icon"></i>
                    <h3 class="name">Jsme responzivní</h3>
                    <p class="description">Dokážeme si poradit se všemi platformami, zařízeními a operačními systémy ať se jedná o iPhone nebo PC.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="article-clean" id="project-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center articleheading" data-aos="zoom-in">Pomáháme lidem vidět tím, že děláme úžasné webovky</h1><img src="assets/img/_8_t460.jpg" class="img-fluid eyedoctors"></div>
                    <div class="text">
                        <p></p>
                        <h2>Jakému problému se projekt věnuje?</h2>
                        <p>285 miliónů lidí z celého světa žije se zrakovým postižením. 39 miliónů z nich jsou nevidomí. 246 miliónů trpí slabozrakostí.
                          Tito lidé jsou dlouhodobě odkázáni na pomoc svých blízkých. To představuje velkou zátěž pro rodiny, které se beztak musí potýkat často s těžkostmi chudoby.
                          Řadu očních vad je ale možné efektivně vyřešit levným a rychlým lékařským zákrokem. Tato péče je často pro obyvatele rozvojového světa finančně
                          či technicky nedostupná.&nbsp;</p>
                          <div clas="video">
                            <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/FunLnMcChUo?rel=0" class="video"></iframe>
                        </div>
                        <h2>Kdo poskytuje péči ve třetím světě?</h2>
                        <p>Léčbu v rozvojovém světě poskytuje nevládní organizace Světlo pro Svět - Light for the World. Posláním Světla pro svět je prevence a léčba slepoty
                          a podpora osob se zrakovým či jiným postižením v nejchudších oblastech světa.
                          <br><br>
                          Sdružení Světlo pro Svět bylo založeno v České republice v srpnu 2007 jako sesterská organizace nevládních organizací sítě Light for the World,
                          která v oblasti pomoci nevidomým úspěšně funguje již od roku 1988. Mezinárodní organizace Light for the World působí také v Rakousku,
                          Spojeném království Velké Británie a Severního Irska, Německu, Švýcarsku, Belgii a Nizozemí.
                          <br><br>
                          Projekty se zaměřují na léčbu slepoty prostřednictvím operací šedého zákalu, prevence trachomu a léčení jeho následků, dále také na rehabilitace
                          dětí s postižením a jejich začleňování do společnosti. Snažíme se o rozvoj a dodržování práv osob s postižením a zvyšování povědomí o této problematice.</p>
                        <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/ft0X1swzxyw?rel=0" class="video"></iframe>
                            <h2><strong>Zásady organizace Světlo pro svět jsou:&nbsp;</strong><br></h2>
                            <ul>
                              <li>pomoc ke svépomoci&nbsp;<br></li>
                              <li>budování dlouhodobě udržitelných struktur&nbsp;<br></li>
                              <li>podpora vzdělávání místních odborníků&nbsp;<br></li>
                              <li>integrace osob se zdravotním postižením do všech oblastí života<br></li>
                            </ul>
                            <figure><img class="figure-img eyedoctor" src="assets/img/_0_t460.jpg">
                                <figcaption>Získaz ztracený zrak je k nezaplacení</figcaption>
                            </figure>
                            <p>Projekty Sdružení Světlo pro Svět podpořily takové autority jako&nbsp;
                              <a href="http://www.czechaid.cz/projekty/inkluzivni-vzdelavani-deti-s-vadou-zraku-v-kambodzi/">Česká rozvojová agentura</a>&nbsp;
                              (česká vládní agentura financující rozvojové projekty v rozvojovém světě), Nadace ČEZ a Nadace Martina Romana nebo Nadační fondu AVAST.
                              Nicméně většina zdrojů v ČR pocházela od darů individuálních dárců (64 % v r. 2016). I malý dar může významně pomoci.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-bs-hover-animate="pulse" class="photo-gallery" id="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Galerie</h2>
                <p class="text-center">Our project strives to support eye care in developing countries.</p>
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
                <h2 class="text-center" data-aos="zoom-in-down" data-aos-delay="650">Pozadí projektu</h2>
                <p class="text-center quote" data-bs-hover-animate="pulse">"Dnešek jste skutečně plně neprožili, pokud jste neudělali něco pro někoho, kdo vám to nikdy nemůže vrátit."<br>― John Bunyan (1628-1688) britský spisovatel and kazatel<br></p>
                <p class="text-center">Projekt organizuje v rámci Rotaract Klubu Praha jeho člen Šimon Buryan, který se věnuje návrhu webových stránek a aplikací od r. 2017.</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_3_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">Co mě motivuje dělat tento projekt?</h3>
                            <p class="description">Již více než dva roky se intenzivně věnuji programování webových stránek a aplikací a chci své schopnosti využít dobročinným způsobem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_4_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">Proč právě péče o oči?</h3>
                            <p class="description">Zrak já základní smysl. Život bez něj je možný, ale značně obtížný.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_2_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">Proč právě Světlo pro Svět?</h3>
                            <p class="description">Světlo pro svět - Light for the World je sdužení, které podporuji již od roku 2016. Mám s nimi jen dobré zkušenosti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img src="assets/img/_5_t460.jpg" class="img-fluid"></a></div>
                        <div class="col">
                            <h3 class="name">Motivace</h3>
                            <p class="description">Manažer projektu, Šimon Buryan, byl krátkozraký od 13 let a každým rokem dostával silnější a silnější brýle. V 24 letech při již čtyřech dioptriích na obou očích nosil brýle prakticky neustále. Pak podstoupil &nbsp;laserovou
                                operaci korekce zraku. Od té doby vidí perfektně a nepotřebuje vůbec žádné pomůcky pro zrak :-).<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-clean" id="testimonials">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="zoom-in" data-aos-delay="500">Reference</h2>
                <p class="text-center">Pracovali jsme již s velkou řadou zákazníků a dokázli jsme jim poskytnout vynikající produkt, který plně naplnil jejich potřeby.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item peoplereferences" data-bs-hover-animate="pulse">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h5 class="name">Irena Brichta</h5>
                        <p class="title">CEO Brichta Partners, co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item peoplereferences" data-bs-hover-animate="pulse">
                    <div class="box">
                        <p class="description">Šimon je zapálený do webdesignu a intenzivně se mu věnuje. Dokázal navrhnout řešení, které se mi skvěle hodilo. Jeho aplikace fungovala rychle a bezchybně. Šimon mi průběžně posílal výsledky, zakomponoval rychle moje další požadavky
                            a rychle jsme celou aplikaci dokončili přes víkend. Rád ho doporučím ostatním.</p>
                    </div>
                    <div class="author"><img src="assets/img/jedlinsky.jpg" class="rounded-circle">
                        <h5 class="name">Jakub Jedlinský</h5>
                        <p class="title">CEO <a href="https://altlift.cz/">Altlift s.r.o.</a> </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item peoplereferences" data-bs-hover-animate="pulse">
                    <div class="box">
                        <p class="description">Šimon nás příjemně překvapil, že dodal řadu funkcionalit do našeho webu. Vlastní výsledek jeho práce převýšil původní zadání. Jsme s jeho návrhem plně spokojeni a ceníme si, že se mu věnoval tak důkladně a rychle celý web vypracoval. Spolupráce s Šimonem na projektu byla výtečná.</p>
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
                <h2 class="text-center">Portfólio dřívějších projektů</h2>
                <p class="text-center">Náš tým realizoval již řadu projektů, které daly vzniknout webovým stránkám a webovým aplikacím. Níže uvádíme krátký seznam...</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/project1.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://laborka2017.chytrak.cz/show/index.php">Brichta Partners</a></h3>
                            <p class="description">Web s kontaktním formulářem pro společnost zabývající se rozvojem zaměstnanců, náborem managerům a firemním poradenstvím.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/teslaroadster1.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://simonburyan.cz/tesla/">Tesla Car</a></h3>
                            <p class="description">Plná kopie produktového webu automobilu Tesla Roadster.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/racguide18.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://rotaractprague.com/guide/see/index.html">Rotaract Tour Guide</a></h3>
                            <p class="description">Web poskytující infromace pro návštěvníky Prahy se zaměřením na členy Rotaract klubů v zahraničí.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/phpsite.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://www.simonburyan.cz/demos7">Firemní databázový web</a></h3>
                            <p class="description">Web pro českou energetickou společnost pro reportování statistik údržby.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/eshopmelnik.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://www.simonburyan.cz/testshop/">Módní e-shop</h3>
                            <p class="description">Plně funkční e-shop nabízející dámské šaty.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/project4.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="http://laborka2017.chytrak.cz/ind_sro/index.html">Web pro IT-společnost</a></h3>
                            <p class="description">Návrh firemního webu pro prezentaci IT společnosti.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p class="text-center noteprojects">Portólium realizovaných projektů je dostupné na webu&nbsp;<a href="http://www.simonburyan.cz/port">Šimona Buryana</a>. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed" id="prices-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="zoom-out">Vzorový ceník</h2>
                <p class="text-center">Všechny ceny jsou v hrubé podobě. Pro každou zakázku uzavíráme dohodu o provedení práce, na kterou se vztahuje daň 15 %.</p>
                <p class="text-center">Z čisté sumy po zdanění <strong>40 % příjmu </strong>putuje&nbsp;ve prospěch dobročinného sdružení&nbsp;<strong>Světlo pro Svět</strong>. <span class="orangeprice"><strong>Jedna operace šedého zákalu</strong></span>, který patří
                    k&nbsp;hlavním důvodům&nbsp;slepoty v&nbsp;rozvojových zemích, stojí přibližně <span class="orangeprice"><strong>800 Kč</strong></span>.&nbsp;<br></p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-code listicon"></i>
                        <h3 class="name">Údržba webu</h3>
                        <br>
                        <p class="description pricedetails">Nabízíme realizaci kroků pro vylepšení webových stránek a aplikací v řadě programovacícj jazyků: PHP, JavaScript, CSS, HTML a další.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        </div>
                    <p class="listprice">250,- Kč/hod<br></p>
                    <div class="charityfee">
                        <p><strong>z toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>85,- Kč/hod</strong><br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-id-card-o listicon"></i>
                        <h3 class="name">Portfóliový Web</h3>
                        <br>
                        <p class="description pricedetails">Realizujeme pro Vás web, na kterém můžete prezentovat sebe či svoji firmu. Máme značné skušenosti s realizací těchto projektů pro firemní klienty.</p>
                        <p><strong>Obsahuje></strong></p>
                        <p>Design: 2 hod</p>
                        <p>Kódování Font-end: 4 hod</p>
                        <p>Kódování Back-end: 2 hod</p>
                    </div>
                    <p class="listprice">2 200,- Kč<br></p>
                    <div class="charityfee">
                        <p><strong>z&nbsp;toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>748,- Kč</strong><br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-database listicon"></i>
                        <h3 class="name">Databázový Web</h3>
                        <br>
                        <p class="description pricedetails">Můžeme pro Vás realizovat web, který bude poskytovat specifické služby jako je přístup k datům po přihlášení, ukládání souborů online, vyplňování dotazníků a ukládání dat z nich do databáze atd.</p>
                        <p><strong>Obsahuje></strong></p>
                        <p>Design: 3 hod</p>
                        <p>Kódování Font-end: 5 hod</p>
                        <p>Kódování Back-end: 6 hod</p>
                    </div>
                    <p class="listprice">3 500,- Kč<br></p>
                    <div class="charityfee">
                        <p><strong>z toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>1190,- Kč</strong><br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 item" data-bs-hover-animate="pulse">
                    <div class="box"><i class="fa fa-cart-arrow-down listicon"></i>
                        <h3 class="name">Funkční Eshop</h3>
                        <br>
                        <p class="description pricedetails">Máme zkušenosti s realizací e-shopů pro firemní klientelu. Využíváme open-source technologii OpenCart, která nabízí rychlou realizaci e-shopu (včetně platební brány a EET), jednoduchou správu a plnénastavené vzhledu celého e-shopu.</p>
                        <p><strong>Obsahuje></strong></p>
                        <p>Design: 4 hod</p>
                        <p>Kódování Font-end: 6 hod</p>
                        <p>Kódování Back-end: 6 hod</p>
                    </div>
                    <p class="listprice">6 500,- Kč<br></p>
                    <div class="charityfee">
                        <p><strong>z toho Světlo pro Svět získá:</strong></p>
                        <p class="listpriceshare"><strong>2210,- Kč</strong><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-clean">
        <div class="container" id="contact-section">
            <div class="intro">
                <div class="col-md-12">
                    <h1 data-aos="fade-up" class="contact">Kontaktujte nás</h1>
                    <?php include "process.php"; ?>
                    <?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?> <!-- div to print out errors  -->
                    <form id="myform" name="theform" class="group  bg-grey" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                      <span id="formerror" class="error"></span> <!-- span to print out errors  -->
                      <div>
                        <div>
                          <label for="myname">Jméno *</label>
                   			 	<input type="text" class="form-control" name="myname" id="myname" title="Prosím, uveďte své jméno." placeholder="Jméno a příjmení" required value="<?php if (isset($myname)) { echo $myname; } ?>" />
                   				<?php if (isset($err_myname)) { echo $err_myname; } ?>
                        </div>
                        <div>
                          <label for="mycompany">Společnost</label>
                   				<input type="text" name="mycompany" class="form-control" id="mycompany" title="Prosím, uveďte jméno společnosti."  value="<?php if (isset($mycompany)) { echo $mycompany; } ?>" />
                        </div>
                        <div>
                          <label for="myemail">Email *</label>
                   				<input type="email" name="myemail" class="form-control" id="myemail" title="Please enter your email" placeholder="@" required value="<?php if (isset($myemail)) { echo $myemail; } ?>" />
                        </div>
                        <div>
                          <label for="mycomments">Zpráva: (znaky HTML nejsou povoleny)</label>
                          <textarea name="mycomments" class="form-control" id="mycomments" rows="5"><?php if (isset($mycomments)) { echo $mycomments; } ?></textarea>
                        </div>
                      </div>
                      <p>* ... po6adované položky</p>
                    <button type="submit" name="action" value="submit" class="btn btn-primary pull-right contactbutton">Zaslat</button>
                    </form>
                  </div>

                <p class="text-center contactdescription">Můžete se nám ozvat také přímo na těchto kontaktech. Rádi s Vámi probereme vše potřebné :-).<br></p>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col"><i class="fa fa-user-o listicon contacticon"></i>
                        <p class="contactinfo">Šimon Buryan</p>
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
                        <p class="contactinfo">Česká Republika<br></p>
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
                            <li><a href="#portfolio-projects">Portfólio</a></li>
                            <li><a href="#testimonials">Reference</a></li>
                            <li><a href="#prices-list">Ceník</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>O nás</h3>
                        <ul>
                            <li><a href="#project-info">O projektu</a></li>
                            <li><a href="#project-points">Pozadí projektu</a></li>
                            <li><a href="#photo-gallery">Galérie</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>iFix Project</h3>
                        <p>Projekt je realizován &nbsp;rámci Rotaract Klubu Praha. Cílový beneficient projektu je sdružení Světlo pro Svět, která je přidružená organizace organizace Light for the World, která od roku 1988 poskytuje lékařskou péči zaměřenou
                            na péči o oči pacientům v rozvojových zemích.</p>
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
