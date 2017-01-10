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
			background: url(index.png) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			 }
		  p {
                      font-family: "Courier New", Courier, monospace; 
			}
		h1 {
			font-family: "Courier New", Courier, monospace;
			font-size: 24px;
			font-style: normal;
			font-variant: normal;
			font-weight: 500;
			line-height: 26.4px;
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
			<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
			<li><a href="faq.php">FAQ's </a></li>
			<li><a href="get_cape.php">Get Cape!</a>
			  </ul>
			</li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>
     </head>
	 <body>
		<div class="blockqoute" align="center">
			<blockqoute>
			<img src="minekraft.jpg" height="auto" width="auto">
			<h1><strong id="primary">Welcome!</strong></h1>
			<p> here you can get free optifine capes yes for <i><u>free</u></i>!!!!</p>
			<p> so what do i need to do? Check out the <a href="faq.php">FAQ's</a></p>
			<p> for more information and/or go to the <a href="get_cape.php">Get Cape!</a> tab</p>
			<p> to see instructons on how to get yourself an optifine cape for <i><u>free</u></i></p>
			<br>
			<br>
			<br>
			</blockqoute>
			</div>
		</body>
    </html>