<?php 

class connection{
    

    public static function make(){

        try{
           $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');

        }catch(PDOException $e){
            die('Could not to connect.');
        }
    }


}