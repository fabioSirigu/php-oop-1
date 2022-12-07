<?php
/* Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. */

require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genre.php';
/* $spiderman->title = 'Spiderman';
var_dump($spiderman);
$her->title = 'Her';
var_dump($her); */
$movies = [

      new Movie('Spiderman', 190, [new Genre('Fantasy'), new Genre('Action')]),
      new Movie('Her', 100, [new Genre('Dramatic'), new Genre('Fantasy'), new Genre('Fantasy')]),
      new Movie('Inception', 220, [new Genre('Fantasy'), new Genre('Dramatic')]),
      new Movie('Blue Valentine', 140, [new Genre('Romantic'), new Genre('Dramatic')])

];
?>
/* var_dump($movies); */
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS -->
      <link rel="stylesheet" href="/assets/style.css">
      <!-- BOOTSTRAP -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <title>Movies</title>
</head>

<body class="bg-dark">
      <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
                  <?php foreach ($movies as $movie) : ?>
                        <div class="col p-5">
                              <div class="card py-3 px-5 h-100">
                                    <h5 class="text-danger text-uppercase">Title</h5>
                                    <h3><?= $movie->title ?></h3>
                                    <h5 class="text-danger text-uppercase">Duration:</h5>
                                    <h3><?= $movie->duration ?></h3>
                                    <h5 class="text-danger text-uppercase">Genres:</h5>
                                    <?php foreach ($movie->genre as $singleGenre) : ?>
                                          <h3><?= $singleGenre->typeGenre ?></h3>
                                    <?php endforeach  ?>
                                    <h5 class="text-danger text-uppercase">Type:</h5>
                                    <h3><?= $movie->type ?></h3>

                              </div>
                        </div>
                  <?php endforeach ?>
            </div>
      </div>

</body>

</html>