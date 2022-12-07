<?php

require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genere.php';

$matrix = new Movie('Matrix', 'Universo rosso e blu', new Genere('Fantasy'));
$fast_8 = new Movie('Fast 8', 'Toretto forever', new Genere('Azione'));

$db = [
    new Movie('Matrix', 'Universo rosso e blu', new Genere('Fantasy')),
    new Movie('Fast 8', 'Toretto forever', new Genere('Azione'))
];

var_dump($matrix, $fast_8);


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="card">

            <?php foreach ($db as $movie) : ?>
                <ul class="list-group list-group-flush">
                    <?php foreach ($movie as $key => $item) : ?>
                        <li scope="row"> Title : <?php echo $item ?>

                        </li>
                    <?php endforeach; ?>


                <?php endforeach; ?>

                </ul>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>