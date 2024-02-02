<?php
$conn = mysqli_connect('localhost','root','','shopifydb');
if(!$conn){
    mysqli_connect_error($conn);
}
?>