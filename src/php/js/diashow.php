<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$imagesJsContent = realpath('images.js');;
$images = json_decode(substr($imagesJsContent, strpos($imagesJsContent, '['), -2), true);

echo '<section class="page-section py-0" id="diashow">';
echo '<div class="home-slider owl-carousel js-fullheight">';

foreach ($images as $image) {
    if ($image['id'] == 1) {
        echo '<div class="slider-item js-fullheight" style="background-image:url(' . $image['url'] . ');">';
        echo '<div class="overlay"></div>';
        echo '<div class="container">';
        echo '<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">';
        echo '<div class="col-md-12 ftco-animate">';
        echo '<div class="text w-100 text-center">';
        echo '<h2>Best Place to Travel</h2>';
        echo '<h1 class="mb-3">Norway</h1>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

echo '</div>';
echo '</section>';
?>

</body>
</html>