<?php
include("./config/index.php");
$page = isset($_GET['q']) ? $_GET['q'] : "dashboard";
$toInclude = './views/dashboard.php';
if($page != null){
    $path  = "./views/".$page.".php";
    if(file_exists($path)){
        $toInclude = $path;
    }else{
        header("Location:./errors",true);
    }
}

define("BASE_URL",'http://localhost/PHP/class-21_Complete/atova_wd_2009/');
define("CURRENT_PAGE",$page);
define('TO_INCLUDE',$toInclude);
define("ACTION_ROOT","./actions");