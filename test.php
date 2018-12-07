<?php
require __DIR__ . '/vendor/autoload.php';
$randomBeer = \billythekid\PunkApi::create("v2") -> getRandomBeer();
/*
echo $randomBeer[0]->id;
echo $randomBeer[0]->name;
*/
$image = $randomBeer[0]->image_url;
echo $image;
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<img src="<?php echo $image; ?>">
</body>
</html>