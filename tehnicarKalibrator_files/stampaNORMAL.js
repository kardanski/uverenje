
//------------krece stampanje----------------------
function myFunction() {
	//ovo sto pocinije ispod je bilo pre poziva funkcije
	var XoffSpolj = localStorage.xSpolj; //ucitavanje iz local storage kao STRINGA
var XoffSpoljBroj = parseFloat(XoffSpolj);//prebacivanje iz STRINGA U FLOAT. Sad moze da se dopise nesto tipa +2 ili *3
XoffSpolj = XoffSpoljBroj.toString();//vracam nazad u string


var YoffSpolj = localStorage.ySpolj; //ucitavanje iz local storage kao STRINGA
var YoffSpoljBroj = parseFloat(YoffSpolj) * (-1);//prebacivanje iz STRINGA U FLOAT. Sad moze da se dopise nesto tipa +2 ili *3
YoffSpolj = YoffSpoljBroj.toString();//vracam nazad u string


var XoffUnut = localStorage.xUnut; //ucitavanje iz local storage kao STRINGA
var XoffUnutBroj = parseFloat(XoffUnut);//prebacivanje iz STRINGA U FLOAT. Sad moze da se dopise nesto tipa +2 ili *3
XoffUnut = XoffUnutBroj.toString();//vracam nazad u string


var YoffUnut = localStorage.yUnut; //ucitavanje iz local storage kao STRINGA
var YoffUnutBroj = parseFloat(YoffUnut) * (-1);//prebacivanje iz STRINGA U FLOAT. Sad moze da se dopise nesto tipa +2 ili *3
YoffUnut = YoffUnutBroj.toString();//vracam nazad u string



document.getElementById("spoljna").style.left = XoffSpolj.concat("mm");        //pisanje u style od div spolj i div unut
document.getElementById("spoljna").style.top = YoffSpolj.concat("mm");         //od stranice za normalnu stampu

document.getElementById("unutrasnja").style.left = XoffUnut.concat("mm");  
document.getElementById("unutrasnja").style.top = YoffUnut.concat("mm");  
//ovo iznad je bilo iznad poziva funkcije
	
	var divSaIkonicama=document.getElementById("alati");
	divSaIkonicama.style.display="none";
	
var polja=document.getElementsByTagName("textarea");



for (var i = 0; i < polja.length; i++) {
    polja[i].style.color = "black";//crna slova za stampu
    polja[i].style.borderStyle="none";//pri stampi da se ne vidi okvir textarea
    polja[i].style.resize="none";// da se ne vidi handle pri stampi. Mozda i ne treba
    polja[i].setAttribute("placeholder","");//da se obrise placeholder
}

    window.print();
   
    for (var i = 0; i < polja.length; i++) {
    polja[i].style.color = "yellow";//zuta slova na ekranu
    polja[i].style.borderStyle="dotted";    //da se vidi border od textarea na ekranu
   }
   
   divSaIkonicama.style.display="block"; //da se ponovo vide ikonice
   

document.getElementById("spoljna").style.left = "0";        
document.getElementById("spoljna").style.top = "0";         
document.getElementById("unutrasnja").style.left = "0";  
document.getElementById("unutrasnja").style.top = "0";  
   
}

