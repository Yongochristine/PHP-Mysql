<?php
//this program will thriw an error for any control submitted without data

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr="name is a required field";
        echo $nameErr;
    }
    else{
        $name=test_input($_POST["name"]);
        echo $name."<br/>";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $emailErr="email is a required field";
    }
    else{
        $email=test_input($_POST["email"]);
        echo $email."<br/>";
    }
}
if($_SERVER["REQUST_METHOD"]=="POST"){
    if(empty($_POST["website"])){
        echo "website is a required field";
        echo $website."<br/>";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["gender"])){
        echo "genderis a required field";
    }
    else{
        $gender=test_input($_POST["gender"]);
        echo $gender."<br/>";
    }
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>