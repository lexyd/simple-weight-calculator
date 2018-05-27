
<html>
	<head>
			<title></title>
			<script src="js/jquery.js" type="text/javascript"></script>
			<script src="js/lesson1.js" type="text/javascript"></script> 
			
			
		

	</head>
	<body>

<?php
		$origin="";
		$weight="";
		$aba="";
		$abk="";
		$abakaliki="";
		$abuja="";
		$ado_ekiti="";
		$akure="";
		$asaba="";
		$bauchi="";
		$benin="";
		$bonny="";
		$calabar="";
		$eket="";
		$enugu="";
		$gwagwadalada="";
		$ibadan="";
		$ife="";
		$ijebu_ode="";
		$ilorin="";
		$jos="";
		$kaduna="";
		$kano="";
		$kastina="";
		$lafia="";
		$lokoja="";
		$lagos="";
		$makurdi="";
		$maiduguri="";
		$minna="";
		$nnewi="";
		$nsuka="";
		$onitsha="";
		$owerri="";
		$oshsogbo="";
		$port_harcourt="";
		$warri="";
		$sapele="";
		$sokoto="";
		$umuaihia="";
		$uyo="";
		$yenagoa="";
		$yola="";
		$zaria="";
		
	?>

<form action="index.php" method ="POST">

<div class ="buttons">
<p>ORIGIN / PICK UP STATE


 <select name="origin">
   <option value="">LOCATION</option>
    <option value="aba"id="show1"	>ABA</option>
	 <option value="abeokuta"	id="show2"	>ABEOKUTA</option>
	 <option value="ABAKALIKI"	id="show3"	>ABAKALIKI</option>
	 <option value="ABUJA"		id="show4" >ABUJA</option>
	 <option value="ADO EKITI"  id="show5">ADO EKITI</option>
	 <option value="AKURE" 		id="show6">AKURE</option>
	 <option value="ASABA"		id="show7">ASABA</option>
	 <option value="BAUCHI" id="show8">BAUCHI</option>
	 <option value="BENIN" id="show9">BENIN</option>
	 <option value="BONNY"id="show10">BONNY</option>
	 <option value="CALABAR"id="show11">CALABAR</option>
	 <option value="EKET"id="show12">EKET</option>
	 <option value="ENUGU"id="show13">ENUGU</option>
	 <option value="GWAGWALADA"id="show14">GWAGWALADA</option>
	 <option value="IBADAN"id="show15">IBADAN</option>
	 <option value="IFE"id="show16">IFE</option>
	 <option value="IJEBU ODE"id="show17">IJEBU ODE</option>
	 <option value="ILORIN"id="show18">ILORIN</option>
	 <option value="JOS"id="show19">JOS</option>
	 <option value="KADUNA"id="show20">KADUNA</option>
	 <option value="KANO"id="show21">KANO</option>
	 <option value="KASTINA"id="show22">KASTINA</option>
	 <option value="LAFIA"id="show23">LAFIA</option>
	 <option value="LOKOJA"id="show24">LOKOJA</option>
	 <option value="LAGOS"id="show25">LAGOS</option>
	 <option value="MAKURDI"id="show26">MAKURDI</option>
	 <option value="MAIDUGURI"id="show27">MAIDUGURI</option>
	 <option value="MINNA"id="show28">MINNA</option>
	 <option value="NNEWI"id="show29">NNEWI</option>
	 <option value="NSUKA"id="show30">NSUKA</option>
	 <option value="ONITSHA"id="show31">ONITSHA</option>
	 <option value="OWERRI"id="show32">OWERRI</option>
	 <option value="OSHSOGBO"id="show33">OSHSOGBO</option>
	 <option value="PORT-HARCOURT"id="show34">PORT-HARCOURT</option>
	 <option value="WARRI"id="show35">WARRI</option>
	 <option value="SAPELE"id="show36">SAPELE</option>
	 <option value="SOKOTO/GUSAU"id="show37">SOKOTO/GUSAU</option>
	 <option value="UMUAIHIA"id="show38">UMUAIHIA</option>
	 <option value="UYO"id="show39">UYO</option>
	 <option value="YENAGOA"id="show40">YENAGOA</option>
	 <option value="YOLA/JALINGO"id="show41">YOLA/JALINGO</option>
	 <option value="ZARIA"id="show42">ZARIA</option>
	  
	</select>
	</div>
	
