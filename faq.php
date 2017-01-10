<?php 
$ip = $_SERVER['REMOTE_ADDR'];

$date = date("Y/m/d/ h:i:s");

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {

global $user_agent;

$os_platform    =   "Unknown OS";

$os_array       =   array(
                        '/windows nt 6.2/i'     =>  'Windows 8',
                        '/windows nt 6.1/i'     =>  'Windows 7',
                        '/windows nt 6.0/i'     =>  'Windows Vista',
                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                        '/windows nt 5.1/i'     =>  'Windows XP',
                        '/windows xp/i'         =>  'Windows XP',
                        '/windows nt 5.0/i'     =>  'Windows 2000',
                        '/windows me/i'         =>  'Windows ME',
                        '/win98/i'              =>  'Windows 98',
                        '/win95/i'              =>  'Windows 95',
                        '/win16/i'              =>  'Windows 3.11',
                        '/macintosh|mac os x/i' =>  'Mac OS X',
                        '/mac_powerpc/i'        =>  'Mac OS 9',
                        '/linux/i'              =>  'Linux',
                        '/ubuntu/i'             =>  'Ubuntu',
                        '/iphone/i'             =>  'iPhone',
                        '/ipod/i'               =>  'iPod',
                        '/ipad/i'               =>  'iPad',
                        '/android/i'            =>  'Android',
                        '/blackberry/i'         =>  'BlackBerry',
                        '/webos/i'              =>  'Mobile'
                     );

foreach ($os_array as $regex => $value) {

 if (preg_match($regex, $user_agent)) {
    $os_platform    =   $value;
 }

}

return $os_platform;

}

function getBrowser() {

global $user_agent;

$browser        =   "Unknown Browser";

$browser_array  =   array(
                         '/msie/i'       =>  'Internet Explorer',
                         '/firefox/i'    =>  'Firefox',
                         '/safari/i'     =>  'Safari',
                         '/chrome/i'     =>  'Chrome',
                         '/opera/i'      =>  'Opera',
                         '/netscape/i'   =>  'Netscape',
                         '/maxthon/i'    =>  'Maxthon',
                         '/konqueror/i'  =>  'Konqueror',
                         '/mobile/i'     =>  'Handheld Browser'
                   );

foreach ($browser_array as $regex => $value) {

  if (preg_match($regex, $user_agent)) {
     $browser    =   $value;
  }

}

return $browser;

}

