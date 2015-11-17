<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 16/11/2015
 * Time: 12:29
 */?>


<!DOCTYPE html>

<html>
<head>
    <title>Code Panda</title>
    <link href="assets\css\style.css" rel = stylesheet />
    <link href="#" rel="shortcut icon">
    <meta name="description" content="Code Panda, webdevelopment en design met een persoonlijke touch. Actief in de regio Best en Eindhoven, maar natuurlijk ook daarbuiten.">
    <meta name="author" content="Code Panda - www.codepanda.nl">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
</head>
<body onload="checkDueDate('invoice')">
<header>
    <div class= "wrapper">
        <div class="logo">
            Panda Tools
            <button id="hamburger" onclick="toggleNavPanel('navigation')"><img src="assets\img\hamburger.png" alt="Menu button"/></button>
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
    <nav id="tools">
        <ul>
            <li><a href="#">New invoice</a></li>
        </ul>
    </nav>
    <select id="filter" onchange="filterPaid(this.id, 'invoice')">
        <option>No Filter</option>
        <option>Paid</option>
        <option>Unpaid</option>
    </select>
    <section class="invoice">
        <a class="title" href="#">Invoice 1</a>
        <img id="cbCodepanda1" src="assets\img\cbUnchecked.png" alt="checkbox - unchecked" onclick="toggleCheckbox(this.id); filterPaid('filter', 'invoice');">
        <b>Date sent: </b><span id="dateSent1" class="dateSent">16/11/2015</span>
        <b>Days until due: </b><span id="daysDue1" class="daysDue">26/11/2015</span>
        <p id="invoice1" class="description" onclick="readDescription(this.id)">
            This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci.
        </p>
        <span id="price1" class="price">$60,00</span>
    </section>
    <section class="invoice">
        <a class="title" href="#">Invoice 2</a>
        <img id="cbCodepanda2" src="assets\img\cbUnchecked.png" alt="checkbox - unchecked" onclick="toggleCheckbox(this.id); filterPaid('filter', 'invoice');">
        <b>Date sent: </b><span id="dateSent2" class="dateSent">16/11/2015</span>
        <b>Days until due: </b><span id="daysDue2" class="daysDue">06/11/2015</span>
        <p id="invoice2" class="description" onclick="readDescription(this.id)">
            This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci.
        </p>
        <span id="price2" class="price">$60,00</span>
    </section>
    <section class="invoice">
        <a class="title" href="#">Invoice 3</a>
        <img id="cbCodepanda3" src="assets\img\cbUnchecked.png" alt="checkbox - unchecked" onclick="toggleCheckbox(this.id); filterPaid('filter', 'invoice');">
        <b>Date sent: </b><span id="dateSent3" class="dateSent">16/11/2015</span>
        <b>Days until due: </b><span id="daysDue3" class="daysDue">26/12/2015</span>
        <p id="invoice3" class="description" onclick="readDescription(this.id)">
            This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci.
        </p>
        <span id="price3" class="price">$60,00</span>
    </section>
</div>
<script src="assets\js\responsive.js"></script>
<script src="assets\js\filters.js"></script>
<script src="assets\js\errorhandling.js"></script>
</body>
</html>