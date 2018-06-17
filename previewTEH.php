<!DOCTYPE html>
<!-- saved from url=(0062)file:///home/laki/Desktop/GOTOVO/TEHNICARI/tehnicarStampa.html -->
<html lang="en"><head><meta http-equiv="Content-Type"  content="text/html;charset=UTF-8">
        <title>Stampanje</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index_files/stilTehnicar.css">
        <script src="index_files/jquery-3.js"></script>
    <!-- <script src="index_files/mrdalo.js"></script> -->
        <script src="index_files/stampaNORMAL.js"></script>
       
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
    
                     <a href="index.html"><button  id="kalibracija" style=" background-image:url('kalibracija.svg');"></button></a>   
                                    
                    <a href="form.php"><button id="upisUBazu" style="background-image:url('upis.svg');"></button></a>
    
                    <a href="sviuneti.php"><button  id="sviUcenici" style=" background-image:url('ucenik.svg');"></button></a>

                    <a href="stampa.php"><button  id="izborZaStampanje" style=" background-image:url('preview.svg');"></button></a>

                    <button id="stampa" onclick="myFunction()" style="background-image:url('stampa.svg');"></button>

                    
                </div>  


                <div id="spoljna" style="background-image:url('spol256x385.jpg');page-break-after:always;position:relative;left:0mm;top:0mm;">
                                       <pre> <textarea class="kompetencije" placeholder="kompetenSpoljaLeva" style="left: 13px; top: 60px; color: yellow; border-style: dotted; width: 250px; height: 700px; text-align: justify; ">Дијагностиковање механичких, пнеуматских и хидрауличних система возила
                           
                          
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
Дијагностиковање електронских система стабилности, безбедности и комфора возила 
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
Организовање процеса рада при одржавању и сервисирању возила

</textarea> </pre>    
            <pre> <textarea class="kompetencije" placeholder="kompetenSpoljaDesna" style="left: 287px; top: 60px; color: yellow; border-style: dotted; width: 350px; height: 870px;">-Контрола, поправка, замена и подешавање склопова/подсклопова система ОТО мотора за: убризгавање горива, снабдевање ваздухом, надпуњење, хлађење, подмазивање, регенерацију испарење из резервоара, интерну и екстерну рециркулацију издувних гасова, накнадну обраду издувних гасова
- Контрола, поправка, замена и подешавање склопова/подсклопова механизма за развод радног тела ОТО мотора:  шема развода, усисисни и издувни вентили - преклапање вентила, активно управљање вентила, зазор вентила,вођице вентила, погон брегастог вратила, хидроподизачи, компресиона запремина, простор за сагоревање у глави мотора и заптивке главе мотора
- Контрола, поправка, замена и подешавање делова/склопова/подсклопова радног простора ОТО мотора и моторног механизма: клип, суве и мокре клипне кошуљице, клипни прстенови, клипњача, пумпа за уље, коленасто вратило, летећи лежајеви, блок мотора
-Контрола, поправка, замена и подешавање склопова/подсклопова механизма за развод радног тела дизел мотора: шема развода, усисисни и издувни вентили - преклапање вентила, активно управљање вентила, зазор вентила, вођице вентила, погон брегастог вратила, хидроподизачи, компресиона запремина, простор за сагоревање у глави мотора и заптивке главе мотора
- Контрола, поправка, замена и подешавање делова/склопова/подсклопова радног простора дизел мотора и моторног механизма: клип, суве и мокре клипне кошуљице, клипни прстенови, клипњача, пумпа за уље, коленасто вратило, летећи лежајеви, блок мотора 
- Контрола, поправка, замена и подешавање делова/склопова/подсклопова система за кочење возила
- Контрола, поправка, замена и подешавање делова/склопова/подсклопова система за ослањање возила
- Контрола, поправка, замена и подешавање делова/склопова/подсклопова система за управљање возила
- Контрола, поправка, замена и подешавање делова/склопова/подсклопова система за пренос снаге (трансмисије) возила


