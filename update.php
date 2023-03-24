<?php
session_start();
$title ="Modifier un étudiant";

// capture du html
ob_start();
include('views/studentPage/updateStudent.php');

// capture et stock dans le $content
$content = ob_get_clean();
require('views/layout.php');