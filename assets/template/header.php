<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Brand logo -->
            <a class="navbar-brand" href="http://express2024.unaux.com">
                <?php echo '<img src="' . htmlspecialchars($place) . 'assets/image/LOGO.png" alt="Express">'; ?>
            </a>
            
            <!-- Navbar toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar links and dropdowns -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://express2024.unaux.com"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://express2024.unaux.com/about.php"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://express2024.unaux.com/contact.php"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="http://express2024.unaux.com/authentication/login.php"><i class="fas fa-user"></i> Login/Register</a></li>
                            <li><a class="dropdown-item" href="http://express2024.unaux.com/chat.php"><i class="fas fa-robot"></i> Chat bot</a></li>
                            <li><a class="dropdown-item" href="http://express2024.unaux.com#appointments"><i class="far fa-clock"></i> Appointments</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- User authentication and Language Flags -->
                <ul class="navbar-nav ms-auto">
                    <?php if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false): ?>
                        <li class="nav-item"><a class="nav-link" href="http://express2024.unaux.com/authentication/">Login</a></li>
                    <?php else: ?>
                        <li class="nav-item">
                            <!-- User info if logged in, can include username or profile picture -->
                            <p class="nav-link">Welcome, User</p> 
                        </li>
                        <li class="nav-item">
                            <img src="path_to_profile_picture" alt="User Profile Picture" class="rounded-circle" style="width: 30px; height: 30px;">
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
