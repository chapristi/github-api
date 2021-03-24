<?php
use App\github
  
try{
    $ClassGithub = new github("repos/chapristi/projet-front-end-mentor");
    $FunctionRequest = $ClassGithub -> request();

}catch(CurlException $e){
    echo $e -> getMessage();
}
  
?>
           
       
<p class="stars-github"><?= request($FunctionRequest['stargazers_count'])?></p>
       

    


