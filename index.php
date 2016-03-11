<?php

//dev add!
//add!!!
//dev add!222!
// This is master
// This is master2!

/*
 * This is Bug Fix!	
 */

 require "youku.class.php";
 $url = "http://v.youku.com/v_show/id_XMTM0MDIwNjkyMA==.html";
 $data = Youku::parse($url);
 print_r($data);

?>