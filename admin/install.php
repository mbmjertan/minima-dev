
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Upute za instalaciju</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../demo.css" media="screen" />

</head>
<body>

<div id="main">
  <div class="container">
<img src="../img/logo.png">
    <h1>Let's install Minima!</h1>
    </div>
    
    <div class="container">
    
<h1>Hello.</h1>
<h2>1. Connecting to the database</h2>
<p>Edit <i>_class/db-conf.php</i> so Minima could connect to your database.</p>
<h2>2. Database structure</h2>
<p>In PHPMyAdmin, import mysql-data.sql to your database, so it is readable / writable to Minima. </p>
<h2>3. U should mk cmmnts wrk.</h2>
<p>Disqus is integrated to Minima now. In <i>_class/comm.php</i> edit your shortname so Minima can connect to Disqus.</p>
<h2>4. Make it personal. </h2>
<p>Change the header, or the footer via configuration files, or install a theme. Change the logo. Find more about all this on our wiki.</p>
<h2>5. All done!</h2>
<p>Expecting more? Sorry.</p>
    </div>
    
  <div class="container tutorial-info">
<?php
include '../footer.php'
?>
    </div>
</div>



<?php
	if($_POST['add']):
		$obj->add_content($_POST);
	elseif($_POST['update']):
		$obj->update_content($_POST);
	endif;
?>



</body>
<html>
