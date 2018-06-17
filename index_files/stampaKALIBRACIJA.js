function myFunction() {
	alert("Stavi blanko obrazac u stampac");
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
   
   //-------------pocetak dijaloga sa korisnikom------------

   var Xoff1 = prompt("Unesi koordinatu x spoljne strane","");
   var Yoff1 = prompt("Unesi koordinatu y spoljne strane","");
   var Xoff2 = prompt("Unesi koordinatu x unutrasnje strane","");
   var Yoff2 = prompt("Unesi koordinatu y unutrasnje strane","");
   
   localStorage.xSpolj = Xoff1;
   localStorage.ySpolj = Yoff1;
   localStorage.xUnut = Xoff2;
   localStorage.yUnut = Yoff2;
   
}
