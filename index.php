<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
=> all’interno della classe sono dichiarate delle variabili d’istanza
=> all’interno della classe è definito un costruttore
=> all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

<?php

include_once './class/Movie.php';

$movie1 = new Movie("Taxi Driver", "Thriller", "1976", 8, "Martin Scorsese");
$movie1->setImg("https://i.pinimg.com/originals/ed/75/66/ed7566986f170e8cdec09fd2d189530c.jpg");

$movie2 = new Movie("Il Padrino", "Dramatic", "1972", 9, "Francis Ford Coppola");
$movie2->setImg("https://i.pinimg.com/originals/98/50/fd/9850fdd7bda6610b1abb50c91e5bab2b.jpg");


$movieList = [$movie1, $movie2];


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>php-oop-1</title>
</head>

<body>

  <style> 
    img {
      width: 80px;
    }
  </style>




  <div class="container w-75 m-auto text-center">
    <table class="table w-75 m-auto my-5">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Title</th>
          <th scope="col">Genre</th>
          <th scope="col">Year</th>
          <th scope="col">Rating</th>
          <th scope="col">Direction</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($movieList as $movies) : ?>
          <tr>
            <td><img class="thumb" src="<?php echo $movies->getImg() ?>" alt="image"></td>
            <td><?php echo $movies->title ?></td>
            <td><?php echo $movies->genre ?></td>
            <td><?php echo $movies->year ?></td>
            <td><?php echo $movies->rating ?></td>
            <td><?php echo $movies->direction ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>