<!DOCTYPE html>
<!-- saved from url=(0062)file:///home/laki/Desktop/GOTOVO/TEHNICARI/tehnicarStampa.html -->
<html lang="en"><head><meta http-equiv="Content-Type"  content="text/html;charset=UTF-8">
		<title>Stampanje</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="tehnicarKalibrator_files/stilTehnicar.css">
		<script src="tehnicarKalibrator_files/jquery-3.js"></script>
	<!-- <script src="tehnicarKalibrator_files/mrdalo.js"></script> -->
	    <script src="tehnicarKalibrator_files/stampaNORMAL.js"></script>
	   
	</head>
	
	<body>	
<?php
//pozivanje fajlova za login u bazu	
	require_once 'login.php';
	
	
	//konekcija sa bazom
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error)die($conn->connect_error);
$odel=$_GET['odel'];
$ucen=$_GET['ucenik'];

//upit za selekciju iz tabele odeljenja za odredjenog ucenika
$query="SELECT * FROM $odel WHERE id=$ucen ORDER BY id DESC";
$result=$conn->query($query);
if(!$result)die($conn->error);

//rezultat upita pretvaramo u asocijativni niz
$row=$result->fetch_array(MYSQLI_ASSOC);

//fajl u kome su definisane f-je za racunanje uspeha a povlaci i spisak tema
require_once 'funkcijenove.php';

//promena fiksnih delovodnih brojeva uverenja i diplome u zavisnosti od odeljenja
if($odel=="e41"){
    $fiksuverenja=$fiksuverenjae41;
    $fiksdiplome=$fiksdiplomee41;
}
elseif($odel=="e42"){
    $fiksuverenja=$fiksuverenjae42;
    $fiksdiplome=$fiksdiplomee42;
}
else{
    $fiksuverenja="nedefinisano";
    $fiksdiplome="nedefinisano";
}

