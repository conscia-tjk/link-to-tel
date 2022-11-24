<?php
if(isset($_GET['tel']) && $_GET['tel'] != "")
{
    $tel = $_GET['tel'];
    header("Location: tel://$tel");
}
die();
?>
