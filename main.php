  <?php 
use App\github

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
       

    


