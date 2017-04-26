<?php
/**
 * Crea las clases que creas necesarias para hacer el trabajo.
 * Ten en cuenta que el archivo `users.csv`
 */
$db = require __DIR__.'/db.php';

//Include files
require __DIR__.'/module/User/src/UserController.php'
require __DIR__.'/module/User/src/User.php'

//Read list of Users