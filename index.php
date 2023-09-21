<?php
require "./settings/connection.php";
$sql = "SELECT * FROM users";
$query = mysqli_query($db, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

$cnt = 1;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Php Mysql Vježba</title>
</head>

<body>
    <br><br>
   

<div class="jumbotron container">

    <h1 class="text-center fw-bold text-danger">PhP Mysql Crud</h1>
</div>

    
   <br><br>
    <div class="container ">
        <div class="row ">
            <div class="col-12 ">
                <table class="table table-bordered table-striped" style="font-size: larger;text-align: center;">
                    <thead>
                        <tr>
                            <th>Br</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Adresa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($results as $result) : ?>
                            <tr>
                                <td><?php echo $cnt++; ?></td>
                                <td><?php echo $result['ime']; ?></td>
                                <td><?php echo $result['prezime']; ?></td>
                                <td><?php echo $result['adresa']; ?></td>
                                <td>
                                    <button name="Edit" class="btn btn-warning "><a  class="text-decoration-none text-white"   href="./components/edit.php?id=<?php echo $result['id']; ?>">Edit</a></button>
                                    <button name="Delete" class="btn btn-danger"><a class="text-decoration-none text-white"  href="./components/delete.php?id=<?php echo $result['id']; ?>">Delete</a></button>
                                </td>
                            </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
                <br>
                <div class="container ">

                    <button class="btn btn-info offset-5 "><a class="text-decoration-none text-white" href="./components/add.php">Add Record</a></button>
                    <br><br><br><br>
                </div>
            </div>
        </div>

        </form>
    </div>






</body>

</html>