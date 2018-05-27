

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
								else($cost = "There was an error in processing your info.");

							
	
						echo "PICK UP STATE".""." = "."".$origin ."<br>".
							  "DELIVERY STATE".""." = "."".$destination ."<br>".
								"ZONE".""." = "."".$zone ."<br>".
									"WEIGHT OF ITEM(kg)".""." = "."".$weight."<br>".
										"TOTAL COST".""." = "."".$cost; 
										
										$q = "INSERT INTO records(origin,destination,zone,weight,cost) VALUES ('$origin','$destination','$zone','$weight','$cost')";
												$r = mysql_query($q) or die ("couldent execute $q");
	?>