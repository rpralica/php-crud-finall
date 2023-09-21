<?php
//Connection
require "../settings/connection.php";
$ime = htmlspecialchars($_POST['ime']);
$prezime = htmlspecialchars($_POST['prezime']);
$adresa = htmlspecialchars($_POST['adresa']);


$ime = $prezime = $adresa = '';
$errors = array('ime' => '', 'prezime' => '', 'adresa' => '');

if (isset($_POST['btnSub'])) {

    // check ime
    if (empty($_POST['ime'])) {
        $errors['ime'] = 'Upišite ime';
    } else {
        $ime = $_POST['ime'];
    }

    // check title
    if (empty($_POST['prezime'])) {
        $errors['prezime'] = 'Upišite prezime';
    } else {
        $prezime = $_POST['prezime'];
    }

    // check ingredients
    if (empty($_POST['adresa'])) {
        $errors['adresa'] = 'Upišite adresu';
    } else {
        $adresa = $_POST['adresa'];
    }

    if (array_filter($errors)) {
        //echo 'errors in form';
    } else {
        $sql = "INSERT INTO users VALUES (NULL,'$ime','$prezime','$adresa')";
        $query = mysqli_query($db, $sql);

        if ($query) {
            header("Location: ../index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Mysql Vježba</title>
</head>
<div class="container">
    <br>
    <div class="row">
        <?php ?>
        <div class="jumbotron container">


            <h1 class="text-center">Add record</h1>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <br><br>
            <div class="col-6 offset-2">
                <input  type="text" class="form-control" name="ime" placeholder="Upišite ime"><br>
                <?php if ($errors['ime']) : ?>
                    <div  class="alert  alert-danger   text-center fw-bold  alert-dismissible fade show" role="alert">
                        <?php echo $errors['ime'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif ?>
                <input type="text" class="form-control" name="prezime" placeholder="Upišite prezime"><br>
                <?php if ($errors['prezime']) : ?>
                    <div class="alert alert-danger text-center fw-bold  alert-dismissible fade show" role="alert">
                        <?php echo $errors['prezime'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif ?>
                <input type="text" class="form-control" name="adresa" placeholder="Upišite adresu"><br>
                <?php if ($errors['adresa']) : ?>
                    <div class="alert alert-danger text-center fw-bold  alert-dismissible fade show" role="alert">
                        <?php echo $errors['adresa'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif ?>

                <button name="btnSub" id="btnSave" type="submit" class="btn btn-info offset-2 w-50">Save</button>
                <br><br>
            </div>
    </div>
</div>


</body>

</html>