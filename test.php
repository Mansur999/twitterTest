<?php
include_once "includes/functions.php";

$id = $_GET['id'];

// if($id<1){
//     echo "Меньше 1";
//     die;
// }
// if(!is_numeric($id)){
//     echo "Не число";
//     die;
// }
// if(is_int($id)){
//     echo "не инт";
//     die;
// }
var_dump($_GET['id']);
if(is_numeric($id)){
    echo "инт";
} else{
    echo "не инт";
}