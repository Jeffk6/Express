<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Express | Bus type";
    $place = "../../";
    require_once ('../../assets/template/head.php'); ?>
    <link rel="stylesheet" href="../../assets/style/Choose.css">
</head>

<body>

    <?php
    require_once ("../../assets/template/header.php");
    ?>

    <section>
        <h2>Choose the suitable category for you:</h2>
        <div class="container">
            <div class="card">
                <button onclick="window.open('public' , '_self')">
                    <i class="fas fa-bus service-icon"></i>
                    <h3>Bus</h3>
                    <p>public</p>
                </button>
            </div>
            <div class="card">
                <button onclick="window.open('travel' , '_self')">
                    <i class="fas fa-bus service-icon"></i>
                    <h3>Public</h3>
                    <p>travel</p>
                </button>
            </div>

        </div>
    </section>



    <footer class="footer">
        <div class="container">
            <div>
                <p>&copy; 2024 Wasal feen. All rights reserved.</p>
                <span>
                    <a href="#">Privacy Policy</a> |
                    <a href="#">Terms of Service</a>
                </span>
            </div>
            <div>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        // Go back function
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>