</p>

<p>
  <div id ="div1" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="aba">
				  <option value="">LOCATION</option>
				  <option value="ABA1">ABA</option>
				 <option value="ABEOKUTA4">ABEOKUTA</option>
				 <option value="ABAKALIKI2">ABAKALIKI</option>
				 <option value="ABUJA4">ABUJA</option>
				 <option value="ADO EKITI4">ADO EKITI</option>
				 <option value="AKURE4">AKURE</option>
				 <option value="ASABA2">ASABA</option>
				 <option value="BAUCHI4">BAUCHI</option>
				 <option value="BENIN2">BENIN</option>
				 <option value="BONNY2">BONNY</option>
				 <option value="CALABAR2">CALABAR</option>
				 <option value="EKET2">EKET</option>
				 <option value="ENUGU2">ENUGU</option>
				 <option value="GWAGWALADA4">GWAGWALADA</option>
				 <option value="IBADAN4">IBADAN</option>
				 <option value="IFE4">IFE</option>
				 <option value="IJEBU ODE4">IJEBU ODE</option>
				 <option value="ILORIN4">ILORIN</option>
				 <option value="JOS4">JOS</option>
				 <option value="KADUNA4">KADUNA</option>
				 <option value="KANO4">KANO</option>
				 <option value="KASTINA4">KASTINA</option>
				 <option value="LAFIA4">LAFIA</option>
				 <option value="LOKOJA4">LOKOJA</option>
				 <option value="LAGOS3">LAGOS</option>
				 <option value="MAKURDI2">MAKURDI</option>
				 <option value="MAIDUGURI4">MAIDUGURI</option>
				 <option value="MINNA4">MINNA</option>
				 <option value="NNEWI2">NNEWI</option>
				 <option value="NSUKA2">NSUKA</option>
				 <option value="ONITSHA2">ONITSHA</option>
				 <option value="OWERRI2">OWERRI</option>
				 <option value="OSHSOGBO4">OSHSOGBO</option>
				 <option value="PORT-HARCOURT2">PORT-HARCOURT</option>
				 <option value="WARRI2">WARRI</option>
				 <option value="SAPELE2">SAPELE</option>
				 <option value="SOKOTO/GUSAU4">SOKOTO/GUSAU</option>
				 <option value="UMUAIHIA2">UMUAIHIA</option>
				 <option value="UYO2">UYO</option>
				 <option value="YENAGOA2">YENAGOA</option>
				 <option value="YOLA/JALINGO4">YOLA/JALINGO</option>
				 <option value="ZARIA4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div2" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="abk">
				  <option value="">LOCATION</option>
				  <option value="aba3">ABA</option>
				 <option value="ABEOKUTA1">ABEOKUTA</option>
				 <option value="ABAKALIKI4">ABAKALIKI</option>
				 <option value="ABUJA	3">ABUJA</option>
				 <option value="ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	3">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	3">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>


<p>
  <div id ="div3" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="abakaliki">
				  <option value="">LOCATION</option>
				  <option value="aba 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	1">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	3">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	3">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	3">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	3">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>


<p>
  <div id ="div4" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="abuja">
				  <option value="">LOCATION</option>
				  <option value="aba 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	3">ABAKALIKI</option>
				 <option value="	ABUJA	1">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	3">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	3">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	3">NNEWI</option>
				 <option value="	NSUKA	3">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	3">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO 2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div5" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="ado_ekiti">
				  <option value="">LOCATION</option>
				  <option value="aba 4">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA 4	">ABUJA</option>
				 <option value="	ADO EKITI	1">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>
