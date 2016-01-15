<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 12/01/2016
 * Time: 19:28
 */

session_start();
ob_start();

require('views/viewAddProject.php');

use PandaViews\viewAddProject;

$view = new viewAddProject();

$view->addProject();

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
    <form id="formProject" method="post" action="addProject.php">
        <label id="lblName" for="tbName">Name:</label><br />
        <input id="tbName" type="text" name="tbName">
        <label id="lblDescription" for="tbDescription">Description:</label><br />
        <textarea id="tbDescription" name="tbDescription" rows="4"> </textarea>
        <input name="btnContact" type="submit" value="Add Contact">
        <input name="btnSprint" type="submit" value="Add Sprint">
        <input name="btnSave" type="submit" value="Save Project">
    </form>
</div>
<script src="assets/js/responsive.js"></script>
<script src="assets/js/errorhandling.js"></script>
</body>
</html>

