<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inspiration&display=swap" rel="stylesheet">

    <!-- Link css -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>

<body>
    <!--style="background-image: linear-gradient(to bottom, #000000, #552b29, #a15c32, #d4a12a, #ddf638);" colore alternativo body -->

    <?php include './components/header.php' ?>

    <main class="d-flex">

        <!-- Sidebar -->
        <?php include './components/sidebar.php' ?>

        <div class="w-100">
            <!-- Barra di ricerca -->
            <?php include './components/searchbar.php' ?>


            <!-- Jumbotron -->
            <?php include './components/jumbotron.php' ?>

            <!-- Sezione Offerte Speciali -->
            <?php include './components/specialOffer.php' ?>

            <!-- Sezione I Più Richiesti -->
            <?php include './components/moreRequest.php' ?>

            <!-- Sezione Le Nostre Proposte -->
            <?php include './components/ourProposal.php' ?>
            
        </div>
    </main>


</body>

</html>