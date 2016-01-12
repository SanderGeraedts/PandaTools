<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 07/11/2015
 * Time: 17:16
 */
session_start();
ob_start();

require_once('views/viewProject.php');

$view = new PandaViews\viewProject();
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
    <nav id="tools">
        <ul>
            <li><a href="addSprint.php?project=<?php $view->getProjectId() ?>">Add Sprint</a></li>
        </ul>
        <ul>
            <li><a href="addContact.php?project=<?php $view->getProjectId() ?>">Add Contact</a></li>
        </ul>
        <ul>
            <li><a href="billing.php?project=<?php $view->getProjectId() ?>">View Invoices</a></li>
        </ul>
    </nav>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody>
            <?php $view->loadContacts() ?>
        </tbody>
    </table>
    <?php $view->loadSprints(); ?>
</div>
<script src="assets/js/responsive.js"></script>
<script src="assets/js/errorhandling.js"></script>
</body>
</html>
