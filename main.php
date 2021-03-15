
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- pour mettre une couleur au naviguateur sur telephone --> 
    <meta name="theme-color" content="#4285f4">
    <meta HTTP-EQUIV="img/1811e178fdda43abb09982e9022ce05etz7lTW7F8pOuuf6N-0-removebg.png" CONTENT="no">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="stylesheet" href="scss/main-design.css">
</head>
<body>
   <div class="naviguation naviguation-top-right">
       
            <li><a class="link link-home  " href="main.php?page=menue">Home</a></li>
            <li><a class="link link-about" href="about.php?page=about">About</a></li>
            <li><a class="link link-service" href="service.php?page=service">Service</a></li>
            <li><a class="link link-contact" href="contact.php?page=contact">Contact</a></li>

    </div> 
    <a href="main.php?page=menue"><img id="logo-chapri" height="150" width="150" src="img/chapristi-logo-.png" alt="logo boo" ></a>
    <div class="title">
    <?php require_once 'api-github.php';?>
<?php 
try{
$ClassGithub = new github("repos/chapristi/projet-front-end-mentor");
$FunctionRequest = $ClassGithub -> request();

}
catch(Exception $e){
    echo $e -> getMessage();
}
function request($request){

        echo $request;
   
}
?>
           
       
        <p class="stars-github"><?php try{ echo request($FunctionRequest['stargazers_count']);}catch(Exception $e){echo "";} ?></p>
       

    


</body>
</html>
