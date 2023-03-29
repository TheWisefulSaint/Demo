<?php

// put your code here
$errorMessage = "";

if (empty($_POST["name"])) {
    $errorMessage .= "Name field is required to fill in <br/>";
}

if (!preg_match("/^[a-zA-Z ]+$/", $_POST["name"])) {
    $errorMessage .= "Only letter and white space is allowed for name <br/>";
}

if (empty($_POST["mobile"])) {
    $errorMessage .= "Mobile field is required to fill in <br/>";
}

if(!preg_match("/^[0-9]+$/", $_POST["mobile"])){
    $errorMessage .= "Mobile phone can only have digit <br/>";
}

if (empty($_POST["gender"])) {
    $errorMessage .= "Gender field is required to fill in <br/>";
}

//can use strcmp()
//or == ""
if (empty($errorMessage)) {
    echo "<h1> Registration Successful! </h1>";

    if ($_POST["gender"] == "m") {
        echo "Mr " . $_POST["name"] . "<br/>";
    } else {
        echo "Ms " . $_POST["name"] . "<br/>";
    }

    echo "Mobile Number: " . $_POST["mobile"] . "<br/>";
} else {
    echo $errorMessage;
}

//Additional de
//if(preg_match("/^[a-zA-Z ] + $/", $name))
?>

