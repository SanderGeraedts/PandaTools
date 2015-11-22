<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 06/11/2015
 * Time: 17:40
 */ ?>

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
<body>
<header>
    <div class= "wrapper">
        <div class="logo">
            Panda Tools
        </div>
    </div>
</header>
<div class="wrapper">
    <form id="login" >
        <main id="mainLogin">
            <span id="error">Your credentials are incorrect.</span>
            <label for="tbUsername">Username:</label><br />
            <input id="tbUsername" type="text" name="tbUsername" placeholder="Username"><br />
            <label for="tbPassword">Password:</label><br />
            <input id="tbPassword" type="password" name="tbPassword" placeholder="Password"><br />
            <input name="btnLogin" type="submit" value="Log in" onclick=showError('error')>
        </main>
    </form>
</div>
<script src="assets\js\errorhandling.js"></script>
</body>
</html>
