<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="ArsenalFront" />
    <meta name="author" content="Team ArsenalFront" />

    <!-- Meta tag og -->
    <meta property="og:title" content="ArsenalFront">
    <meta property="og:type" content="Weapons">
    <meta property="og:description" content="ArsenalFront">

    <!-- Generality -->
    <title>ArsenalFront</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />

    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/search.css" />

</head>

<body id="page-top">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <!-- Icon Left -->
            <a class="navbar-brand" href="#page-top">
                <h2 class="section-heading text-uppercase">ArsenalFront</h2>
            </a>
            <!-- Button Mobile - menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <!-- Nav site -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item">     
                        <div class="search-container">
                            <form action="php/search.php" method="get">
                                <input type="text" name="query" placeholder="Cerca...">
                                <button type="submit">Cerca</button>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Weapons</a></li>
                    <li class="nav-item"><a class="nav-link" href="../php/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Weapons Page</div>
        </div>
    </header>

    <main>
        <!-- Portfolio Grid --> 
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <!-- <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Benvenuti su ArsenalFront, il portale definitivo per gli appassionati di armi! 
                        Esplorate la nostra vasta gamma di descrizioni dettagliate sulle armi da fuoco di ultima generazione. Il nostro sito offre approfondimenti tecnici, immagini esplicative e guide all'utilizzo su tutte le categorie di armi attualmente utilizzate nel ramo militare. Che siate tiratori sportivi, collezionisti o semplici curiosi, ArsenalFront offre un ambiente informativo e sicuro per soddisfare la vostra passione.</h3>
                </div> -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pistole</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Illustration</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fucili d'assalto</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Graphic Design</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mitragliatrici</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Identity</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Armi a canna liscia</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Branding</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Submachine Gun (SMG)</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Website Design</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Armi bianche</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Photography</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 ">
                        <!-- Portfolio item 7-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Granate / Bombe</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Photography</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 8-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fucili di precisione</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Photography</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 9-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lanciagranate</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Photography</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Handguns</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the world of handguns through detailed descriptions and captivating images on our dedicated page. Take a look at current models, delving into the power and innovation of these firearms for an informative journey.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="1">
                                        <button type="submit">Button 1</button>
                                    </form>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Assault Rifles</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the expansive world of assault rifles through detailed descriptions and engaging images on our dedicated page. Immerse yourself in the power and efficiency of these rifles for an exciting and informative journey.
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="2"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Machine Guns</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the dynamic landscape of machine guns through detailed descriptions and engaging images on our dedicated page. Immerse yourself in the power and versatility of these automatic weapons for an exciting and informative journey.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="3"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Shotguns</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the diverse range of pump-action shotguns through detailed descriptions and engaging images on our dedicated page. Come to discover the power of these shotguns for a comprehensive and stimulating informative experience.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="4"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Submachine Guns (SMG)</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Discover the versatility of submachine guns through detailed descriptions and engaging images on our dedicated page. From the compactness of the design to the various applications of current models, we invite you to explore the power and effectiveness of these weapons for a comprehensive and exciting informative experience.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="5"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Edged Weapons</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the variety of edged weapons through detailed descriptions and engaging images on our dedicated page. From the mastery of design to the various applications of current models, we invite you to discover the precision and versatility of these weapons for a comprehensive and fascinating informative experience.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="6"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 7 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Grenades / Bombs</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the power of grenades through detailed descriptions and engaging images. We invite you to discover the effectiveness and versatility of these explosive devices for a comprehensive and captivating informative experience, on our dedicated page.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="7"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 8 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Sniper Rifles</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the extreme precision of sniper rifles through detailed descriptions and engaging images on our dedicated page. We invite you to discover all the curiosities of these amazing rifles. This page will try to give you a comprehensive and exciting informative experience.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="8"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 9 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Grenade Launchers</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="https://dummyimage.com/600x450/343a40/6c757d" alt="..." />
                                    <p>Explore the power and the explosiveness of grenade launchers through detailed descriptions and engaging images. We, on our dedicated page, invite you to discover all these devices through a comprehensive and engaging informative experience.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <!-- Non cambiare codice, permette di passare l'id al php-->
                                    <form action="File2.php" method="get">
                                        <input type="hidden" name="id" value="9"> 
                                        <button type="submit">Button 1</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>