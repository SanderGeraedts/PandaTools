<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 17/11/2015
 * Time: 10:09
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
    <form id="formInvoice">
        <input type="checkbox" id="cbSent" name="cbSent" value="AlreadySent" onchange="checkSentDate(this.id, 'dpDateSent', 'lblDateSent')"><label for="cbSent">Invoice already sent</label>
        <label id="lblDateSent" for="dpDateSent">Date sent:</label><br />
        <input id="dpDateSent" type="date" name="dpDateSent">
        <label for="dpDueDate">Due date:</label><br />
        <input id="dpDueDate" type="date" name="dpDueDate"><br />
        <label for="selProject">Project:</label><br />
        <select id="selProject">
            <option>Codepanda.nl</option>
            <option>VVNBest.nl</option>
            <option>PC-Amitie.nl</option>
        </select>
        <label for="selContact">Contact:</label><br />
        <select id="selContact">
            <option>Rik Willemsen (voorzitter@vvnbest.nl)</option>
            <option>Sander Geraedts (info@codepanda.nl)</option>
            <option>Hans Nillisen (info@pc-amitie.nl)</option>
        </select>
        <label for="tbName">Name:</label><br />
        <input id="tbName" type="text" name="tbName" placeholder="Name"><br />
        <label for="numPrice">Price:</label><br />
        <input id="numPrice"type=number step=0.01 placeholder="&#8364;100.00"/><br />
        <label for="tbDescription">Description:</label><br />
        <textarea row="10" id="tbDescription" name="tbDescription" placeholder="Description"></textarea><br />
        <input name="btnSubmit" type="submit" value="Send invoice">
    </form>
</div>
<script src="assets/js/responsive.js"></script>
<script src="assets/js/errorhandling.js"></script>
</body>
</html>
