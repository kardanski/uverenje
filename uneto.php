<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Unos podataka</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>
    
.clearfix::after {
    content: " ";
    clear: both;
    display: block;
}


#meni li{
    display:inline;
    float:left;
     list-style: none;   
     padding: 8px;
     margin 10px;
    }   
    
    
#meni li a {
    font-size:15px;
    font-weight: bold;
    text-decoration:none;
    padding: 5px;
    transition-timing-function: ease;
    transition-duration: 0.3s;
    text-decoration:underline;
         
    }
#meni li a:hover {
    padding: 5px;
    background: lightgray;
    text-decoration:none;
    border-radius: 3px;  
    }
</style>
</head>
<body id="main_body" >
	
	
	<div id="form_container">
	
		<h1><a>Unos podataka</a></h1>
		<br>
			<?php require_once('navigacija.php') ?>
			
					<div class="form_description">
					    <br>
		<ul>	<h2>Podaci su uneti.</h2>
			<br>
		</div>						
			</ul>
			    
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>