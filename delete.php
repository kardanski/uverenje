<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Brisanje podataka</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

<style>
    #delete{
        padding:6px;
        transition: ease 0.1s;
        background-color:orange;
        border: 2px solid orange;
        font-weight:bold;
    }
    #delete:hover{
        border: 2px solid red;
        cursor:pointer;
        background-color:orange;
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
#lista{
        font-size:16px;
        margin-left:30px;
    }
</style>

</head>
<body id="main_body" >
	<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn,'utf8');
if ($conn->connect_error)die($conn->connect_error);



if(isset($_GET['id']) AND isset($_GET['editidelete']))
{
$id=$_GET['id'];
$ode=$_GET['editidelete'];
$sql="SELECT ime,prezime FROM $ode WHERE id='$id'";
$res=$conn->query($sql);
if(!$res)die($conn->error);
$geri=$res->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['submit']))
{
$query="DELETE FROM $ode WHERE id='$id'";
$delete=$conn->query($query);
if($delete)
{
header('Location: sviuneti2.php?ode='.$ode);
} 
else{
    echo "ERROR: Could not able to execute ".$query." ". $conn->error;
}

}
}
?>

	
	<div id="form_container">
	
		<h1><a>Brisanje podataka</a></h1>
		<br>
		<?php require_once('navigacija.php')?>
			
		<form  class="appnitro"  method="post" action="">
					<div class="form_description">
					    <br>
			<h2>Potvrdi brisanje podataka za učenika:</h2>
			<br>
		<?php echo '<ul id="lista">Ime: <strong>'.$geri['ime'].'</strong>';
		      echo '<br>';
		      echo 'Prezime: <strong>'.$geri['prezime'].'</strong></ul>'; ?>
			<br>
		<li class="buttons">
			   
			    
				<input id="delete" class="button_text" type="submit" name="submit" value="Obriši" />
		</li>
			</ul>
			</form>
		</div>						
			<ul >
			    
	</div>
	<?php 
	
	mysqli_free_result($res);
	mysqli_close($conn);
	
	?>
	
	</body>
</html>