- Испитивање, замена елемената и контрола исправности класичног и система против блокирања точкова (ABS)
- Испитивање, замена елемената и контрола исправности система за регулисање погонског клизања (ASR) 
- Испитивање, замена елемената и контрола исправности система за регулисање динамике вожње (ESP)
- Испитивање, замена елемената и контрола исправности система активног ослањања и управљања
- Контрола и замена елемената система за сигурност путника у случају судара – ваздушни јастуци и сигурносни појасеви
- Контрола и замена елемената система за надзор притиска у пнеуматицима
- Контрола и замена елемената система за аутоматску регулацију брзине 
- Контрола, замена елемената и подешавање система за контролу растојања
- Контрола, замена елемената и подешавање система за централно 
закључавање и заштиту од крађе возила
- Контрола, замена елемената и подешавање клима система возила 
- Контрола, замена елемената и подешавање аудио и видео уређаја на возилима 
- Контрола, замена елемената и подешавање система за информациону и навигациону намену (GPS)
- Контрола, замена елемената и комуникациона мерења у систему електронског управљања аутоматским мењачким преносницима
- Контрола, замена елемената и комуникациона мерења у систему електронског управљања за електро-механичко управљање мењачем


- Комуницирање са странком при пријему у вези са интервенцијом на возилу
- Саветовање клијента о начину експлоатације и одржавања електричних, електронских, механичких, пнеуматских и хидрауличних уређаја на возилу 
- Вођење документације (отварање радног налога, формирање рачуна, попуњавање сервисне књиге возила и сл.)
- Припремање возила, дијагностичких уређаја и документације о возилу (испитни протоколи из информационог система, каталошки бројеви уређаја, склопова и делова) у складу са предвиђеном интервенцијом на возилу
- Извођење дијагностичких мерења на возилу и утврђивање основног узрока неисправности система/возила, отклањање неисправности и завршна провера исправности возила пре предаје возила странци (власнику возила)
- Одржавање алата, уређаја и опреме за рад на електричним и електронскимсистемима у  складу са упутствима произвођача
- Примењивање правила и упутстава за безбедност и заштиту здравља, хигијенску, противпожарну заштиту и заштиту животне средине при раду
- Праћење стручне литературе</textarea> </pre>      
                
            <!-- ime skole -->  
            <textarea class="krupno" style="left: 811.667px; top: 92px; width: 616px; height: 37px; color: yellow; border-style: dotted;font-size:33px;font-weight:bold;">ТЕХНИЧКА ШКОЛА ГСП</textarea>
            
            
            <!-- delovodni broj uverenja itd -->
            <textarea class="krupno" style="left: 832.333px; top: 127px; width: 269px; height: 38px; color: yellow; border-style: dotted; resize: none;">Београду</textarea>
            <textarea class="srednje" placeholder="delUver" style="left: 825.583px; top: 175px; width: 286px; height: 30px; color: yellow; border-style: dotted;"><?php echo $fiksuverenja.$row['delovodnibridatdiplome']." ".$datuverenja; ?> </textarea>
            <textarea class="srednje" placeholder="brMaticna" style="left: 962.417px; top: 213px; width: 147px; height: 30px; color: yellow; border-style: dotted;"><?php echo $row['brmk']; ?></textarea>
            


            
            
            <!-- odobrenje skoli-->
            <textarea class="uskiFont" placeholder="resenjeSkola" style="left: 1209px; top: 139px; width: 115px; height: 30px; color: yellow; border-style: dotted;">022-05-155/94-03</textarea>
            <textarea class="uskiFont" placeholder="od" style="left: 1339.5px; top: 139px; width: 90px; height: 30px; color: yellow; border-style: dotted;">07.06.2011. год.</textarea>         
                    <textarea class="uskiFont" placeholder="Minist" style="left: 1138.5px; top: 177px; width: 280px; height: 30px; color: yellow; border-style: dotted;">Министарства просвете Републике Србије</textarea>
                    
            <!-- podaci o  uceniku -->
             <textarea class="ime" placeholder="Ime i Prezime" style="left: 913.5px; top: 473px; width: 414px; height: 40px; color: yellow; border-style: dotted;font-weight:bold;"><?php echo $row['ime']." ".$row['prezime']; ?></textarea>
            <textarea class="srednje" placeholder="Roditelj" style="left: 824.333px; top: 519px; width: 122px; height: 36px; color: yellow; border-style: dotted;"><?php echo $row['imeroditelja']; ?></textarea>           
            <textarea class="srednje" placeholder="rodjDanMes" style="left: 1002.58px; top: 519px; width: 77px; height: 33px; color: yellow; border-style: dotted;"><?php echo $row['datumrodjenja']; ?></textarea>
            <textarea class="srednje" placeholder="rodjGod" style="left: 1083px; top: 519px; color: yellow; border-style: dotted; width: 63px; height: 30px;"><?php echo $row['godinarodjenja']; ?></textarea>
            <textarea class="srednje" placeholder="rodjMest" style="left: 1167.42px; top: 519px; width: 258px; height: 33px; color: yellow; border-style: dotted;"><?php echo $row['mestorodjenja']; ?></textarea>
             <textarea class="srednje" placeholder="Opstina" style="left: 865.667px; top: 557px; width: 249px; height: 37px; color: yellow; border-style: dotted;"><?php echo $row['opstinarodjenja']; ?></textarea>
            <textarea class="srednje" placeholder="Drzava" style="left: 1164.58px; top: 557px; width: 260px; height: 36px; color: yellow; border-style: dotted;"><?php echo $row['drzavarodjenja']; ?></textarea>
            <textarea class="srednje" placeholder="delDiplome" style="left: 925.5px; top: 693px; width: 388px; height: 29px; color: yellow; border-style: dotted;"><?php echo $fiksdiplome.$row['delovodnibridatdiplome'].$datdiplome; ?></textarea>    
                    
        </div>
        
        
        
    <!--   -----------ovde pocinje druga stana-------------------------------------------------------------------------------------------- -->
        
        <div id="unutrasnja" style="background-image:url('unut256x385.jpg');position:relative;left:0mm;top:0mm;">
            
            
            <!-- Podaci o obrazovnom profilu-->
            
            <textarea class="srednje" placeholder="profil" style="left: 167.017px; top: 44px; color: yellow; border-style: dotted; width: 486px; height: 30px;">Електротехничар за електронику на возилима</textarea>
            <textarea class="srednje" placeholder="podrucje" style="left: 167.017px; top: 82px; color: yellow; border-style: dotted; width: 486px; height: 30px;">Електротехника</textarea>
            <textarea class="srednje" placeholder="nivo" style="left: 166.017px; top: 122px; color: yellow; border-style: dotted; width: 486px; height: 30px;">IV</textarea>
            <textarea class="srednje" placeholder="trajanje" style="left: 167.017px; top: 159px; color: yellow; border-style: dotted; width: 486px; height: 30px;">четири године</textarea>
            <textarea class="srednje" placeholder="glasnik" style="left: 553.017px; top: 196px; color: yellow; border-style: dotted; width: 100px; height: 30px;">08/15</textarea>


            
            <!-- Podaci o postignutom uspehu na kraju svake godine -->      
            <textarea class="srednje" placeholder="Uspeh1" style="left: 126.017px; top: 307px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo proverauspeha($row['uspeh1']); ?></textarea>   
            
            <textarea class="srednje" placeholder="Uspeh2" style="left: 258.017px; top: 307px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo proverauspeha($row['uspeh2']); ?></textarea>
            
            <textarea class="srednje" placeholder="Uspeh3" style="left: 391.017px; top: 308px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo proverauspeha($row['uspeh3']); ?></textarea>
                
            <textarea class="srednje" placeholder="Uspeh4" style="left: 523.017px; top: 307px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo proverauspeha($row['uspeh4']); ?></textarea>
                
            <textarea class="srednje" placeholder="prosek1" style="left: 126.017px; top: 346px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo $uspeh1Format; ?></textarea>
            
            <textarea class="srednje" placeholder="prosek2" style="left: 258.017px; top: 346px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo $uspeh2Format; ?></textarea>
            
            <textarea class="srednje" placeholder="prosek3" style="left: 390.017px; top: 347px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo $uspeh3Format; ?></textarea>
            
            <textarea class="srednje" placeholder="prosek4" style="left: 523.017px; top: 346px; color: yellow; border-style: dotted; width: 130px; height: 40px; letter-spacing: 1px;"><?php echo $uspeh4Format; ?></textarea>
            
        
            
            <!-- Maturski zadaci i bodovi -->
    
    
            
            <textarea class="sitno" placeholder="crtaPrekoZavrsnog" style="left: 877.017px; top: 286px; color: yellow; border-style: dotted; width: 97px; height: 23px;">===============</textarea>
            
            <textarea class="srednje" placeholder="zadatakA" style="left: 9.01667px; top: 482px; color: yellow; border-style: dotted; width: 521px; height: 40px; letter-spacing: 1px;"><?php echo $zad1; ?></textarea>
                       
            <textarea class="srednje" placeholder="zadatakB" style="left: 9.01667px; top: 517px; color: yellow; border-style: dotted; width: 521px; height: 40px; letter-spacing: 1px;"> <?php echo $zad2; ?></textarea>
          
          
 <textarea class="srednje" placeholder="zadatakV" style="left: 9.01667px; top: 555px; color: yellow; border-style: dotted; width: 521px; height: 40px; letter-spacing: 1px;"><?php echo $zad3; ?></textarea>
            

            <textarea class="srednje" placeholder="UspehPrakticniDeo" style="left: 537.017px; top: 524px; color: yellow; border-style: dotted; width: 112px; height: 80px; font-size: 15px;"><?php echo $row['uspehzadatak']; ?></textarea>

            
            <!-- TEST na maturskom -->
            <textarea class="srednje" placeholder="TestBod" style="left: 65.0167px; top: 681px; color: yellow; border-style: dotted; width: 70px; height: 40px;"><?php echo $brojBodovaFormat; ?></textarea>
            <textarea class="srednje" placeholder="TestOcen" style="left: 359.017px; top: 684px; color: yellow; border-style: dotted; width: 292px; height: 40px;"><?php echo uspehtest($row['brojbodovatest']); ?></textarea>
             <!-- Ciljevi...........Kompetencije..... -->
            <textarea class="sitno" placeholder="CILJEVI" style="left: 838.017px; top: 75px; color: yellow; border-style: dotted; width: 500px; height: 160px; text-align: justify; letter-spacing: 0px;">- примену теоријских знања у практичном контексту;

