<?php
    $imgid = isset($_GET['imgid']) ? $_GET['imgid'] : 0; 
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diashow</title>
    <!-- Aggiungi eventuali stili o collegamenti ai file CSS necessari -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #diashow-container {
            text-align: center;
        }

        #diashow-container img {
            max-width: 100%;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>

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
