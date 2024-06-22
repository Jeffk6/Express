<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Express | Track";
    $place = "./";
    require_once 'assets/template/head.php';
    ?>
    <link rel="stylesheet" href="assets/style/home.css">
    <link rel="stylesheet" href="assets/style/track.css">
</head>

<body>
    <?php require_once "assets/template/header.php"; ?>

    <section>
        <div class="container">
            <h1>Tracking <?php echo isset($_GET['type']) ? htmlspecialchars($_GET['type']) : "Unknown Type"; ?></h1>
            <p>Id = <?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : "Unknown ID"; ?></p>
            <div class="iframe">
                <iframe src="https://www.google.com/maps/" frameborder="0" style="width: 100%; height: 450px;"></iframe>
            </div>
        </div>
    </section>
    
    <?php require_once "assets/template/footer.html"; ?>

    <script src="assets/script/Tracking.js"></script>
</body>

</html>
