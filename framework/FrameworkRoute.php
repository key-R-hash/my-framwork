<?php
    class FrameworkRoute{
        function __construct()
        {
            if(isset( $_REQUEST["route"])){
                $route = $_REQUEST["route"];

                $routelist = include "routes.php";
                $classMethod = $routelist[$route];

                if (is_array($classMethod) == false){
                    $routeExploded = explode("@",$classMethod);
                    $class = $routeExploded[0];
                    $method = $routeExploded[1];
                    $newClass = new $class();
                    $newClass -> $method();
                }
                elseif (is_array($classMethod) == true){
                    if($classMethod['method']){
                        if ($classMethod['middleware']){
                            if (preg_match("/Middleware/",$classMethod['middleware'])){
                                $route = $classMethod['middleware'];
                                new $route();
                            }else{
                                $p = $classMethod['middleware'];
                                $kernel = include 'kernel.php';
                                new $kernel[$p];
                            };
                        }
                        $routeExploded = explode("@",$classMethod['method']);

                        $class = $routeExploded[0];
                        $method = $routeExploded[1];
                        $newClass = new $class();
                        $newClass -> $method();
                       }

                }
            }
        }
    }
