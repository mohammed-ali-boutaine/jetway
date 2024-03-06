<?php 

try{

$conn = new PDO("mysql:host=localhost;dbname=site",'root','');

}catch(PDOException $e){
    echo "Error !! " . $e->getMessage();
}
?>