<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Spisak učenika koji su uneti u bazu</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>
input:required {
    background-color: yellow;
}
#izbor{
    font-size:15px;
    font-weight:bold;
    
}
#izbor2 li{
    display:inline;
    float:left;
     list-style: none;   
     padding: 8px;
     margin 10px;
    }   
    
    
#izbor2 li a {
    font-size:20px;
    font-weight: bold;
    text-decoration:none;
    padding: 5px;
    transition-timing-function: ease;
    transition-duration: 0.3s;
         
    }
#izbor2 li a:hover {
    padding: 5px;
    background: lightgray;
    text-decoration:none;
    border-radius: 3px;  
    }
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
	
	<h1>PROBA</h1>
	<?php require_once('navigacija.php'); ?>
	
							<div class="form_description">
					    
		<ul>	<h2>Spisak učenika unetih u bazu podataka: </h2></ul>
			
		</div>						
			
		
		<ul id="izbor">
            Izabrati odeljenje:
            </ul> 
		<ul id="izbor2" >
		    <li id="li_3" >
		    <a href=sviuneti2.php?ode=e41>E41</a><br>
		    <li id="li_3" >
		    <a href=sviuneti2.php?ode=e42>E42</a>

			</ul>
		<div class="clearfix">
		    
		 
				
			
			
		
	</div>
	<br>
	</body>
</html>