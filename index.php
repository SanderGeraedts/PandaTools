<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 27/10/2015
 * Time: 14:53
 */
session_start();
ob_start();

require_once('views/viewProjects.php');

$view = new PandaViews\viewProjects();

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
                <li><a href="#">New project</a></li>
            </ul>
        </nav>
        <table id="tabProjects">
            <col class="colProject">
            <col class="colState">
            <col class="colDescription">
            <thead>
                <tr>
                    <th id="thProject">Project</th>
                    <th id="thState">State</th>
                    <th id="thDescription">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php $view->populateTable(); ?>
            </tbody>
        </table>
    </div>
    <script src="assets/js/responsive.js"></script>
</body>
</html>
