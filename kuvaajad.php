<?php
    //rakenduse põhifail, mida avame url-is

    //algatame sessiooni
    session_start();

    require('model.php');

    require('controller.php');

    $result = false;
    if ( !empty($_SERVER['REMOTE_ADDR']) ) {
	    $ip = $_SERVER['REMOTE_ADDR'];
	    $result = controller_add($ip);
    }

    require('view.php');

    mysqli_close($l);

?>
