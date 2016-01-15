<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 12/01/2016
 * Time: 12:12
 */
session_start();
ob_start();

require('views/viewAddContact.php');

use PandaViews\viewAddContact;

$view = new viewAddContact();

$view->addContact();
?>

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
    <form id="formContact" method="post" action="addContact.php">
        <span id="error"><?php $view->showError(); ?></span>
        <select id="selProject" name="selProject">
            <option value=1>Codepanda.nl</option>
            <option value=2>VVNBest.nl</option>
            <option value=3>PC-Amitie.nl</option>
        </select>
        <label id="lblName" for="tbName">Name:</label><br />
        <input id="tbName" type="text" name="tbName">
        <label id="lblOrganisation" for="tbOrganisation">Organisation:</label><br />
        <input id="tbOrganisation" type="text" name="tbOrganisation">
        <label id="lblAddress" for="tbAddress">Address:</label><br />
        <input id="tbAddress" type="text" name="tbAddress">
        <label id="lblPhoneNumber" for="tbPhoneNumber">PhoneNumber:</label><br />
        <input id="tbPhoneNumber" type="text" name="tbPhoneNumber">
        <label id="lblEmail" for="tbEmail">Email:</label><br />
        <input id="tbEmail" type="text" name="tbEmail">
        <label id="lblZipcode" for="tbZipcode">Zipcode:</label><br />
        <input id="tbZipcode" type="text" name="tbZipcode">
        <label id="lblCity" for="tbCity">City:</label><br />
        <input id="tbCity" type="text" name="tbCity">
        <label id="lblJob" for="tbJob">Job:</label><br />
        <input id="tbJob" type="text" name="tbJob">
        <input name="btnSubmit" type="submit" value="Add Contact">
    </form>
</div>
<script src="assets/js/responsive.js"></script>
<script src="assets/js/errorhandling.js"></script>
</body>
</html>
