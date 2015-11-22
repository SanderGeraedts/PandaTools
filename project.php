<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 07/11/2015
 * Time: 17:16
 */



?>

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
<body onload="checkHoursSpent('hrsSpent', 'hrsAllocated')">
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
            <li><a href="#">Add Sprint</a></li>
        </ul>
        <ul>
            <li><a href="#">Add Contact</a></li>
        </ul>
        <ul>
            <li><a href="#">View Invoices</a></li>
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
            <tr>
                <td>Jan Geraedts</td>
                <td><a href="mailto:jcjg.geraedts@kpnmail.nl?Subject=Code%20Panda">jcjg.geraedts@kpnmail.nl</a></td>
                <td>Secretaris</td>
            </tr>
        </tbody>
    </table>
    <section class="sprint">
        <a href="#">Sprint 1</a>
        <b>Time spent / allocated:</b> <span class="hrsSpent">37.5</span> / <span class="hrsAllocated">40</span> hrs
        <b>Description:</b> <span class="sprintDescription">This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci. Phasellus laoreet lacus in sem vulputate suscipit. Sed nec nunc ante. Duis hendrerit augue nec orci consequat hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non magna vitae nunc blandit auctor at a justo. Maecenas et nisi ut diam euismod porta. Integer id turpis non elit vehicula scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
    </section>
    <section class="sprint">
        <a href="#">Sprint 2</a>
        <b>Time spent / allocated:</b> <span class="hrsSpent">47.5</span> / <span class="hrsAllocated">40</span> hrs
        <b>Description:</b> <span class="sprintDescription">This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci. Phasellus laoreet lacus in sem vulputate suscipit. Sed nec nunc ante. Duis hendrerit augue nec orci consequat hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non magna vitae nunc blandit auctor at a justo. Maecenas et nisi ut diam euismod porta. Integer id turpis non elit vehicula scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
    </section>
    <section class="sprint">
        <a href="#">Sprint 3</a>
        <b>Time spent / allocated:</b> <span class="hrsSpent">37.5</span> / <span class="hrsAllocated">-40</span> hrs
        <b>Description:</b> <span class="sprintDescription">This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci. Phasellus laoreet lacus in sem vulputate suscipit. Sed nec nunc ante. Duis hendrerit augue nec orci consequat hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non magna vitae nunc blandit auctor at a justo. Maecenas et nisi ut diam euismod porta. Integer id turpis non elit vehicula scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
    </section>
    <section class="sprint">
        <a href="#">Sprint 4</a>
        <b>Time spent / allocated:</b> <span class="hrsSpent">-37.5</span> / <span class="hrsAllocated">-40</span> hrs
        <b>Description:</b> <span class="sprintDescription">This is the first sprint of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa dolor, fringilla vitae diam et, sollicitudin ornare orci. Phasellus laoreet lacus in sem vulputate suscipit. Sed nec nunc ante. Duis hendrerit augue nec orci consequat hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non magna vitae nunc blandit auctor at a justo. Maecenas et nisi ut diam euismod porta. Integer id turpis non elit vehicula scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
    </section>
</div>
<script src="assets\js\responsive.js"></script>
<script src="assets\js\errorhandling.js"></script>
</body>
</html>