- примену сигурносних и здравствених мера у процесу рада;

- примену мера заштите животне средине у процесу рада;

- употребу информатичке технологије у прикупљању, организовању и коришћењу информација у   раду и свакодневном животу;

- преузимање одговорности за властито континуирано учење и напредовање у послу и каријери;

- препознавање пословних могућности у радној средини и ширем социјалном окружењу.</textarea>
            
            <pre><textarea class="kompetencije" placeholder="kompetenUnutraLeva" style="left: 811.017px; top: 392px; color: yellow; border-style: dotted; width: 250px; height: 500px;">Провера исправности електричних инсталација, уређаја, машина, давача и извршних елемената возила 
            
            
            
            
            
            
            
            
            
            
            
            
            
Дијагностиковање електронских система контроле рада мотора</textarea> </pre>    
            <pre><textarea class="kompetencije" placeholder="kompetenUnutraDesna" style="left: 1091.02px; top: 392px; color: yellow; border-style: dotted; width: 330px; height: 550px;">-Провера исправности и замена електричних проводника возила 
-Контрола и замена неисправних осигурача, прекидача и релеја 
-Испитивање, пуњење и повезивање акумулатора
-Провера и замена оштећених фарова и сијалица
-Испитивање исправности компоненти у електронском систему аутоматске регулације осветљења и сигнализације возила помоћу комуникационо-мерних уређаја
-Подешавање светлосног снопа фарова класичних и електронских система регулације осветљења
-Провера и замена неисправних сигнално – контролних сијалица возила
-Провера и замена брисача, сирена и контролних инструмената возила
-Контрола исправности сигнала давача у различитим условима рада возила и замена неисправних давача
-Утврђивање функционалности извршних елемената на основу очитавања параметара из електронске управљачке јединице и специјалних осцилоскопских мерења
-Контрола, поправка или замена електропокретача, алтернатора и осталих електричних машина возила


