<?php
    class HomeController{
        function Home(){

//            dbModel::insert("comments",["id" => "20","post_id" => "20","body" => "manman","created_at" => "now()","updated_at" => "now()"])->get();
//            dbModel::update("comments",["id" => "20","post_id" => "20","body" => "m","created_at" => "now()","updated_at" => "now()"])->where("id","20")->get();
//            $post = dbModel::select("comments")->where("id","20")->get();
//            dbModel::delete("comments")->where("id","20")->get();

//            commentModel::insert(["id" => "21","post_id" => "21","body" => "manman","created_at" => "now()","updated_at" => "now()"])->get();
//            commentModel::update(["body" => "kiarash"])->where("id","21")->get();
//            $post = commentModel::select()->where("id","21")->get();
//            commentModel::delete()->where("id","21")->get();

//            print_r($post["body"]);


            return viwe("arvan.php");
        }
        function profile(){
            return viwe("profile.html");
        }
    }
