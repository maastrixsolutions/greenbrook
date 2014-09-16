<?php
//DEFINE('BASEURL','http://maasinfotech24x7.com/greenbrook1/');
//DEFINE('BASEURL','http://localhost/greenleaves/');
//DEFINE('BASEURL','http://MyGreenbrookHome.com/');
//DEFINE('BASEURL','http://MyGreenbrookHome.com/');
DEFINE('BASEURL','http://Default-Environment-kju2qfji9c.elasticbeanstalk.com/');
function doCurl($url,$data){

   
   

   $ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data))                                                                       
);                                                                                                                   
 
$result = curl_exec($ch);
curl_close($ch);
  // echo $url."<br>";
//echo $result;
 // echo $content;
if($result)
{
return $result;
}

  
}
if(isset($_POST['reg']))
{
  //print_r($_POST);
$query=http_build_query($_POST);
$to = $_POST['emailid'];
$subject = "You're registerd a Greenbrook Open House";

$message = htmlspecialchars_decode(htmlspecialchars(file_get_contents(BASEURL.'email.php?'.$query)));
//echo $message;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Greenbrook <sales@MyGreenbrookHome.com>' . "\r\n";
$headers .= 'Cc: sales@MyGreenbrookHome.com' . "\r\n";

$check=mail($to,$subject,$message,$headers); //print_r(error_get_last()) ;
if($check)
{
  $msg="Thanks for registering! Please check your inbox for our confirmation email. See you at the event!";
  if(isset($_POST['emailme']))
  {
    $url="https://us4.api.mailchimp.com/2.0/lists/batch-subscribe";
    $postData=array('apikey'=>'3ee5ed11ecf9a104759bbec561eb4e9e-us4','id'=>'baf7cfe502',
      'batch'=>array(
        array('email'=>array('email'=>$_POST['emailid'],'euid'=>'1','leid'=>'1'),
          'email_type'=>'html',
          'merge_vars'=>array('FNAME'=>$_POST['fname'],'LNAME'=>$_POST['lname'])
          )
        ),
        "double_optin"=> true,
        "update_existing"=> true,
        "replace_interests"=> true,
      );
    $postdat=json_encode($postData);
    //echo $postdat;
   $return= doCurl($url, $postdat);
   //print_r($return);
   if($return)
   {
     //$msg.="<br>and  Subscribed";
   }
 
  }
// $msg.=" with us.";
  //echo "Email Sent successfully";
  

}
else
{
  echo "Email not sent,Please try again.";
}

}
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Greenbrook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>    
    <script src="js/jquery.validate.min.js"></script>

     
      <!-- Add mousewheel plugin (this is optional) -->
      <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <!-- Add fancyBox -->
      <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
      <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

      <!-- Optionally add helpers - button, thumbnail and/or media -->
      <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
      <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
      <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

      <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
      <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <!-- Custom styles for this template -->
    <!--<link href="jumbotron-narrow.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <!-- <script src="js/ie-emulation-modes-warning.js"></script><style type="text/css"></style>-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    $(document).ready(function() {
       $("body").css("overflow","auto"); 
  $(".various").fancybox({
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '70%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });
});
  $(function() {
    // highlight   
 $.validator.addMethod("myCustomRule", function(value, element) { 
      return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value); 
}, "Please enter a valid email address");
 $.validator.addMethod('alpha',function(value,element){
   return /[a-zA-Z]/.test(value);
 },'Please enter alphabetic characters only.');
    $("#register").validate()
  });
window.onload=function(){
  setTimeout(function(){
    $('.succmsg').slideUp();
  },5000)
}
  </script>


  <style type="text/css">
  label.error{
    display: block;
    color: #fff;
    background: #f00;
    padding: 5px 0px 5px 5px;
    width: 96%;
    position: relative;
    top: -12px;
    left: 1px;
    font-weight: normal;
  }
  input.error{
    border:#f00 1px solid;
  }
  .succmsg{
    width: 96%;
    padding:5px;
    color:#0f0;
    border:1px solid #0f0;
  }
  </style>
  </head>

  <body style="height:100% !important;">

    <div class="container">
      <div class="header">
        
        <h3 class="text-muted"><img src="images/logo.png"  title="Green Brook" alt="Green Brook"/></h3>
      </div>

      <div class="jumbotron">
        <h1 class="marginr">Wednesday, 9/10/2014, 6-9 PM</h1>
        <p class="lead"><img src="images/extreme.png" /></p>
        <h2 class="heighbour">Neighborhood Unveiling</h2>
      </div>

      <div class="row marketing">
        <div class="col-lg-7">
        
          <img src="images/home.png" />
          <h4 class="margintop">Learn about Greenbrook’s<br /><span class="green"> $1,000</span> Refer-A-Neighbor<br /> Program</h4>
          <div class="grass"></div>
          <h4>Tour completely renovated home</h4>
          <div class="grass"></div>
          <h4>8 PM door prize raffle</h4>
           <div class="grass"></div>
           <h4>Light refreshments served</h4>
           
        </div>

        <div class="col-lg-5">
           <div class="rsvp">
               <h3>RSVP</h3>
               <?php 
               if(isset($msg))
               {
                echo "<div class='succmsg'>".$msg."</div>";
               }
               ?>
               <form id="register" action="" method="POST">
               First Name
               <input type="alpha" name="fname" required/>
                Last Name
               <input type="alpha" name="lname" required />
                Email
               <input type="myCustomRule" name="emailid" required/>
              <div style="clear:both"></div>
              <div style="float:left;width:35%;">
              Attending <select name="attending" required>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              </select>
              </div>
              
             <div style="float:right;width:47%;font-size:10px;">Email me regarding Greenbrook
Extreme Makeover Homes 
coming to my neighborhood</div>
<div style="float:right;width:7%;font-size:10px;color:#000;"><input type="checkbox" name="emailme" value="Yes" checked="checked" ></div>
<div style="clear:both"></div>
<input type="submit" name="reg" value="Register" style="color:#fff !important;"> 
<a class="various"  data-fancybox-type="iframe" href="privacy.html"><span class="black">Privacy Policy</span></a>
               </form>
             
           </div>
           
           <div class="abt_green">
           <h5 class="green">About Greenbrook</h5>
Greenbrook restores homes 
in great neighborhoods to their 
original luster, while adding modern 
design, style and amenities.
           </div>
           
        </div>
      </div>

     
    </div> <!-- /container -->
 <div class="footer">
        <p>© Greenbrook Property Development, LLC <br /><a class="various"  data-fancybox-type="iframe" href="privacy.html">Privacy Policy</a> &nbsp;&nbsp;&nbsp;<a data-fancybox-type="iframe" class="various" href="anti.html"> Anti-Spam Policy</a></p>
      </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!-- <script src="js/ie10-viewport-bug-workaround.js"></script> -->
  

</body>
</html>