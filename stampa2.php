<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Spisak učenika koji su uneti u bazu</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>



table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align:center;
    padding:8px;
    font-size:16px;
}
#upozorenje{
    font-size:15px;
    color:red;
    
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
	
		
		
					<div class="form_description">
			<h1>Unos podataka</h1>
			
		</div>						
			<?php require_once('navigacija.php')?>
	   
					<div class="form_description">
<?php  
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error)die($conn->connect_error);
$odel=$_GET['ode'];

$query="SELECT * FROM $odel ORDER BY id DESC";
$result=$conn->query($query);
if(!$result)die($conn->error);
$rows=$result->num_rows;

if ($rows!=0){
    echo "<ul><h2>Izbor učenika po imenu i prezimenu</h2>
			<p>Izaberi ime učenika</p></ul>";
}

?>
			
			<br>
		</div>						
		<div>

<?php
		   
if($rows!=0){
echo '<ul><table><tr><td><strong>Redni broj</strong></td><td><strong>Ime i prezime</strong></td></tr>';

for($j=0;$j<$rows;++$j){
$result->data_seek($j);
$row=$result->fetch_array(MYSQLI_ASSOC);
$jj=$j+1;
echo'<tr><td>'.$jj.'.</td><td><a href=previewTEH.php?odel='.urlencode($odel).'&ucenik='.urlencode($row['id']).'>'.$row['ime'].' '.$row['prezime'].'</a></tr></td>';

}
echo '</table></ul>';
}
else echo '<br><ul id="upozorenje">Nema unetih učenika za odeljenje '.ucfirst($odel).'</ul>';

mysqli_free_result($result);
mysqli_close($conn);
?>

</ul>
<br>
		</div>
		
	</body>
</html>