<?php

namespace App\Route;

class Route
{

    public static function index()
    {
        
        echo "redirecionamento index";
    }

    public static function file($file)
    {
        
       
        $arquivo = "app/view/".$file;
        
        if(file_exists($arquivo)){
           
            include "../mvc/app/View/".$file."/index.php";

        }else{
            echo "erro 404";
        }

    }
    
    public static function pages($file,$paginas)
    {
        $arquivo = "app/view/".$file."/".$paginas;
        
        if(file_exists($arquivo)){
           
            include "../mvc/app/View/".$file."/".$paginas;

        }else{
            echo "erro 404";
        }
        
    }
}
