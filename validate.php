<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name1=test_input($_post["name"]);
    $email=test_input($_post["email"]);
    $website=test_input($_post["website"]);
    $comment=test_input($_post["comment"]);
    $gender=test_input($_post["gender"]);
}
echo $name1."<br/>".$email."<br/>".$website."<br/>".$comment."<br/>".$gender;
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>