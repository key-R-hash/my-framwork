<?php

class Main{
    function __construct(){
        spl_autoload_register(function($className) {
            if(preg_match("/Controller/",$className))
                include "controller/" . $className . ".php";
            if(preg_match("/Model/",$className))
                include "model/" . $className . ".php";
            if(preg_match("/Framework/",$className))
                include "framework/" . $className . ".php";
            if(preg_match("/Middleware/",$className))
                include "middleware/" . $className . ".php";

        });
        new FrameworkRoute();
    }
}
function lg(){
    $Ln = $_REQUEST['lang'];
    return $Ln;
}
function viwe($page){
    $ress = file_get_contents("view/" . $page);
    function translate($x){
        $lg = lg();
        $line = include 'framework/Lang/' . $lg . '.php';
        return($line[$x]);
    }
    include "framework/FrameworkReplace.php";
    $fp = fopen("view/" . $page,"r");
    $content = Modelreplace($fp,$ress);
    $fs = fopen(__DIR__."/overwrite/" . "overwrite" . $page,"w");

//            var_dump($content);
    fwrite($fs,$content);
    fclose($fs);
    include "overwrite/" . "overwrite" . $page;
};
$main = new Main();







