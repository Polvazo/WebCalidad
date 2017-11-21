<?php
    session_start();
    if ($_SESSION["id"]==session_id()) {
    	function callWebService(){
    	  $url ='https://afternoon-springs-88209.herokuapp.com/api/libros';
    	  $json = file_get_contents($url);
    	  $array = json_decode($json,true);
    	  return $array;
    	}
    	$array=callWebService();
	}
    else{
        session_destroy();
        header('Location: index.php');
    }
?>
    
