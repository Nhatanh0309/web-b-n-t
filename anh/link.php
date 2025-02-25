<?php
if(isset($_GET['goto'])){
    switch($_GET['goto']){
        case "home":
            include('slide.php');
            include("home.php");
            break;
        case "user":
            include("user.php");
            break;
        case "detailproduct":
            include("detailproduct.php");
            break;
            include('slide.php');
        case "product":
            include('slide.php');
            include("product.php");
            break;
        case "logout":
            include("logout.php");
            break;
        case "result":
            include("result.php");
            break;
        case "blog":
            include("blog.php");
            break;
        case "lienhe":
            include("lienhe.php");
            break;
        case "detaihd":
            include("detaihd.php");
            break;
        case "cart":
            include("cart.php");
            break;
        case "addcart":
            include("addcart.php");
            break;
        case "detaiblog":
            include("detaiblog.php");
            break;
        default:
        include('slide.php');
        include("home.php");
    }
}else{
    include('slide.php');
    include("home.php");
}
?>