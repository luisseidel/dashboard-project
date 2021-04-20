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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>

    <header class="container">
        <nav class="mobile-menu">
            <li class="haburger-menu">
                <button onclick="openMenu()">
                    <span class="material-icons md-24">face</span>
                </button>
            </li>

            <li>
                <h1>logo</h1>
            </li>

            <li></li>
        </nav>

        <nav id="sideNav" class="sidenav">
            <li class="close-container">
                <button onclick="closeMenu()">
                    <i class="fas fa-times fa-lg"></i>
                </button>
            </li>
            <li>
                <a href="#">
                    <i class="far fa-id-card"></i>
                    <p>Profile</p>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-briefcase"></i>
                    <p>Porfolio</p>
                </a>
            </li>

        </nav>

    </header>