<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Spisak učenika koji su uneti u bazu</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>


@font-face{
    font-family:kom;
    src:url('komikab.ttf');
    
}
table, th, td {
    
    border: 1px solid black;
    border-collapse: collapse;
    padding:5px;
    margin:5px;
    text-align:center;
    
}
.tabi{
                background-color: #d9d9d9; 
            }
            

.tabi:hover td{
                background-color: #8c8c8c;
            }
th {background-color:gray;
color:white;
    
    
}
#upozorenje{
    font-size:15px;
    color:red;
    
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
<body id="main_body">
	
	
	<div id="form_container">
	
		
		
					<div class="form_description">
			<h1>Spisak učenika unetih u bazu podataka: </h1>		    
			<ul></ul>		    
			

		</div>					
			<?php require_once('navigacija.php')?>
	    
	 
<?php
require_once'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error)die($conn->connect_error);

$ode=$_GET['ode'];

$query="SELECT * FROM $ode ORDER BY id";
$result=$conn->query($query);
if(!$result)die($conn->error);
$rows=$result->num_rows;
if($rows!=0){

echo'<ul><strong>Odeljenje: '.ucfirst($ode).'</strong></ul>';
echo'<br>';
echo'<div><table><tr>';
echo'<th><strong>Ime</strong></th><th><strong>Prezime</strong></th><th><strong>Broj u matičnoj knjizi</strong></th>
<th><strong>Ime roditelja</strong></th><th><strong>Datum rodjenja</strong></th><th><strong>Mesto rodjenja</strong></th>
<th><strong>Opština rodjenja</strong></th><th><strong>Država rodjenja</strong></th><th><strong>Delovodni brој</strong></th>
<th><strong>Izmeniti unete podatke</strong></th><th><strong>Obrisati unete podatke</strong></th></tr>';


for($j=0;$j<$rows;++$j){
$result->data_seek($j);
$row=$result->fetch_array(MYSQLI_ASSOC);

echo'<tr class="tabi"><td>'.$row['ime'].'</td><td>'.$row['prezime'].'</td><td>'.$row['brmk'].'</td><td>'.$row['imeroditelja'].'</td><td>'.$row['datumrodjenja'].'</td>
<td>'.$row['mestorodjenja'].'</td><td>'.$row['opstinarodjenja'].'</td><td>'.$row['drzavarodjenja'].'</td><td>'.$row['delovodnibridatdiplome'].'</td>
<td><a href=edit.php?id='.urlencode($row['id']).'&editidelete='.urlencode($ode).'> Izmeni</a></td><td><a href=delete.php?id='.urlencode($row['id']).'&editidelete='.urlencode($ode).'> Obriši</a></td></tr>';

}
echo'</table></div>';
}
else echo '<ul><span id="upozorenje">Nema unetih učenika za odeljenje '.ucfirst($ode).'.</span></ul>';

mysqli_free_result($result);
mysqli_close($conn);
?>
	
	<br>	
	</div>
	
	
	</body>
</html>