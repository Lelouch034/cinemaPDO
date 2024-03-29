<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css">
    <link rel="shortcut icon" href="../public/img/icons8-film-projector-48.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit.min.js" integrity="sha512-OZ9Sq7ecGckkqgxa8t/415BRNoz2GIInOsu8Qjj99r9IlBCq2XJlm9T9z//D4W1lrl+xCdXzq0EYfMo8DZJ+KA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js" integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw==" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&family=VT323&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="C:\laragon\www\Cinema-PDO\public\css\style.css">
    <!-- <script src="app/script.js"></script> -->
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <nav class="navbar">
             <a href="index.php" class="logo">Guān dēng</a>
             <div class="nav-links">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="films.php">TOUS LES FILMS</a></li>
                    <?php
                        if(isset($_SESSION["usersuid"])) {
                            echo '<li><a href="profil.php">Profile</a></li>';
                            echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
                        }else {
                            echo '<li><a href="login.php"">LOG-IN</a></li>';
                            echo '<li><a href="signup.php">SIGNUP</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <img src="public/images/menu-btn.png" class="menu-hamburger" alt="">

                <div uk-navbar>

                    <div class="">

                        <ul class="">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="index.php?action=listFilms">Films</a>
                            </li>
                        </ul>

                    </div>

    </header>
    <main>
        <?= $content ?>
    </main>
    <footer class="">
        <small>2023 &copy; Cinema - Cinema by </small>
    </footer>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")
 
        menuHamburger.addEventListener('click',()=>{
            navLinks.classList.toggle('mobile-menu')
        })
    </script>
</body>

</html>