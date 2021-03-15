<?php
class github{
    public $link;
    public function __construct($link){
        $this->link = $link;
    }    
    /**
     * request to api from Github my stars of my project front-end-mentor.
     *
     * @return array or null if the result is bul  or in format Json.
     * 
     */
    public function request():array
    {
        try{
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.github.com/" . $this -> link,
            CURLOPT_HTTPHEADER => [
                'Content-Type: text/plain',
                'User-Agent: Louis',
               
               ' X-RateLimit-Limit: 10000',
               "Authorization: Bearer token "
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0.5,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            )
        );
        }catch(Exception $e){
            echo "la connection est impossible "  .  $e->getMessage();
            }

        $response = curl_exec($curl);
        $result =  json_decode($response,true);
        return $result;
    }

    /*
    public function GetLink(){

    }
    */
}
?>
