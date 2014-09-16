<?php
//DEFINE('BASEURL','http://maasinfotech24x7.com/greenbrook1/');
//DEFINE('BASEURL','http://localhost/greenleaves/');
//DEFINE('BASEURL','http://MyGreenbrookHome.com/');
DEFINE('BASEURL','http://Default-Environment-kju2qfji9c.elasticbeanstalk.com/');
//print_r($_GET);
?>
<html lang="en">
<head>    
<style type="text/css">
body{margin:0;
     padding:0;
	 background-position:top;}

	.lead {
  margin-bottom: 0px;
  font-size: 40px;
  line-height:0px;
  color:#4cb748;
  margin-top:15px;
}

.text-muted{margin:0px;
           padding:0px;}

.heighbour{font-size:30px;
          padding:0px;
          margin:0px !important; }

.jumbotron{float:left;
          width:100%;
		  margin:0px;
		  padding:0px;}		   
		   
.grass{float:left;
       background:url(<?=BASEURL?>images/gr_grass.png) no-repeat left top;
	   clear:both;
	   height:24px;
	   width:100%;}
	   
h4, .h4 {
	font-size: 16px;
	line-height:22px;
	color:#000;
	padding:0;
	font-weight:bold;
}

h5 {font-size:20px;
   text-transform:uppercase;
   margin:0 0 10px 0;}

h1 {
	font-size: 20px;
	line-height:0px;
	padding:0;
}	   		   

.green{color:#4cb748 !important;}


.black{color:#000;
      }
	 
.abt_green{width:100%;
           text-align:center;
		   font-family: 'Roboto-Regular';
		   font-size:25px;
		   margin-left:10%;
		   color:#000;
		   margin-top:13%;
		   line-height:30px;}
		   
		   
		   
@font-face {
  font-family: 'Roboto-Black';
  src: url('<?=BASEURL?>fonts/Roboto-Black.ttf');
  src: url('<?=BASEURL?>fonts/Roboto-Black.ttf?#iefix') format('embedded-opentype'), url('<?=BASEURL?>fonts/Roboto-Black.woff') format('woff'), url('<?=BASEURL?>fonts/Roboto-Black.ttf') format('truetype'), url('<?=BASEURL?>fonts/Roboto-Black.ttf#Roboto') format('svg');
}

@font-face {
  font-family: 'Roboto-Regular';
  src: url('<?=BASEURL?>fonts/Roboto-Regular.ttf');
  src: url('<?=BASEURL?>fonts/Roboto-Regular.ttf?#iefix') format('embedded-opentype'), url('../fonts/Roboto-Regular.woff') format('woff'), url('../fonts/Roboto-Regular.ttf') format('truetype'), url('<?=BASEURL?>fonts/Roboto-Regular.ttf#Roboto-Regular') format('svg');
}

.container {
  font-family: "Roboto-Black", sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #535353;
  background:url(<?=BASEURL?>images/bg.png) repeat center top;
}	

.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
  width:450px;
}	


.spbold{font-size:15px;}

.bold{font-weight:bold;}

.footer{font-size:12px;color:#000;margin-top:30px;}
   
	</style>
    
    

    <!-- Bootstrap core CSS -->
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/bootstrap.css" rel="stylesheet">
   -->
    

    <!-- Custom styles for this template -->
  
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container" style="padding:50px; background:url(<?=BASEURL?>images/bg.png) repeat center top;">
      <div class="header">
        
        <h3 class="text-muted"><img src="<?=BASEURL?>images/logo.png"  title="Green Brook" alt="Green Brook"/></h3>
      </div>

      <div class="jumbotron">
        <h1>You are registered for the</h1>
        <p class="lead"><img src="<?=BASEURL?>images/mail_extreme.png" /></p>
        <h2 class="heighbour">Open House</h2>
        <h1>Monday, 9/15/2014, 6-9 PM</h1>
      </div>

      <div class="row marketing">
        <div class="col-lg-7 black">
        
          <img src="<?=BASEURL?>images/mail_home.png" />
        
<ul>
  <li> <h4>Learn about Greenbrook’s <span class="green" style="color:#4cb748">$1,000</span> Refer-A-Neighbor Program   </h4></li>
<li><h4>Tour and grade the completely renovated home</h4></li>
<li><h4>Light refreshments served</h4></li>
</ul>

          <div class="grass"><img src="<?=BASEURL?>images/gr_grass.png"></div>
          <h5 class="green" style="color:#4cb748">RESERVATION FOR:</h5>
         <span class="bold"> <b>First Name:</b></span> <?=@ucfirst($_GET['fname'])?><br />
<span class="bold"><b>Last Name:</b></span> <?=@ucfirst($_GET['lname'])?><br />
<span class="bold"><b>Email:</b></span> <?=$_GET['emailid']?><br />
<span class="bold"><b>Guests:</b></span><?=$_GET['attending']?><br />
<span class="bold"><b>Newsletter:</b></span><?=isset($_GET['emailme'])?ucfirst($_GET['emailme']):"No"?><br />
           <div class="grass" ><img src="<?=BASEURL?>images/gr_grass.png"></div>
          
          <h5 class="green" style="color:#4cb748">About Greenbrook</h5>
          <span class="spbold bold" style="font-weight:bold">Greenbrook restores homes in great neighborhoods 
to their original luster, while adding modern design, style and amenities.</span>
         
           
        </div>

        
      </div>
 <div class="footer" style="margin-top:30px">
        © 2014 Greenbrook Property Development, LLC Privacy Policy<br />
32455 W. 12 Mile Road, #3523 Farmington Hills, MI 4833
      </div>
     
    </div> <!-- /container -->



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  

</body></html>