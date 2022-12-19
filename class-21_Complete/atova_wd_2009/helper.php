<?php
class Helper{
    
    public static function setMenuActive($param){
        $splitCurrentUrl = explode("/",CURRENT_PAGE);
        if($param == $splitCurrentUrl[0]){
            return "active";
        }
        else{
            return null;
        }
    }
}