?>
							<div id="alati" style="width:100%;height:10mm;margin-top:10mm;padding:0px;background-color:transparent;position:fixed;width:100%;z-index:100;border-style:none;">
	
	
									
					<a href="form.php"><button id="upisUBazu" style="background-image:url('upis.svg');"></button></a>
	
					<button id="izborUcenika" style=" background-image:url('ucenik.svg');"></button>
					<a href="stampa.php"><button id="izgedPreStampe" style=" background-image:url('preview.svg');"></button></a>
					<button id="stampa" onclick="myFunction()" style="background-image:url('stampa.svg');"></button>

					
				</div>	


                <div id="spoljna" style="background-image:url('spol256x385.jpg');page-break-after:always;position:relative;left:0mm;top:0mm;">
				
				
			<!-- ime skole -->	
			<textarea class="krupno" style="left: 815.667px; top: 91px; width: 616px; height: 37px; color: yellow; border-style: dotted;">ТЕХНИЧКА ШКОЛА ГСП</textarea>
			
			
			<!-- delovodni broj uverenja itd -->
			<textarea class="krupno" style="left: 835.333px; top: 130px; width: 269px; height: 38px; color: yellow; border-style: dotted; resize: none;">Београду</textarea>
			<textarea class="srednje" placeholder="delUver" style="left: 826.583px; top: 179px; width: 286px; height: 30px; color: yellow; border-style: dotted;"><?php echo $fiksuverenja.$row['delovodnibridatdiplome']." ".$datuverenja; ?> </textarea>
			<textarea class="srednje" placeholder="brMaticna" style="left: 964.417px; top: 217px; width: 147px; height: 30px; color: yellow; border-style: dotted;"><?php echo $row['brmk']; ?></textarea>
			


			
			
			<!-- odobrenje skoli-->
			<textarea placeholder="resenjeSkola" style="left: 1213.58px; top: 144px; width: 115px; height: 28px; color: yellow; border-style: dotted; font-family: &quot;Arial Narrow&quot;; font-size: 14px;">022-05-155/94-03</textarea>
			<textarea placeholder="od" style="left: 1321.5px; top: 145px; width: 129px; height: 21px; color: yellow; border-style: dotted; font-family: &quot;Arial Narrow&quot;; font-size: 14px;">07.06.2011. год.</textarea>			
					<textarea placeholder="Minist" style="left: 1128.5px; top: 182px; width: 307px; height: 38px; color: yellow; border-style: dotted; font-family:'Arial Narrow';font-size: 14px;">Министарство просвете Републике Србије</textarea>
					
			<!-- podaci o  uceniku -->
			<textarea class="ime" placeholder="Ime i Prezime" style="left: 916.5px; top: 477px; width: 414px; height: 37px; color: yellow; border-style: dotted;"><?php echo $row['ime']." ".$row['prezime']; ?></textarea>
			<textarea class="srednje" placeholder="Roditelj" style="left: 827.333px; top: 522px; width: 122px; height: 36px; color: yellow; border-style: dotted;"><?php echo $row['imeroditelja']; ?></textarea>			
			<textarea class="srednje" placeholder="rodjDanMes" style="left: 1007.58px; top: 523px; width: 77px; height: 33px; color: yellow; border-style: dotted;"><?php echo $row['datumrodjenja']; ?></textarea>
			<textarea class="srednje" placeholder="rodjGod" style="left: 1082.5px; top: 523px; color: yellow; border-style: dotted; width: 63px; height: 30px;"><?php echo $row['godinarodjenja']; ?></textarea>
			<textarea class="srednje" placeholder="rodjMest" style="left: 1171.42px; top: 522px; width: 258px; height: 33px; color: yellow; border-style: dotted;"><?php echo $row['mestorodjenja']; ?></textarea>
			<textarea class="srednje" placeholder="Opstina" style="left: 869.667px; top: 560px; width: 249px; height: 37px; color: yellow; border-style: dotted;"><?php echo $row['opstinarodjenja']; ?></textarea>
			<textarea class="srednje" placeholder="Drzava" style="left: 1169.58px; top: 559px; width: 260px; height: 36px; color: yellow; border-style: dotted;"><?php echo $row['drzavarodjenja']; ?></textarea>
			<textarea class="srednje" placeholder="delDiplome" style="left: 930.5px; top: 696px; width: 388px; height: 29px; color: yellow; border-style: dotted;"><?php echo $fiksdiplome.$row['delovodnibridatdiplome'].$datdiplome; ?></textarea>	
					
		</div>
		
		
		
	<!--   -----------ovde pocinje druga stana-------------------------------------------------------------------------------------------- -->
		
		<div id="unutrasnja" style="background-image:url('unut256x385.jpg');position:relative;left:0mm;top:0mm;">
			
			
			<!-- Podaci o nastavnom planu i programu-->
			<textarea class="srednje" placeholder="glasnik" style="left: 558.017px; top: 43px; color: yellow; border-style: dotted; width: 87px; height: 28px;">2011/12</textarea>
			<textarea class="srednje" placeholder="podrucje" style="left: 166.017px; top: 72px; color: yellow; border-style: dotted; width: 485px; height: 24px;">Електротехника и шпанцовање</textarea>
			<textarea class="srednje" placeholder="oblast" style="left: 166.017px; top: 102px; color: yellow; border-style: dotted; width: 485px; height: 26px;">Електротехника</textarea>
			<textarea class="srednje" placeholder="profil" style="left: 168.017px; top: 132px; color: yellow; border-style: dotted; width: 481px; height: 30px;">Електротехничар за електронику на возилима</textarea>
			<textarea class="srednje" placeholder="trajanje" style="left: 183.017px; top: 162px; color: yellow; border-style: dotted; width: 449px; height: 32px;">Четири године</textarea>
			<textarea class="srednje" placeholder="opstOB" style="left: 554.017px; top: 194px; color: yellow; border-style: dotted; width: 94px; height: 27px;">1000</textarea>
			<textarea class="srednje" placeholder="Strucni" style="left: 553.017px; top: 224px; color: yellow; border-style: dotted; width: 95px; height: 38px;">1000</textarea>
			<textarea class="srednje" placeholder="Izbor" style="left: 552.017px; top: 255px; color: yellow; border-style: dotted; width: 96px; height: 30px;">1000</textarea>
			<textarea placeholder="Prak" style="left: 553.017px; top: 301px; color: yellow; border-style: dotted; width: 96px; height: 37px;">1000</textarea>
			<textarea class="srednje" placeholder="napomena" style="left: 178.017px; top: 361px; color: yellow; border-style: dotted; width: 458px; height: 98px;">Ко је вама дао на правите обрзац, ни пакао му неће тешко пасти!!!!</textarea>
			
			<!-- Ostavareni ishodi...Znanja Kompetincije..... -->
			<textarea class="sitno" placeholder="znanja" style="left: 20.0167px; top: 552px; color: yellow; border-style: dotted; width: 186px; height: 387px;">Све уме, ал неће!</textarea>
			<textarea class="sitno" placeholder="vestine" style="left: 232.017px; top: 552px; color: yellow; border-style: dotted; width: 195px; height: 386px;">Лоповске лоповске лоповске</textarea>
			<textarea class="sitno" placeholder="kompeten" style="left: 450.017px; top: 551px; color: yellow; border-style: dotted; width: 191px; height: 389px;">Још какоЈТЈГЈДЈДЈГДЈЈЈ</textarea>	
			
			<!-- Podaci o postignutom uspehu na kraju svake godine -->		
			<textarea class="sitno" placeholder="Uspeh1" style="left: 925.017px; top: 71px; color: yellow; border-style: dotted; width: 115px; height: 32px;"><?php echo $uspeh1Format; ?></textarea>	
			
			<textarea class="sitno" placeholder="Uspeh2" style="left: 1056.02px; top: 71px; color: yellow; border-style: dotted; width: 115px; height: 32px;"><?php echo $uspeh2Format; ?></textarea>
			
			<textarea class="sitno" placeholder="Uspeh3" style="left: 1185.02px; top: 71px; color: yellow; border-style: dotted; width: 125px; height: 29px;"><?php echo $uspeh3Format; ?></textarea>
			    
    		<textarea class="sitno" placeholder="Uspeh4" style="left: 1314.02px; top: 71px; color: yellow; border-style: dotted; width: 125px; height: 29px;"><?php echo $uspeh4Format; ?></textarea>
    		    
			<textarea class="sitno" placeholder="prosek1" style="left: 920.017px; top: 94px; color: yellow; border-style: dotted; width: 126px; height: 32px;"><?php echo proverauspeha($row['uspeh1']); ?></textarea>
			
			<textarea class="sitno" placeholder="prosek2" style="left: 1065.02px; top: 95px; color: yellow; border-style: dotted; width: 100px; height: 37px;"><?php echo proverauspeha($row['uspeh2']); ?></textarea>
			
			<textarea class="sitno" placeholder="prosek3" style="left: 1185.02px; top: 94px; color: yellow; border-style: dotted; width: 126px; height: 29px;"><?php echo proverauspeha($row['uspeh3']); ?></textarea>
			
			<textarea class="sitno" placeholder="prosek4" style="left: 1332.02px; top: 94px; color: yellow; border-style: dotted; width: 95px; height: 32px;"><?php echo proverauspeha($row['uspeh4']); ?></textarea>
			
		
			
			<!-- Maturski zadaci i bodovi -->
	
	
			
			<textarea class="sitno" placeholder="crtaPrekoZavrsnog" style="left: 840.017px; top: 316px; color: yellow; border-style: dotted; width: 97px; height: 23px;">=========</textarea>
			
			<textarea placeholder="zadatakA" style="left: 802.017px; top: 386px; color: yellow; border-style: dotted; width: 345px; height: 19px; font-family: &quot;Arial Narrow&quot;; font-size: 8px;"><?php echo $zad1; ?></textarea>
           <!-- <textarea class="sitno" placeholder="bodA" style="left: 1150.02px; top: 388px; color: yellow; border-style: dotted; width: 97px; height: 23px;"></textarea> -->
            
			<textarea placeholder="zadatakB" style="left: 802.017px; top: 408px; color: yellow; border-style: dotted; width: 348px; height: 22px; font-family: &quot;Arial Narrow&quot;; font-size: 8px;"> <?php echo $zad2; ?></textarea>
			
         <!--   <textarea class="sitno" placeholder="bodB" style="left: 1150.02px; top: 409px; color: yellow; border-style: dotted; width: 97px; height: 23px;"></textarea> -->
            
			<textarea placeholder="zadatakV" style="left: 801.017px; top: 431px; color: yellow; border-style: dotted; width: 347px; height: 19px; font-family: &quot;Arial Narrow&quot;; font-size: 8px;"><?php echo $zad3; ?></textarea>
			
          <!--  <textarea class="sitno" placeholder="bodV" style="left: 1150.02px; top: 432px; color: yellow; border-style: dotted; width: 97px; height: 23px;"></textarea> -->		
		<!--	<textarea class="srednje" placeholder="UkBod" style="left: 1249.02px; top: 414px; color: yellow; border-style: dotted; width: 97px; height: 28px;"></textarea> -->
			<textarea class="sitno" placeholder="UspMat" style="left: 1351.02px; top: 417px; color: yellow; border-style: dotted; width: 92px; height: 66px;"><?php echo $row['uspehzadatak']; ?></textarea>

			
			<!-- TEST na maturskom -->
			<textarea class="sitno" placeholder="TestBod" style="left: 805.017px; top: 569px; color: yellow; border-style: dotted; width: 337px; height: 26px;"><?php echo $brojBodovaFormat; ?></textarea>
			<textarea class="sitno" placeholder="TestOcen" style="left: 1154.02px; top: 569px; color: yellow; border-style: dotted; width: 287px; height: 25px;"><?php echo uspehtest($row['brojbodovatest']); ?></textarea>
			
			
		</div>
	
<?php
mysqli_free_result($result);
mysqli_close($conn);
?>

</body></html>
