<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tugas RWD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <?php
             include_once 'header.php' ;
             include_once 'menu.php' ;
            ?>
        <br />
        <div class="row">
            <?php include_once 'main.php'; ?>
            <?php include_once 'sidebar.php'; ?>
        </div>
        <br />
        <?php include_once 'footer.php'; ?>
        <script src=" js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </div>
</body>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>