<p>
  <div id ="div6" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="akure">
				  <option value="">LOCATION</option>
				   <option value="aba 4">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	1">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div7" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="asaba">
				  <option value="">LOCATION</option>
				  <option value="aba 2">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	1">ASABA</option>
				 <option value="	BAUCHI	3">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	3">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	3">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	3">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	3">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	3">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>
<p>
  <div id ="div8" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="bauchi">
				  <option value="">LOCATION</option>
				   <option value="ABA 4 ">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	3">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	3">ASABA</option>
				 <option value="	BAUCHI	1">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	3">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	3">NNEWI</option>
				 <option value="	NSUKA	3">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	3">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div9" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="benin">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	1">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div10" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="bonny">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	1">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	3">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	3">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div11" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="calabar">
				  <option value="">LOCATION</option>
				   <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	1">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	3">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div12" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="eket">
				  <option value="">LOCATION</option>
				   <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	1">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div13" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="enugu">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	3">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	1">GWAGWALADA</option>
				 <option value="	IBADAN	3">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	3">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	3">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div14" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="gwagwadalada">
				  <option value="">LOCATION</option>
				  <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	3">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	3">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	3">ENUGU</option>
				 <option value="	GWAGWALADA	1">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	3">NNEWI</option>
				 <option value="	NSUKA	3">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	3">WARRI</option>
				 <option value="	SAPELE	3">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	3">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div15" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="ibadan">
				  <option value="">LOCATION</option>
				   <option value="ABA 3">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	3">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	1">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	3">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div16" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="ife">
				  <option value="">LOCATION</option>
				   <option value="ABA 3">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	3">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	1">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div17" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="ijebu_ode">
				  <option value="">LOCATION</option>
				  <option value="ABA 3">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	3">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	1">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div18" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="ilorin">
				  <option value="">LOCATION</option>
				   <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	3">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	1">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div19" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="jos">
				  <option value="">LOCATION</option>
				  <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	1">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div20" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="kaduna">
				  <option value="">LOCATION</option>
				   <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	1">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div21" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="kano">
				  <option value="">LOCATION</option>
				    <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	1">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div22" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="kastina">
				  <option value="">LOCATION</option>
				 <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	1">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div23" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="lafia">
				  <option value="">LOCATION</option>
				    <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	1">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div24" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="lokoja">
				  <option value="">LOCATION</option>
				    <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	3">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	3">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	3">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	1">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	3">NNEWI</option>
				 <option value="	NSUKA	3">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	3">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div25" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="lagos">
				  <option value="">LOCATION</option>
				     <option value="ABA 3">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	3">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	3">ASABA</option>
				 <option value="	BAUCHI	3">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	3">BONNY</option>
				 <option value="	CALABAR	3">CALABAR</option>
				 <option value="	EKET	3">EKET</option>
				 <option value="	ENUGU	3">ENUGU</option>
				 <option value="	GWAGWALADA	3">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	3">JOS</option>
				 <option value="	KADUNA	3">KADUNA</option>
				 <option value="	KANO	3">KANO</option>
				 <option value="	KASTINA	3">KASTINA</option>
				 <option value="	LAFIA	3">LAFIA</option>
				 <option value="	LOKOJA	3">LOKOJA</option>
				 <option value="	LAGOS	1">LAGOS</option>
				 <option value="	MAKURDI	3">MAKURDI</option>
				 <option value="	MAIDUGURI	3">MAIDUGURI</option>
				 <option value="	MINNA	3">MINNA</option>
				 <option value="	NNEWI	3">NNEWI</option>
				 <option value="	NSUKA	3">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	3">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	3">UMUAIHIA</option>
				 <option value="	UYO	3">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	3">YOLA/JALINGO</option>
				 <option value="	ZARIA	3">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div26" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="makurdi">
				  <option value="">LOCATION</option>
				    <option value="ABA 2 ">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	1">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div27" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="maiduguri">
				  <option value="">LOCATION</option>
				     <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	1">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div28" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="minna">
				  <option value="">LOCATION</option>
				  <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	3">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	3">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	1">MINNA</option>
				 <option value="	NNEWI	3">NNEWI</option>
				 <option value="	NSUKA	3">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	3">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div29" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="nnewi">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	3">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	3">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	3">MINNA</option>
				 <option value="	NNEWI	1">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div30" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="nsuka">
				  <option value="">LOCATION</option>
				   <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	3">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	3">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	3">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	1">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div31" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="onitsha">
				  <option value="">LOCATION</option>
				 <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	3">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	3">ADO EKITI</option>
				 <option value="	AKURE	3">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	3">IBADAN</option>
				 <option value="	IFE	3">IFE</option>
				 <option value="	IJEBU ODE	3">IJEBU ODE</option>
				 <option value="	ILORIN	3">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	1">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	3">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div32" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="owerri">
				  <option value="">LOCATION</option>
				 <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	3">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	3">ADO EKITI</option>
				 <option value="	AKURE	3">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	3">IBADAN</option>
				 <option value="	IFE	3">IFE</option>
				 <option value="	IJEBU ODE	3">IJEBU ODE</option>
				 <option value="	ILORIN	3">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	1">OWERRI</option>
				 <option value="	OSHSOGBO	3">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div33" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="oshsogbo">
				  <option value="">LOCATION</option>
				  <option value="ABA 3">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	3">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	2">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	3">ONITSHA</option>
				 <option value="	OWERRI	3">OWERRI</option>
				 <option value="	OSHSOGBO	1">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	3">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	3">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div34" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="port_harcourt">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	3">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	3">ADO EKITI</option>
				 <option value="	AKURE	3">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	3">IBADAN</option>
				 <option value="	IFE	3">IFE</option>
				 <option value="	IJEBU ODE	3">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	3">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	1">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div35" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="warri">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI 2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	3">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	1">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>m
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div36" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="sapele">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	2">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	2">ADO EKITI</option>
				 <option value="	AKURE	2">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	2">IBADAN</option>
				 <option value="	IFE	2">IFE</option>
				 <option value="	IJEBU ODE	2">IJEBU ODE</option>
				 <option value="	ILORIN	3">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	2">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	2">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	1">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div37" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="sokoto">
				  <option value="">LOCATION</option>
				 <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	1">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div38" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="umuaihia">
				  <option value="">LOCATION</option>
				  <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	3">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	3">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	3">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	3">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	3">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	1">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div39" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="uyo">
				  <option value="">LOCATION</option>
				 <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	1">UYO</option>
				 <option value="	YENAGOA	2">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div40" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="yenagoa">
				  <option value="">LOCATION</option>
				 <option value="ABA 2">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	2">ABAKALIKI</option>
				 <option value="	ABUJA	4">ABUJA</option>
				 <option value="	ADO EKITI	3">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	2">ASABA</option>
				 <option value="	BAUCHI	4">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	2">BONNY</option>
				 <option value="	CALABAR	2">CALABAR</option>
				 <option value="	EKET	2">EKET</option>
				 <option value="	ENUGU	2">ENUGU</option>
				 <option value="	GWAGWALADA	4">GWAGWALADA</option>
				 <option value="	IBADAN	3">IBADAN</option>
				 <option value="	IFE	3">IFE</option>
				 <option value="	IJEBU ODE	3">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	4">JOS</option>
				 <option value="	KADUNA	4">KADUNA</option>
				 <option value="	KANO	4">KANO</option>
				 <option value="	KASTINA	4">KASTINA</option>
				 <option value="	LAFIA	4">LAFIA</option>
				 <option value="	LOKOJA	4">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	4">MAIDUGURI</option>
				 <option value="	MINNA	4">MINNA</option>
				 <option value="	NNEWI	2">NNEWI</option>
				 <option value="	NSUKA	2">NSUKA</option>
				 <option value="	ONITSHA	2">ONITSHA</option>
				 <option value="	OWERRI	2">OWERRI</option>
				 <option value="	OSHSOGBO	3">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	2">PORT-HARCOURT</option>
				 <option value="	WARRI	2">WARRI</option>
				 <option value="	SAPELE	2">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	4">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	2">UMUAIHIA</option>
				 <option value="	UYO	2">UYO</option>
				 <option value="	YENAGOA	1">YENAGOA</option>
				 <option value="	YOLA/JALINGO	4">YOLA/JALINGO</option>
				 <option value="	ZARIA	4">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div41" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="yola">
				  <option value="">LOCATION</option>
				  <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	4">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	2">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	1">YOLA/JALINGO</option>
				 <option value="	ZARIA	2">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>

