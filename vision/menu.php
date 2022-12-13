<?php
$page='';
if(isset($_REQUEST['page']) && $_REQUEST['page']!=''){
	$page=trim($_REQUEST['page']);  
}
/*
$activeIndex='';
$activeaboutUs='';
$activeServices='';
$activeGallery='';
$activeBlog='';
$activeContact_us='';


if($page=='aboutUs'){
	$activeaboutUs="#51be78";
}elseif($page=='services'){
	$activeServices="#51be78";
}elseif($page=='gallery'){
	$activeGallery="#51be78";
}elseif($page=='team'){
	$team="#51be78";
}elseif($page=='blog'){
	$activeBlog="#51be78";
}elseif($page=='contact_us'){
	$activeContact_us="#51be78";
}else{
	$activeIndex="#51be78";
} 
*/
?>
<style>
@media only screen and (max-width: 600px) {
  #logoId {
    width: 70px;
	height: 50px;
  }
}
</style>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            
				
			<div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--  <a class="navbar-brand page-scroll" href="#page-top">Vision</a> -->
				
				
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-2">
							<a href="http://www.visionwebinfotech.com/">
							<img id="logoId" src="images/logos/vwi.png" alt="" width="108px" height="85px">
							</a>
						</div>
					</div>
			
				
						
						
						
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=home">Feature</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=aboutUs">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=pricing">Pricing</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=aboutUs-news">Latest News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=testimonial">Testimonials</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=ourClient">Partner</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="?page=contactUs">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    