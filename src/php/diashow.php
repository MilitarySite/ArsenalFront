<?php
    $imgid = isset($_GET['imgid']) ? $_GET['imgid'] : 0; 
    $tabelid = isset($_GET['tabelid']) ? $_GET['tabelid'] :0;
    
?> 
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
    <link rel="icon" type="image/x-icon" href="../assets/img/Head_Logo.jpg" />

    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/search.css" />
    <link rel="stylesheet" href="../css/animatedfooter.css" />
</head>
<body>

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
            <ul class="navbar-nav text-uppercase ms-auto py-0 py-lg-0">
                <li class="nav-item">     
                    <div class="search-container">
                        <form action="php/search.php" method="get">
                            <input type="text" name="query" placeholder="Cerca...">
                            <button type="submit">Cerca</button>
                        </form>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="WeaponPage.php">Armi</a></li>
                <li class="nav-item"><a class="nav-link" href="loginpage.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
        <div class="container">
        <div class="masthead-heading text-uppercase">Scegli l'arma che preferisci!</div>
            <div class="text-center">
                    <h3 class="section-subheading text-muted fw-bold mb-5 mb-lg-0">All'interno di ognuna delle sezioni relative alle armi, troverai 5
                        modelli diversi. Per ciascuno di essi, troverai descrizioni precise su tutte le caratteristiche dell'arma. Speriamo che queste 
                        informazioni possano ritornarvi utili :)
                    </h3>
                </div>  
        </div>
    </header>
    <main>
    
    <div id="diashow-container"></div>

</main>
<footer>
    <?php include '../Footer.php';?>
</footer>
</body>
<script>
    // Recupera il valore imgid dalla query string PHP
    var imgid = <?php echo isset($_GET['imgid']) ? $_GET['imgid'] : 0; ?>;
    var tabelid = <?php echo isset($_GET['tabelid']) ? $_GET['tabelid']: 0; ?>;
    

    // Array di immagini con lo stesso ID
    var immagini = [
    { id: 1, src: '../assets/img/Diashow/P-1.jpg' },
    { id: 1, src: '../assets/img/Diashow/P-2.jpg' },
    { id: 1, src: '../assets/img/Diashow/P-3.jpg' },
    { id: 1, src: '../assets/img/Diashow/P-4.jpg' },
    { id: 1, src: '../assets/img/Diashow/P-5.jpg' },
    { id: 2, src: '../assets/img/Diashow/Ar-1.jpg'},
    { id: 2, src: '../assets/img/Diashow/Ar-2.jpg'},
    { id: 2, src: '../assets/img/Diashow/Ar-3.jpg'},
    { id: 2, src: '../assets/img/Diashow/Ar-4.jpg'},
    { id: 2, src: '../assets/img/Diashow/Ar-5.jpg'},
    { id: 3, src: '../assets/img/Diashow/Lmg-1.jpg'},
    { id: 3, src: '../assets/img/Diashow/Lmg-2.jpg'},
    { id: 3, src: '../assets/img/Diashow/Lmg-3.jpg'},
    { id: 3, src: '../assets/img/Diashow/Lmg-4.jpg'},
    { id: 3, src: '../assets/img/Diashow/Lmg-5.jpg'},
    { id: 4, src: '../assets/img/Diashow/Fp-1.jpg'},
    { id: 4, src: '../assets/img/Diashow/Fp-2.jpg'},
    { id: 4, src: '../assets/img/Diashow/Fp-3.jpg'},
    { id: 4, src: '../assets/img/Diashow/Fp-4.jpg'},
    { id: 4, src: '../assets/img/Diashow/Fp-5.jpg'},
    { id: 5, src: '../assets/img/Diashow/Smg-1.jpg'},
    { id: 5, src: '../assets/img/Diashow/Smg-2.jpg'},
    { id: 5, src: '../assets/img/Diashow/Smg-3.jpg'},
    { id: 5, src: '../assets/img/Diashow/Smg-4.jpg'},
    { id: 5, src: '../assets/img/Diashow/Smg-5.jpg'},
    { id: 6, src: '../assets/img/Diashow/C-1.jpg'},
    { id: 6, src: '../assets/img/Diashow/C-2.jpg'},
    { id: 6, src: '../assets/img/Diashow/C-3.jpg'},
    { id: 6, src: '../assets/img/Diashow/C-4.jpg'},
    { id: 6, src: '../assets/img/Diashow/C-5.jpg'},
    { id: 7, src: '../assets/img/Diashow/G-1.jpg'},
    { id: 7, src: '../assets/img/Diashow/G-2.jpg'},
    { id: 7, src: '../assets/img/Diashow/G-3.jpg'},
    { id: 7, src: '../assets/img/Diashow/G-4.jpg'},
    { id: 7, src: '../assets/img/Diashow/G-5.jpg'},
    { id: 8, src: '../assets/img/Diashow/S-1.jpg'},
    { id: 8, src: '../assets/img/Diashow/S-2.jpg'},
    { id: 8, src: '../assets/img/Diashow/S-3.jpg'},
    { id: 8, src: '../assets/img/Diashow/S-4.jpg'},
    { id: 8, src: '../assets/img/Diashow/S-5.jpg'},
    { id: 9, src: '../assets/img/Diashow/Lg-1.jpg'},
    { id: 9, src: '../assets/img/Diashow/Lg-2.jpg'},
    { id: 9, src: '../assets/img/Diashow/Lg-3.jpg'},
    { id: 9, src: '../assets/img/Diashow/Lg-4.jpg'},
    { id: 9, src: '../assets/img/Diashow/Lg-5.jpg'}
];

    // Filtra le immagini basate su imgid
    var immaginiFiltrate = immagini.filter(function (img) {
        return img.id === imgid;
    });

    // Creazione del diashow
    var diashowContainer = document.getElementById('diashow-container');
    var currentIndex = 0;

    immaginiFiltrate.forEach(function (img, index) {
        // Creazione dell'elemento immagine
        var imgElement = document.createElement('img');
        var position = index+1;
        imgElement.src = img.src;
        imgElement.addEventListener('click', function() {
            // Quando l'immagine è cliccata, reindirizza con l'ID (posizione + 1) debug kevin
            //alert('hai cliccato sull\'immagine alla posizione: ' + index + position)
            window.location.href = 'File2.php?id=' + position + '&tabelid=' + tabelid;
        });

        // Aggiunta dell'immagine al container di diashow
        diashowContainer.appendChild(imgElement);
    });

    function mostraImmagine(index) {
        var immagini = diashowContainer.getElementsByTagName('img');

        // Nasconde tutte le immagini
        for (var i = 0; i < immagini.length; i++) {
            immagini[i].style.display = 'none';
        }

        // Mostra l'immagine corrente
        immagini[index].style.display = 'block';
    }

    function cambiaImmagine() {
        currentIndex = (currentIndex + 1) % immaginiFiltrate.length;
        mostraImmagine(currentIndex);
    }

    // Mostra la prima immagine
    mostraImmagine(currentIndex);

    // Imposta un intervallo per cambiare l'immagine ogni 2 secondi
    setInterval(cambiaImmagine, 5000);
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>
</html>