<p>
  <div id ="div42" class="state">
  <label> DESTINATION / DELIVERY STATE
  
    <select name="zaria">
				  <option value="">LOCATION</option>
				  <option value="ABA 4">ABA</option>
				 <option value="	ABEOKUTA	4">ABEOKUTA</option>
				 <option value="	ABAKALIKI	4">ABAKALIKI</option>
				 <option value="	ABUJA	2">ABUJA</option>
				 <option value="	ADO EKITI	4">ADO EKITI</option>
				 <option value="	AKURE	4">AKURE</option>
				 <option value="	ASABA	4">ASABA</option>
				 <option value="	BAUCHI	2">BAUCHI</option>
				 <option value="	BENIN	2">BENIN</option>
				 <option value="	BONNY	4">BONNY</option>
				 <option value="	CALABAR	4">CALABAR</option>
				 <option value="	EKET	4">EKET</option>
				 <option value="	ENUGU	4">ENUGU</option>
				 <option value="	GWAGWALADA	2">GWAGWALADA</option>
				 <option value="	IBADAN	4">IBADAN</option>
				 <option value="	IFE	4">IFE</option>
				 <option value="	IJEBU ODE	4">IJEBU ODE</option>
				 <option value="	ILORIN	4">ILORIN</option>
				 <option value="	JOS	2">JOS</option>
				 <option value="	KADUNA	2">KADUNA</option>
				 <option value="	KANO	2">KANO</option>
				 <option value="	KASTINA	2">KASTINA</option>
				 <option value="	LAFIA	2">LAFIA</option>
				 <option value="	LOKOJA	2">LOKOJA</option>
				 <option value="	LAGOS	3">LAGOS</option>
				 <option value="	MAKURDI	4">MAKURDI</option>
				 <option value="	MAIDUGURI	2">MAIDUGURI</option>
				 <option value="	MINNA	2">MINNA</option>
				 <option value="	NNEWI	4">NNEWI</option>
				 <option value="	NSUKA	4">NSUKA</option>
				 <option value="	ONITSHA	4">ONITSHA</option>
				 <option value="	OWERRI	4">OWERRI</option>
				 <option value="	OSHSOGBO	4">OSHSOGBO</option>
				 <option value="	PORT-HARCOURT	4">PORT-HARCOURT</option>
				 <option value="	WARRI	4">WARRI</option>
				 <option value="	SAPELE	4">SAPELE</option>
				 <option value="	SOKOTO/GUSAU	2">SOKOTO/GUSAU</option>
				 <option value="	UMUAIHIA	4">UMUAIHIA</option>
				 <option value="	UYO	4">UYO</option>
				 <option value="	YENAGOA	4">YENAGOA</option>
				 <option value="	YOLA/JALINGO	2">YOLA/JALINGO</option>
				 <option value="	ZARIA	1">ZARIA</option>
        </select>
	
  </label>
  </div>
