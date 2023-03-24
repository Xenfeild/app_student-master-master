<?php

function title($title)
    {
    echo "{$title}";
    }


function debug_array($arr) 
    {
        
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    }

// affiche les messages d'errur
function errorMsg($name) 
{
    global $error;
    if(isset($error[$name])) {
        echo $error[$name]; 
    }
}


// sauvegarde la valeur de l'input aprés submit
function showInputValue ($name){
    if (isset($_POST[$name])) { 
    echo $_POST [$name]; 
    }
}

// fonction néttoyage de l'id

function cleanInput ($string)
{
    return trim(htmlspecialchars($string));
}

// show select vlue

function showSelectValue($name, $value) {
    if(!empty($_POST[$name]) && $_POST[$name] == $value){
        echo "selected";
    }  
}

// fonction shows radio value

function showRadioValue($name, $value = 1)
{
    if (!isset($_POST[$name]) && $value == 1) {
        echo "checked";
    } elseif (!isset($_POST[$name])) {
        echo "";
    } elseif ($_POST[$name] == $value) {
        echo "checked";
    }
}


// update select
function showUpdateSelectValue($item, $value) {
    if($item == $value){
        echo "selected";
    }  
}

function showUpdateRadioValue($item, $value)
{
    if ($item == $value) {
        echo "checked";
    }
}