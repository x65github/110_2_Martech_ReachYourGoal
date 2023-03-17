<?php

if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "main";
}

include('header.php'); 
header("content-type:text/html;charset=utf-8");
switch($page){  
    case "main":
      include('main.php');
    break;
    case "list":
      include('list.php');
    break;
    case "hero":
      include('hero.php');
    break;
}
include('footer.php'); 
?>