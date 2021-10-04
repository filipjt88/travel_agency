  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <h2 class="text-success animate__animated animate__backInLeft" href="index.php" style="font-family: 'Stick No Bills', sans-serif;">TRAVEL AGENCY</h2>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="user/home.php#header">HOME <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="user/home.php#about">ABOUT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="user/home.php#intro">INTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="user/home.php#services">NEW DESTINATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="user/home.php#projects">OTHER OFFERS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="user/home.php#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll text-success disabled" href="#"><i class="fas fa-user"></i> <?php echo $user["first_name"]; ?></a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com" target="_blank">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.twitter.com" target="_blank">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.instagram.com" target="_blank">
                        <span class="hexagon"></span>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->
    <body data-spy="scroll" data-target=".fixed-top">
    