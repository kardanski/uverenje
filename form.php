<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Unos podataka</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>
input:required {
    background-color: yellow;
}
#insert{
        border-radius:3px;
        padding:10px;
        transition: ease 0.2s;
        background-color:#33cc33;
        border: 2px #33cc33;
        font-weight:bold;
    }
    #insert:hover{
        border: 2px #5cd65c;
        cursor:pointer;
        background-color:#33cc33;
        color:#d6f5d6;
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
		<?php require_once('navigacija.php') ?>
		
		<form id="form_30576" class="appnitro"  method="post" action="save.php">
					<div class="form_description">
					    
			<h2>Unos podataka</h2>
			<p>Formular za unošenje podataka o učeniku</p>
		</div>						
			<ul >
		<li id="li_3" >
		<label class="description" for="odeljenje">Izabrati odeljenje </label>
		<div>
		<select required class="element select medium" id="element_3" name="odeljenje"> 
			<option value="" selected="selected"></option>
<option value="e41" >E41</option>
<option value="e42" >E42</option>
		</select>
		</div><p class="guidelines" id="guide_3"><small>izabrati odeljenje</small></p> 
		</li>	
					<li id="li_1" >
		<label class="description" for="element_1">Ime </label>
		<div>
			<input required id="element_1" name="ime" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti ime učenika</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Prezime </label>
		<div>
			<input required id="element_2" name="prezime" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>uneti prezime učenika</small></p> 
		</li>	
		<li id="li_1" >
		<label class="description" for="element_1">Broj u matičnoj knjizi </label>
		<div>
			<input required id="element_1" name="brmk" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti broj u mk</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Ime roditelja </label>
		<div>
			<input required id="element_1" name="imeroditelja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti ime roditelja</small></p>	
		
		<li id="li_1" >
		<label class="description" for="element_1">Datum rodjenja (primer: 06.12.)</label>
		<div>
			<input required id="element_1" name="datumrodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti datum rodjenja primer: 07.03.</small></p>				
		
		<li id="li_1" >
		<label class="description" for="uspeh1">Izabrati godinu rodjenja </label>
		<div>
		<select required class="element select medium" id="element_3" name="godinarodjenja"> 
			<option value="" selected="selected"></option>
<option value="1989." >1989.</option>
<option value="1990." >1990.</option>
<option value="1991." >1991.</option>
<option value="1992." >1992.</option>
<option value="1993." >1993.</option>
<option value="1994." >1994.</option>
<option value="1995." >1995.</option>
<option value="1996." >1996.</option>
<option value="1997." >1997.</option>
<option value="1998." >1998.</option>
<option value="1999." >1999.</option>
<option value="2000." >2000.</option>
<option value="2001." >2001.</option>
<option value="2002." >2002.</option>
<option value="2000." >2003.</option>
<option value="2001." >2004.</option>
<option value="2002." >2005.</option>

		</select>			
	</div><p class="guidelines" id="guide_3"><small>Izabrati godinu rodjenja</small></p> 
		</li>
		<li id="li_1" >
		<label class="description" for="element_1">Mesto rodjenja </label>
		<div>
			<input required id="element_1" name="mestorodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti mesto rodjenja</small></p>			
					
		<li id="li_1" >
		<label class="description" for="element_1">Opština rodjenja </label>
		<div>
			<input required id="element_1" name="opstinarodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti opštinu rodjenja</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Država rodjenja </label>
		<div>
			<input required id="element_1" name="drzavarodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti državu rodjenja</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Delovodni broj</label><br> <label class="description" for="element_1">
		     </label>
		<div>
			<input required id="element_1" name="delovodnibridatdiplome" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti delovodni br </small></p>
		<li id="li_1" >
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh I razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh I razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh II razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh II razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh III razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh III razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh IV razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh4" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh IV razred</small></p>
		<br>
		<br>
		<li id="li_3" >
		<label class="description" style="text-decoration:underline;font-size:18px;">Radni zadaci - maturski ispit:</label>
		<br>
		<table>
		    
		    <tr>
		        <td><label class="description">Broj kombinacije: </label></td>
		        <td>
		        <select required style="width:50px"class="element select medium" id="element_3" name="brojzadatak"> 
			<option value="" selected="selected"></option>
<option value="1" > 01</option>
<option value="2" > 02</option>
<option value="3" > 03</option>
<option value="4" > 04</option>
<option value="5" > 05</option>
<option value="6" > 06</option>
<option value="7" > 07</option>
<option value="8" > 08</option>
<option value="9" > 09</option>
<option value="10" > 10</option>
<option value="11" > 11</option>
<option value="12" > 12</option>
<option value="13" > 13</option>
<option value="14" > 14</option>
<option value="15" > 15</option>
<option value="16" > 16</option>
<option value="17" > 17</option>
<option value="18" > 18</option>
<option value="19" > 19</option>
<option value="20" > 20</option>
<option value="21" > 21</option>
<option value="22" > 22</option>
<option value="23" > 23</option>
<option value="24" > 24</option>
<option value="25" > 25</option>
<option value="26" > 26</option>
<option value="27" > 27</option>
<option value="28" > 28</option>
<option value="29" > 29</option>
<option value="30" > 30</option>
<option value="31" > 31</option>
<option value="32" > 32</option>
<option value="33" > 33</option>
<option value="34" > 34</option>
<option value="35" > 35</option>
<option value="36" > 36</option>
<option value="37" > 37</option>
<option value="38" > 38</option>
<option value="39" > 39</option>
<option value="40" > 40</option>
<option value="41" > 41</option>
<option value="42" > 42</option>
<option value="43" > 43</option>
<option value="44" > 44</option>
<option value="45" > 45</option>
<option value="46" > 46</option>
<option value="47" > 47</option>
<option value="48" > 48</option>
		</select> </td>
		    </tr>
		    <tr>
		        <td ><label class="description" style="text-align:right;">Uspeh:</label></td>
		        <td>
		        <select  required style="width:150px"class="element select medium" id="element_3" name="uspehzadatak"> 
			<option value="" selected="selected"></option>
<option value="недовољан (1)" > недовољан (1)</option>
<option value="довољан (2)" > довољан (2)</option>
<option value="добар (3)" > добар (3)</option>
<option value="врло добар (4)" > врло добар (4)</option>
<option value="одличан (5)" > одличан (5)</option>

		</select> </td>
		
		    </tr>
		    
		    
		</table>
		
		<br>
		<li id="li_3" >
		<label class="description" style="text-decoration:underline;font-size:18px;">Test - maturski ispit:</label>
		<br>
		<table>
        <tr><td> <label class="description">Ostvareni bodovi na testu - teorija: </label></td> </tr>
        <tr><td><input  required id="element_1" name="brojbodovatest" class="element text medium" type="text" maxlength="255" value=""/> </td> </tr>
		</table>
		
		<br><br>
					<li class="buttons">
			    <input type="hidden" name="form_id" value="30576" />
			    
				<input id="insert" class="button_text" type="submit" name="submit" value="Unesi podatke" />
		</li>
			</ul>
		</form>	
		
	</div>
	
	</body>
</html>