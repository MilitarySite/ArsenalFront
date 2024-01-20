<?php
    $imgid = isset($_GET['imgid']) ? $_GET['imgid'] : 0; 
    $tabelid = isset($_GET['tabelid']) ? $_GET['tabelid'] :0;
    echo "value: " . $tabelid;
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
            // Quando l'immagine è cliccata, reindirizza con l'ID (posizione + 1)
            alert('hai cliccato sull\'immagine alla posizione: ' + index + position)
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

</body>
</html>
