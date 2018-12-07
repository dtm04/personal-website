<?php
require __DIR__ . '/vendor/autoload.php';

function getRandomBeer() {
    $randomBeer = \billythekid\PunkApi::create("v2") -> getRandomBeer();
    return $randomBeer;
}

function getImgUrl($randomBeer) {
    $imgUrl = $randomBeer[0]->image_url;
    return urlencode($imgUrl);
}

function saveImg($randomBeer, $fn) {
    #saving a file like this is insecure
    #TODO: figure out actually use the url in <img> tag instead of saving it to pc
    #TODO: error detection try/catch
    $img = $randomBeer[0]->image_url;
    $path = "img/${fn}";
    copy($img, $path);
}

function getInfo($randomBeer){
    $info = $randomBeer[0]->description;
    return $info;
}

function getName($randomBeer) {
    $name = $randomBeer[0]->name;
    return $name;
}

function getTagLine($randomBeer) {
    $tl = $randomBeer[0]->tagline;
    return $tl;
}

function getABV($randomBeer) {
    $abv = $randomBeer[0]->abv;
    return $abv;
}

function getBrewDate($randomBeer) {
    $date = $randomBeer[0]->first_brewed;
    return $date;
}
?>