</p>


     
	
    <div id="weight">
<p>
  <label>WEIGHT 
    <select name="weight">
	<option value="">KG</option>
      <option value="0.5">0.5 KG</option>
      <option value="1">1 KG</option>
      <option value="1.5">1.5 KG</option>
      <option value="2">2 KG</option>
      <option value="2.5">2.5 KG</option>
      <option value="3">3 KG</option>
      <option value="3.5">3.5 KG</option>
      <option value="4">4 KG</option>
      <option value="4.5">4.5 KG</option>
      <option value="5">5 KG</option>
      <option value="5.5">5.5 KG</option>
      <option value="6">6 KG</option>
      <option value="6.5">6.5 KG</option>
      <option value="7">7 KG</option>
      <option value="7.5">7.5 KG</option>
      <option value="8">8 KG</option>
      <option value="8.5">8.5 KG</option>
      <option value="9">9 KG</option>
      <option value="9.5">9.5 KG</option>
      <option value="10">10 KG</option>
    
    </select>
  </label>
</p>
</div>
	
<p>
  <input type="submit" name="price" id="button" value="calculate" />	
</p>


</form>

		
	
<?php
 
				$host="localhost";
				$user="root";
				$database="ipost";
				$password = "";
				$connection = mysql_connect($host,$user,$password) or die ("couldnet connect to sever");
				$db = mysql_select_db($database,$connection) or die ("couldnt select database");
				
			
			
			?>
	<?php

	if(isset($_POST['price']))	 {

		
		$origin=$_POST['origin'];
		$weight=$_POST['weight'];
		$aba=$_POST['aba'];
		$abk=$_POST['abk'];
		$abakaliki=$_POST['abakaliki'];
		$abuja=$_POST['abuja'];
		$ado_ekiti=$_POST['ado_ekiti'];
		$akure=$_POST['akure'];
		$asaba=$_POST['asaba'];
		$bauchi=$_POST['bauchi'];
		$benin=$_POST['benin'];
		$bonny=$_POST['bonny'];
		$calabar=$_POST['calabar'];
		$eket=$_POST['eket'];
		$enugu=$_POST['enugu'];
		$gwagwadalada=$_POST['gwagwadalada'];
		$ibadan=$_POST['ibadan'];
		$ife=$_POST['ife'];
		$ijebu_ode=$_POST['ijebu_ode'];
		$ilorin=$_POST['ilorin'];
		$jos=$_POST['jos'];
		$kaduna=$_POST['kaduna'];
		$kano=$_POST['kano'];
		$kastina=$_POST['kastina'];
		$lafia=$_POST['lafia'];
		$lokoja=$_POST['lokoja'];
		$lagos=$_POST['lagos'];
		$makurdi=$_POST['makurdi'];
		$maiduguri=$_POST['maiduguri'];
		$minna=$_POST['minna'];
		$nnewi=$_POST['nnewi'];
		$nsuka=$_POST['nsuka'];
		$onitsha=$_POST['onitsha'];
		$owerri=$_POST['owerri'];
		$oshsogbo=$_POST['oshsogbo'];
		$port_harcourt=$_POST['port_harcourt'];
		$warri=$_POST['warri'];
		$sapele=$_POST['sapele'];
		$sokoto=$_POST['sokoto'];
		$umuaihia=$_POST['umuaihia'];
		$uyo=$_POST['uyo'];
		$yenagoa=$_POST['yenagoa'];
		$yola=$_POST['yola'];
		$zaria=$_POST['zaria'];
		
		
		
		
		
		
		
	}
	