-Контрола, поправка, замена или подешавање елемената система паљења: батеријског система паљења са механичким контактима,  транзисторског паљења, електронског паљења и  потпуно електронског система паљења возила
-Контрола, поправка, замена и подешавање елемената електронских система за убризгавање ОТО мотора 
-Контрола, поправка, замена и подешавање елемената система за контролу пуњења ваздухом ОТО мотора 
-Контрола, поправка, замена и подешавање елемената индиректних и директних електронских система за убризгавање бензина
-Контрола, поправка, замена и подешавање елемената комбинованих електронских система паљења и убризгавања ОТО мотора 
-Контрола, замена елемената и провера емисије издувних гасова ОТО мотора 
-Контрола, поправка, замена и подешавање елемената система за снабдевање ваздухом дизел мотора 
-Контрола, поправка, замена и подешавање елемената електронског система убризгавања дизел мотора са редном пумпом високог притиска
-Контрола, поправка, замена и подешавање елемената електронског система убризгавања дизел мотора са разделним пумпама високог притиска
-Контрола, поправка, замена и подешавање елемената електронског система убризгавања дизел мотора са заједничком акумулаторском цеви (Common Rail)
-Контрола, поправка, замена и подешавање елемената електронског система убризгавања дизел мотора са појединачним системима за убризгавање (систем пумпа-бризгач и систем пумпа-вод-бризгач)
-Контрола и тестирање издувних гасова дизел мотора

</textarea> </pre>    
             
            
        </div>
    
<?php
mysqli_free_result($result);
mysqli_close($conn);
?>

</body></html>
