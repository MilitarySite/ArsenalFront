<?php
    $imgid = isset($_GET['imgid']) ? $_GET['imgid'] : 0; 
    
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
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/search.css" />
    <link rel="stylesheet" href="../css/animatedfooter.css"/>
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
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="page/WeaponPage.html">Armi</a></li>
                <li class="nav-item"><a class="nav-link" href="php/login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>


<div id="diashow-container"></div>

<script>
    // Recupera il valore imgid dalla query string PHP
    var imgid = <?php echo isset($_GET['imgid']) ? $_GET['imgid'] : 0; ?>;

    // Array di immagini con lo stesso ID
    var immagini = [
    { id: 1, src: '../assets/img/Diashow/Download.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_1_.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_2_.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_3_.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_4_.png' },
    { id: 2, src: '../assets/img/Diashow/unnamed.png'}
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
            // Quando l'immagine è cliccata, reindirizza con l'ID (posizione + 1)
            alert('hai cliccato sull\'immagine alla posizione: ' + index + position)
            window.location.href = 'File2.php?id=' + position;
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

</body>
</html>
