<?php
session_start();
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">  
<center><b><font color = "brown" size="6">Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?php
session_destroy();
?>
<a1>You have been successfully logged out.<br><br><br>
Return to </a1><a href="index.php">Login</a>
<div id="footer">
<div class="bottom_addr">-----&copy; 2021 Simple PHP Voting System. Made By Harshil & Aayush-----</div>
</div>
</div>
</body></html>