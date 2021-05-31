

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
    <script src="bootstrap-5/js/bootstrap.min.js"></script>
    <script src="bootstrap-5/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSuccess">
                  <i class="fas fa-plus"></i> Agregar Registro 
                </button>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include('modal-error.php');
include('modal-success.php');
?>