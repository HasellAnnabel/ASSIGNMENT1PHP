<?php
$ingredients = [
  "	chicken",
  "mushrooms",
  "asparagus",
  "carrots",
  "3 color pepper",
  "butter",
  "salt",
  "pimient",
  "garlic"
];
$recipe = [

  "Cut the chicken into small pieces, and season with salt, pepper, and garlic.",

  "Wash the vegetables and cut them into medium pieces.",


  "In a frying pan start by sautéing the vegetables with butter until they turn golden brown.",

  "Once browned, add the chicken and sauté with the vegetables until the chicken is fully cooked.",


  "Serve on a plate and serve with your favorite carbohydrate."

];


$title = "ANNA'S COUSINE";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <link rel="stylesheet" href="./main.css">
  <title><?= $title ?></title>
</head>

<div>
  <h1><?= $title ?></h1>
</div>


<body>
  <div id="container">
    <div>
      <img src="./imagens/priscilla-du-preez-D92BpULq-gk-unsplash.jpg" alt="">
    </div>
    <div>
      <div>
        <h2>Ingredients</h2>
        <ul>
          <?php foreach ($ingredients as $i) :
            echo "<li> $i</li>"  ?>
          <?php endforeach ?>
        </ul>
      </div>

      <div>
        <h2>Steps</h2>
        <ol>
          <?php foreach ($recipe as $i) :
            echo "<li> $i</li>" ?>
          <?php endforeach ?>
        </ol>
      </div>
    </div>
  </div>
</body>





</html>