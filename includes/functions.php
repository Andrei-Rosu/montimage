<?php
// Force the user to log in or redirect to login page
function ForceLogin(){
    if (isset($_SESSION['user_id'])){

    }else{
        header("Location: login.php"); exit;
    }
}

function ForceIndex(){
    if (isset($_SESSION['user_id'])){
        header("Location: index.php"); exit;
    }else{

    }

}
function skip_accents( $str, $charset='utf-8' ) {

    $str = htmlentities( $str, ENT_NOQUOTES, $charset );

    $str = preg_replace( '#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str );
    $str = preg_replace( '#&([A-za-z]{2})(?:lig);#', '\1', $str );
    $str = preg_replace( '#&[^;]+;#', '', $str );

    return $str;
}