$user_os        =   getOS();
$user_browser   =   getBrowser();
	
	$html= '<tr><th scope="row">#</th><td>'. $ip .'</td><td>'. $date .'</td><td>'. $user_browser .'</td><td>'. $user_os .'</td><td>/index.php</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>'. PHP_EOL;
	file_put_contents('iplog.php', $html, FILE_APPEND); ?>
  <html>
     <head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <title>Optifine capes for free!</title>
	  <style>
		html {
			margin:40px;
			background: url(faq.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			
			
			
			 }
			
		h1 {
			font-family: "Courier New", Courier, monospace;
			font-size: 24px;
			font-style: normal;
			font-variant: normal;
			font-weight: 500;
			line-height: 26.4px;
			}
		h4 {
		        font-family: "Courier New", Courier, monospace;
			}
		p {
		     font-family: "Courier New", Courier, monospace;
			}
	@margin123456 {
			margin:5px;
		}
		</style>
			<nav class="navbar navbar-default" id="margin123456">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">  <img src="logo.png" width="65px" height="65px">  </a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="index.php">Home </a></li>
			<li class="active"><a href="faq.php">FAQ's </a></li>
			<li><a href="get_cape.php">Get Cape!</a><li>
			  </ul>
			</li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>
     </head>
	 <body>
		<div class="container">
  <h2>FAQ's</h2>
  <p>Here are some frequently asked questions</p><br>
  <div class="media">
  <div class="media-left">
  <img src="dannyxv8.png" class="media-object" style="width:45px">
  </div>
  <div class="media-body">
      <h4 class="media-heading"><a href="https://www.youtube.com/channel/UCaaUwptcBxv9Z1G0cobjq9A">Dannyxv8</a> - YouTuber <small><i>Posted on December 13th, 2016</i></small></h4><class="media-heading"><div class="media-body"><p>will i get banned from servers if i use this?</p></div>
      <h4 class="media-heading">
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="custom.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="https://www.youtube.com/channel/UCfzsUPfu_88X8FgeZO6Brsg">Custom</a> - Server Admin <small><i>Posted on December 13th, 2016</i></small></h4>
          <p>No there is absolutely no possible way of</p>
          <p>getting banned on any servers</p>
          <p>because of doing this!</p>
        </div>
      </div>
              <div class="media-left">
          <img src="user_guest.png" class="media-object" style="width:45px">
        </div>
       <div class="media-body">
      <h4 class="media-heading">Guest <small><i>Posted on December 15th, 2016</i></small></h4>
      <p>How can this be <strong>free</strong>?</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="custom.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="https://www.youtube.com/channel/UCfzsUPfu_88X8FgeZO6Brsg">Custom</a> - Server Admin <small><i>Posted on December 16th, 2016</i></small></h4>
          <p>Yes this is completely <strong><u>free</u></strong></p>
	  <p>this is how it works: we hacked into OptiFine's Database</p>
	  <p>but we didn't know what to do with this power so as you may guess...</p>
	  <p>we made a website where you can do it easily and we'll do </p>
	  <p>the hard work. If you're feeling generous, please donate to us via paypal.</p>
        </div>
      </div>   " <small><i>Posted on December 13th, 2016</i></small></h4>
      <p>will i get banned from servers if i use this</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="custom.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="https://www.youtube.com/channel/UCfzsUPfu_88X8FgeZO6Brsg">Custom</a> - Server Admin <small><i>Posted on December 16th, 2016</i></small></h4>
          <p>Yes this is completely <strong><u>free</u></strong></p>
	  <p>this is how it works: we hacked into OptiFine's Database</p>
	  <p>but we didn't know what to do with this power so as you may guess...</p>
	  <p>we made a website where you can do it easily and we'll do </p>
	  <p>the hard work. If you're feeling generous, please donate to us via paypal.</p>
        </div>
      </div>   
  <div class="media">
    <div class="media-left">
      <img src="user_guest.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Guest <small><i>Posted on December 15th, 2016</i></small></h4>
      <p>How can this be <strong>free</strong>?</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="custom.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="https://www.youtube.com/channel/UCfzsUPfu_88X8FgeZO6Brsg">Custom</a> - Server Admin <small><i>Posted on December 16th, 2016</i></small></h4>
          <p>Yes this is completely <strong><u>free</u></strong></p>
	  <p>this is how it works: we hacked into OptiFine's Database</p>
	  <p>but we didn't know what to do with this power so as you may guess...</p>
	  <p>we made a website where you can do it easily and we'll do </p>
	  <p>the hard work. If you're feeling generous, please donate to us via paypal.</p>
        </div>
      </div>   
    </div>
  </div>
  <div class="media">
    <div class="media-left">
      <img src="aoe.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><a href="https://www.youtube.com/channel/UCjQrTO-dx_cn0429IG3np5g">A0E</a> - YouTuber <small><i>Posted on December 15th, 2016</i></small></h4>
      <p>will this work without using the OptiFine client?</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="custom.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="https://www.youtube.com/channel/UCfzsUPfu_88X8FgeZO6Brsg">Custom</a> - Server Admin <small><i>Posted on December 17th, 2016</i></small></h4>
          <p>No. You can't have a cape without using the OptiFine client you will</p>
	  <p>always need to use the OptiFine client!</p>
	  <p>You can find the original downloads <a href="http://optifine.net/downloads">here</a></p>
	  <p>this will work o all versions of minecraft*</p>
	  <p><small><i>*will not work on minecraft 1.6.0 or earlier!</i></small></p>
	  <br>
        </div>
      </div>   
    </div>
  </div>
</div>
		</body>
    </html>