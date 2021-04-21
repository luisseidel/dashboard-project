<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Template project for php projects">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Luis Guilherme Seidel">
    <meta name="copyright" content="© <?= date("Y")?> Luis Guilherme Seidel" />
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="15 days" />

    <link rel="stylesheet" href="public/css/reset.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body class="flex-container">

    <header>

        <div id="openMenu" class="openMenu">
            <a onclick="openMenu()">
                <span class="material-icons">menu</span>
            </a>
        </div>
        <nav id="sideNav" class="sidenav">
            <div class="sidenav-body sidenav-container">
                <div class="menu-header">
                    <a onclick="closeMenu()">
                        <span class="material-icons">close</span>
                    </a>
                </div>

                <div class="menu-body">
                    <div class="menu-item">
                        <a class="menu-item-header" onclick="dropDown(this)">
                            <span class="material-icons">create</span>
                            <span>Cadastros</span>
                            <span class="material-icons seta-down">expand_more</span>
                        </a>

                        <div class="menu-item-body close-item">
                            <a href="App/View/pages/pessoas.php"><span class="material-icons">person</span>Pessoas</a>
                            <a href="App/View/pages/pessoas.php"><span class="material-icons">group</span>Tipo Pessoa</a>
                            <a href="App/View/pages/pessoas.php"><span class="material-icons">flag</span>Países</a>
                            <a href="App/View/pages/pessoas.php"><span class="material-icons">location_city</span>Estados</a>
                            <a href="App/View/pages/pessoas.php"><span class="material-icons">apartment</span>Cidades</a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="sidenav-footer sidenav-container">
                <div class="social-icon">
                    <a href="https://github.com/luisseidel" target="_blank">
                        <img src="public/icons/github-white.svg">
                    </a>
                </div>
                <div class="social-icon">
                    <a href="https://api.whatsapp.com/send?phone=5551997772989&text=Ol%C3%A1%2C%20tudo%20bem%3F" target="_blank">
                        <img src="public/icons/whatsapp-white.svg">
                    </a>
                </div>
                <div class="social-icon">
                    <a href="https://www.instagram.com/luisgseidel/" target="_blank">
                        <img src="public/icons/instagram-white.svg">
                    </a>
                </div>
                <div class="social-icon">
                    <a href="https://www.linkedin.com/in/luis-seidel/" target="_blank">
                        <img src="public/icons/linkedin-white.svg">
                    </a>
                </div>
                <div class="social-icon">
                    <a href="https://www.facebook.com/guilhermeseidel" target="_blank">
                        <img src="public/icons/facebook-white.svg">
                    </a>
                </div>
            </div>
        </nav>

    </header>