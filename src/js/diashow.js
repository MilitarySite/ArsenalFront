// Array di immagini con lo stesso Id
/*
var immagini = [
    { id: 1, src: '../assets/img/Diashow/Slider_1.jpg' },
    { id: 1, src: '../assets/img/Diashow/Slider_2.jpg' },
    { id: 1, src: '../assets/img/Diashow/Slider_3.jpg' },
    { id: 1, src: '../assets/img/Diashow/Slider_4.jpg' },
    { id: 1, src: '../assets/img/Diashow/Slider_5.jpg' },
    { id: 2, src: '../assets/img/Diashow/unnamed.png'}
];*/
var immagini = [
    { id: 1, src: '../assets/img/Diashow/Download.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_1_.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_2_.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_3_.png' },
    { id: 1, src: '../assets/img/Diashow/Download-_4_.png' },
    { id: 2, src: '../assets/img/Diashow/unnamed.png'}
];
function getImmaginiById(id) {
    return immagini.filter(function (img) {
        return img.id === id;
    });
}