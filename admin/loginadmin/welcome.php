<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../assets/css/admin.css">
        <link rel="shortcut icon" type="image" href="../../assets/img/sayyid.png">
        <!-- <link rel="shortcut icon" type="image" href="../assets/img/logo.png"> -->
        <title>sayyidusy | Admin </title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="../assets/img/logo.png" alt="" class="header__img">

                <a href="#" class="header__logo">sayyidusy</a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                     <!--========== SIDE BAR ==========-->
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">sayyidusy</span>
                    </a>
                     <!--========== SIDE BAR ==========-->
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Admin</h3>
    
                              <!--========== HOME ==========-->
                            <div class="nav__dropdown">
                                <a  class="nav__link active">
                                    <i class='bx bx-home nav__icon' ></i>
                                    <span class="nav__name">Home</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="../../index.php" class="nav__dropdown-item">Halaman Website</a>
                                      
                                    </div>
                                </div>
                            </div>
                          
                              <!--========== PROFILE ==========-->
                            <!-- <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="subadmin/useradmin.php" class="nav__dropdown-item">Admin</a>
                                        <a href="" class="nav__dropdown-item">Investor</a>
                                        <a href="subadmin/usermitra.php" class="nav__dropdown-item">Mitra</a>
                                    </div>
                                </div>
                            </div> -->

                              <!--========== MESSAGES ==========-->

                            <a href="subadmin/kontak.php" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Messages</span>
                            </a>
                        </div>
    
                          <!--========== MENU ==========-->
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                              <!--========== NOTIFICATIONS ==========-->
                            <!-- <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Notifications</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                
                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Update</a>
                                        <a href="#" class="nav__dropdown-item">Mitra</a>
                                        <a href="#" class="nav__dropdown-item">Investor</a>
                                        <a href="#" class="nav__dropdown-item">Guest</a>

                                    </div>
                                </div>

                            </div> -->
                              <!--========== explore ==========-->
                            <!-- <a href="#" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">Explore</span>
                            </a> -->

                              <!--========== SAVED ==========-->
                            <!-- <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Saved</span>
                            </a>
                        </div>
                    </div>
                </div> -->

                  <!--========== LOG OUT ==========-->

                <a href="logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <?php echo "<h1>Halo Admin " . $_SESSION['username'] . "!</h1>"; ?>
                <p>Halaman Admin sayyidusy</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt vel illum fuga unde cum, voluptates magni molestias eveniet culpa autem ut, totam veniam, suscipit tempore ullam pariatur est at asperiores?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt vel illum fuga unde cum, voluptates magni molestias eveniet culpa autem ut, totam veniam, suscipit tempore ullam pariatur est at asperiores?</p>
            </section>
        </main>

        <!--========== MAIN JS ==========-->
        <script src="../assets/js/main.js"></script>
    </body>
</html>