$destination = substr("$aba"."$abk"."$abakaliki"."$abuja"."$ado_ekiti"."$akure"."$asaba"."$bauchi"."$benin"."$bonny"."$calabar"."$eket"."$enugu"."$gwagwadalada"."$ibadan"."$ife"."$ijebu_ode".
"$ilorin"."$jos"."$kaduna"."$kano"."$kastina"."$lafia"."$lokoja"."$lagos"."$makurdi"."$maiduguri"."$minna"."$nnewi"."$nsuka"."$onitsha"."$owerri"."$oshsogbo"."$port_harcourt"."$warri"."$sapele"."$sokoto"."$umuaihia"."$uyo"."$yenagoa"."$yola"."$zaria",0,-1);
$zone = substr("$aba"."$abk"."$abakaliki"."$abuja"."$ado_ekiti"."$akure"."$asaba"."$bauchi"."$benin"."$bonny"."$calabar"."$eket"."$enugu"."$gwagwadalada"."$ibadan"."$ife"."$ijebu_ode".
"$ilorin"."$jos"."$kaduna"."$kano"."$kastina"."$lafia"."$lokoja"."$lagos"."$makurdi"."$maiduguri"."$minna"."$nnewi"."$nsuka"."$onitsha"."$owerri"."$oshsogbo"."$port_harcourt"."$warri"."$sapele"."$sokoto"."$umuaihia"."$uyo"."$yenagoa"."$yola"."$zaria",-1);

	

	$cost = 0;
	
	
							if($zone==1&&$weight==0.5){
								$cost=750;
							}elseif($zone==1&&$weight==1){
								$cost=1100;
							}elseif($zone==1&&$weight==1.5){
								$cost=1500;
							}elseif($zone==1&&$weight==2){
								$cost=1850;
							}elseif($zone==1&&$weight==2.5){
								$cost=2150;
							}elseif($zone==1&&$weight==3){
								$cost=2500;
							}elseif($zone==1&&$weight==3.5){
								$cost=2900;
							}elseif($zone==1&&$weight==4){
								$cost=3200;
							}elseif($zone==1&&$weight==4.5){
								$cost=3550;
							}elseif($zone==1&&$weight==5){
								$cost=3850;
							}elseif($zone==1&&$weight==5.5){
								$cost=4150;
							}elseif($zone==1&&$weight==6){
								$cost=4450;
							}elseif($zone==1&&$weight==6.5){
								$cost=4800;
							}elseif($zone==1&&$weight==7){
								$cost=5150;
							}elseif($zone==1&&$weight==7.5){
								$cost=5500;
							}elseif($zone==1&&$weight==8){
								$cost=5850;
							}elseif($zone==1&&$weight==8.5){
								$cost=6000;
							}elseif($zone==1&&$weight==9){
								$cost=6500;
							}elseif($zone==1&&$weight==9.5){
								$cost=6800;
							}elseif($zone==1&&$weight==10){
								$cost=7250;
							}elseif($zone==2&&$weight==0.5){
								$cost=2250;
							}elseif($zone==2&&$weight==1){
								$cost=2650;
							}elseif($zone==2&&$weight==1.5){
								$cost=2950;
							}elseif($zone==2&&$weight==2){
								$cost=3350;
							}elseif($zone==2&&$weight==2.5){
								$cost=3750;
							}elseif($zone==2&&$weight==3){
								$cost=4000;
							}elseif($zone==2&&$weight==3.5){
								$cost=4450;
							}elseif($zone==2&&$weight==4){
								$cost=4750;
							}elseif($zone==2&&$weight==4.5){
								$cost=5000;
							}elseif($zone==2&&$weight==5){
								$cost=5350;
							}elseif($zone==2&&$weight==5.5){
								$cost=5650;
							}elseif($zone==2&&$weight==6){
								$cost=6000;
							}elseif($zone==2&&$weight==6.5){
								$cost=6300;
							}elseif($zone==2&&$weight==7){
								$cost=6600;
							}elseif($zone==2&&$weight==7.5){
								$cost=7000;
							}elseif($zone==2&&$weight==8){
								$cost=7350;
							}elseif($zone==2&&$weight==8.5){
								$cost=7650;
							}elseif($zone==2&&$weight==9){
								$cost=7950;
							}elseif($zone==2&&$weight==9.5){
								$cost=8250;
							}elseif($zone==2&&$weight==10){
								$cost=8650;
							}elseif($zone==3&&$weight==0.5){
								$cost=2850;
							}elseif($zone==3&&$weight==1){
								$cost=3250;
							}elseif($zone==3&&$weight==1.5){
								$cost=3550;
							}elseif($zone==3&&$weight==2){
								$cost=3950;
							}elseif($zone==3&&$weight==2.5){
								$cost=4250;
							}elseif($zone==3&&$weight==3){
								$cost=4500;
							}elseif($zone==3&&$weight==3.5){
								$cost=4950;
							}elseif($zone==3&&$weight==4){
								$cost=5150;
							}elseif($zone==3&&$weight==4.5){
								$cost=5500;
							}elseif($zone==3&&$weight==5){
								$cost=5850;
							}elseif($zone==3&&$weight==5.5){
								$cost=6150;
							}elseif($zone==3&&$weight==6){
								$cost=6500;
							}elseif($zone==3&&$weight==6.5){
								$cost=6800;
							}elseif($zone==3&&$weight==7){
								$cost=7150;
							}elseif($zone==3&&$weight==7.5){
								$cost=7500;
							}elseif($zone==3&&$weight==8){
								$cost=7800;
							}elseif($zone==3&&$weight==8.5){
								$cost=8250;
							}elseif($zone==3&&$weight==9){
								$cost=8500;
							}elseif($zone==3&&$weight==9.5){
								$cost=8850;
							}elseif($zone==3&&$weight==10){
								$cost=9500;
							}elseif($zone==4&&$weight==0.5){
								$cost=3950;
							}elseif($zone==4&&$weight==1){
								$cost=4650;
							}elseif($zone==4&&$weight==1.5){
								$cost=5250;
							}elseif($zone==4&&$weight==2){
								$cost=5750;
							}elseif($zone==4&&$weight==2.5){
								$cost=6350;
							}elseif($zone==4&&$weight==3){
								$cost=6850;
							}elseif($zone==4&&$weight==3.5){
								$cost=7350;
							}elseif($zone==4&&$weight==4){
								$cost=7850;
							}elseif($zone==4&&$weight==4.5){
								$cost=8250;
							}elseif($zone==4&&$weight==5){
								$cost=8850;
							}elseif($zone==4&&$weight==5.5){
								$cost=9250;
							}elseif($zone==4&&$weight==6){
								$cost=9750;
							}elseif($zone==4&&$weight==6.5){
								$cost=10250;
							}elseif($zone==4&&$weight==7){
								$cost=10750;
							}elseif($zone==4&&$weight==7.5){
								$cost=11250;
							}elseif($zone==4&&$weight==8){
								$cost=11850;
							}elseif($zone==4&&$weight==8.5){
								$cost=12250;
							}elseif($zone==4&&$weight==9){
								$cost=12750;
							}elseif($zone==4&&$weight==9.5){
								$cost=13150;
							}elseif($zone==4&&$weight==10){
								$cost=13750;
							}
								else($cost = "select from the above fields to view cost.");
?>
							
	<?php
						echo "PICK UP STATE".""." = "."".$origin ."<br>".
							  "DELIVERY STATE".""." = "."".$destination ."<br>".
								"ZONE".""." = "."".$zone ."<br>".
									"WEIGHT OF ITEM(kg)".""." = "."".$weight."<br>".
										"TOTAL COST".""." = "."".$cost; 
										?>
										
								
								<?php	
										$q = "INSERT INTO records(origin,destination,zone,weight,cost) VALUES ('$origin','$destination','$zone','$weight','$cost')";
		
										$r = mysql_query($q) or die ("couldent execute $q");
										
	?>		
</body>
</html>
