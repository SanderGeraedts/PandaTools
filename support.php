<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 29/10/2015
 * Time: 21:20
 */ ?>


<!DOCTYPE html>

<html>
<head>
    <title>Code Panda</title>
    <link href="assets/css/style.css" rel = stylesheet />
    <link href="#" rel="shortcut icon">
    <meta name="description" content="Code Panda, webdevelopment en design met een persoonlijke touch. Actief in de regio Best en Eindhoven, maar natuurlijk ook daarbuiten.">
    <meta name="author" content="Code Panda - www.codepanda.nl">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
</head>
<body>
<header>
    <div class= "wrapper">
        <div class="logo">
            Panda Tools
            <button id="hamburger" onclick="toggleNavPanel('navigation')"><img src="assets/img/hamburger.png" alt="Menu button"/></button>
        </div>
        <nav id="navigation">
            <ul>
                <li><a href="index.php">Projects</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="billing.php">Billing</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="wrapper">
    <select id="filter">
        <option>No Filter</option>
        <option>Codepanda.nl</option>
        <option>VVNBest.nl</option>
        <option>Zorg-Cafe.nl</option>
    </select>
    <section class="supportTicket">
        <a class="title" href="#">Can't sent error messages</a>
        <img id="cbCodepanda1" src="assets/img/cbUnchecked.png" alt="checkbox - unchecked" onclick="toggleCheckbox(this.id)">
        <a class="subpage" href="#">www.codepanda.nl/support</a>
        <p class="description">
            This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci.
        </p>
    </section>
    <section class="supportTicket">
        <a class="title" href="#">Can't sent error messages</a>
        <img id="cbCodepanda2" src="assets/img/cbUnchecked.png" alt="checkbox - unchecked" onclick="toggleCheckbox(this.id)">
        <a class="subpage" href="#">www.codepanda.nl/support</a>
        <p class="description">
            This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci.
        </p>
    </section>
    <section class="supportTicket">
        <a class="title" href="#">Can't sent error messages</a>
        <img id="cbCodepanda3" src="assets/img/cbUnchecked.png" alt="checkbox - unchecked" onclick="toggleCheckbox(this.id)">
        <a class="subpage" href="#">www.codepanda.nl/support</a>
        <p class="description">
            This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci.
        </p>
    </section>
</div>
<script src="assets/js/responsive.js"></script>
</body>
</html>
