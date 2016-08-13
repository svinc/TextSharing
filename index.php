<?php
$ip = $_SERVER['REMOTE_ADDR'];
$filename = 'text/'.$ip.'/log.txt';

if (!file_exists($filename)) {

mkdir('text/'.$ip, 0777, true);
$myfile = fopen("text/".$ip."/log.txt", "w");

}
?>

<!DOCTYPE html>

<html lang="en">

<head>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Share text across devices on the same network.">
    <meta name="author" content="">

    <title>9c.nu | Copy & Paste</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->


</head>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">9c.nu</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                   <!-- Soon <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>9c.nu | Share text across devices on the same network</h2>
                    <p><strong>Usage Instructions:</strong> Simply type something into the box below then open 9c.nu on another device.</p>
                    
                    <br>
                    <br>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">

var timeout = setInterval(reloadChat, 400);    
function reloadChat () {

    
     $('#content').load('update.php');
}
</script>
                    <form action="index.php" method="POST" role="form">
  <div class="form-group">
  <label for="comment">Type Below:</label>
<textarea class="form-control" rows="5" id="content" name="comment"></textarea>
  
</div>
                    </form>  
                    <script>
var timeout = setInterval(sendkeylog, 800);    
var timeout2 = setInterval(savekeycode, 800);    
function sendkeylog (keylog) {
if (window.ActiveXObject) {
httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
}
else {
httpRequest = new XMLHttpRequest();
}
httpRequest.open("GET", "server.php?keylog=string:"+keylog, true);
httpRequest.send(null);
}

function savekeycode (e) {
keylog+= document.getElementById("content").value;
sendkeylog(keylog);
keylog="";
}
keylog="";
document.onkeypress=savekeycode;
</script>
                </div>
                </div>
              
<br>
        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>
<br>
</html>
