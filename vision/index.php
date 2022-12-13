<?php
include('header.php');
include('menu.php');
include('slider.php');
/*
include('about_us.php');
include('services.php');
include('gallery.php');
include('blog.php');
include('contact_us.php');
*/


$page='';
if(isset($_REQUEST['page']) && $_REQUEST['page']!=''){
	$page=trim($_REQUEST['page']);  
}
if($page!=''){
	include $page.'.php';
}else{
	include 'home.php';
}   

include('footer.php');

?>