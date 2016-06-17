  <html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formula.css">
</head>
<body>		


<?php


$sexo=$_REQUEST['sexo'];
$edad=$_REQUEST['edad'];
$alturaH=$_REQUEST['altura1'];
$cinturaH=$_REQUEST['cintura1'];
$cadera=$_REQUEST['cadera'];
$cuelloH=$_REQUEST['cuello1'];
$cuelloM=$_REQUEST['cuello'];
$cinturaM=$_REQUEST['cintura'];
$alturaM=$_REQUEST['altura'];
$estado="";
	if ($_REQUEST['sexo']=='hombre'){
			$indiH=495/(1.0324-0.19077*(log10($cinturaH-$cuelloH))+0.15456*(log10($alturaH)))-450;
			$indiH=round($indiH,2);

		if (($edad>=19)&&($edad<=24)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
				}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=9)){
				$estado="Excelente";
				}
			if (($indiH>9)&&($indiH<=15)){
				$estado="Bueno";
				}
			if (($indiH>15)&&($indiH<=19)){
				$estado="Estandar";
				}
			if (($indiH>19)&&($indiH<=23)){
				$estado="Sobrepeso";
				} 
			if ($indiH>23){
				$estado="Obesidad";
				}
		}
		if (($edad>=25)&&($edad<=29)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
			}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=10)){
				$estado="Excelente";
				}
			if (($indiH>10)&&($indiH<=16)){
				$estado="Bueno";
				}
			if (($indiH>16)&&($indiH<=19)){
				$estado="Estandar";
				}
			if (($indiH>19)&&($indiH<=24)){
				$estado="Sobrepeso";
				} 
			if ($indiH>24){
				$estado="Obesidad";
				}
		}
		if (($edad>=30)&&($edad<=34)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
				}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=11)){
				$estado="Excelente";
				}
			if (($indiH>11)&&($indiH<=17)){
				$estado="Bueno";
				}
			if (($indiH>17)&&($indiH<=19)){
				$estado="Estandar";
				}
			if (($indiH>19)&&($indiH<=25)){
				$estado="Sobrepeso";
				} 
			if ($indiH>25){
				$estado="Obesidad";
				}
		}
			if (($edad>=35)&&($edad<=39)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
				}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=12)){
				$estado="Excelente";
				}
			if (($indiH>12)&&($indiH<=18)){
				$estado="Bueno";
				}
			if (($indiH>18)&&($indiH<=19)){
				$estado="Estandar";
				}
			if (($indiH>19)&&($indiH<=26)){
				$estado="Sobrepeso";
				} 
			if ($indiH>26){
				$estado="Obesidad";
				}
		}				

			if (($edad>=40)&&($edad<=44)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
				}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=13)){
				$estado="Excelente";
				}
			if (($indiH>13)&&($indiH<=19)){
				$estado="Bueno";
				}
			if (($indiH>19)&&($indiH<=19)){
				$estado="Estandar";
				}
			if (($indiH>19)&&($indiH<=27)){
				$estado="Sobrepeso";
				} 
			if ($indiH>27){
				$estado="Obesidad";
				}
		}				
				if (($edad>=45)&&($edad<=49)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
			}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=15)){
				$estado="Excelente";
				}
			if (($indiH>15)&&($indiH<=21)){
				$estado="Bueno";
				}
			if (($indiH>21)&&($indiH<=25)){
				$estado="Estandar";
				}
			if (($indiH>25)&&($indiH<=28)){
				$estado="Sobrepeso";
				} 
			if ($indiH>28){
				$estado="Obesidad";
				}
		}			
				if (($edad>=50)&&($edad<=54)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
			}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=17)){
				$estado="Excelente";
				}
			if (($indiH>17)&&($indiH<=23)){
				$estado="Bueno";
				}
			if (($indiH>23)&&($indiH<=26)){
				$estado="Estandar";
				}
			if (($indiH>26)&&($indiH<=29)){
				$estado="Sobrepeso";
				} 
			if ($indiH>29){
				$estado="Obesidad";
				}
		}		
				if (($edad>=55)&&($edad<=59)){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
			}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=19)){
				$estado="Excelente";
				}
			if (($indiH>19)&&($indiH<=24)){
				$estado="Bueno";
				}
			if (($indiH>24)&&($indiH<=28)){
				$estado="Estandar";
				}
			if (($indiH>28)&&($indiH<=30)){
				$estado="Sobrepeso";
				} 
			if ($indiH>30){
				$estado="Obesidad";
				}
		}		
				if ($edad>60){

			if (($indiH>0)&&($indiH<=2)){
				$estado="Esencial";
			}
			if (($indiH>2)&&($indiH<=6)){
				$estado="Atleta";
				}
			if (($indiH>6)&&($indiH<=20)){
				$estado="Excelente";
				}
			if (($indiH>20)&&($indiH<=25)){
				$estado="Bueno";
				}
			if (($indiH>25)&&($indiH<=29)){
				$estado="Estandar";
				}
			if (($indiH>29)&&($indiH<=31)){
				$estado="Sobrepeso";
				} 
			if ($indiH>31){
				$estado="Obesidad";
				}
		}					
echo $_REQUEST['nombre'].'  '."su indice de grasa corporal es del".' '.$indiH.'%'." el cual esta situado en el rango de".' '.$estado.' '."para personas de su sexo".'  '.$_REQUEST['sexo'];
}


	if ($_REQUEST['sexo']=='mujer'){
		$indiM=495/(1.29579-0.35004*(log10($cinturaM+$cadera-$cuelloM))+0.221*(log10($alturaM)))-450;
		$indiM=round($indiM,2);

			if (($edad>=19)&&($edad<=24)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=15)){
				$estado="Excelente";
				}
			if (($indiM>15)&&($indiM<=20)){
				$estado="Bueno";
				}
			if (($indiM>20)&&($indiM<=25)){
				$estado="Estandar";
				}
			if (($indiM>25)&&($indiM<=30)){
				$estado="Sobrepeso";
				} 
			if ($indiM>30){
				$estado="Obesidad";
				}
		}			
				if (($edad>=19)&&($edad<=24)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=15)){
				$estado="Excelente";
				}
			if (($indiM>15)&&($indiM<=20)){
				$estado="Bueno";
				}
			if (($indiM>20)&&($indiM<=25)){
				$estado="Estandar";
				}
			if (($indiM>25)&&($indiM<=30)){
				$estado="Sobrepeso";
				} 
			if ($indiM>30){
				$estado="Obesidad";
				}
		}			
				if (($edad>=25)&&($edad<=29)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=16)){
				$estado="Excelente";
				}
			if (($indiM>16)&&($indiM<=21)){
				$estado="Bueno";
				}
			if (($indiM>21)&&($indiM<=26)){
				$estado="Estandar";
				}
			if (($indiM>26)&&($indiM<=31)){
				$estado="Sobrepeso";
				} 
			if ($indiM>31){
				$estado="Obesidad";
				}
		}			
				if (($edad>=30)&&($edad<=34)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=17)){
				$estado="Excelente";
				}
			if (($indiM>17)&&($indiM<=22)){
				$estado="Bueno";
				}
			if (($indiM>22)&&($indiM<=27)){
				$estado="Estandar";
				}
			if (($indiM>27)&&($indiM<=32)){
				$estado="Sobrepeso";
				} 
			if ($indiM>32){
				$estado="Obesidad";
				}
		}			
				if (($edad>=35)&&($edad<=39)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=19)){
				$estado="Excelente";
				}
			if (($indiM>19)&&($indiM<=23)){
				$estado="Bueno";
				}
			if (($indiM>23)&&($indiM<=28)){
				$estado="Estandar";
				}
			if (($indiM>28)&&($indiM<=33)){
				$estado="Sobrepeso";
				} 
			if ($indiM>33){
				$estado="Obesidad";
				}
		}			
				if (($edad>=40)&&($edad<=44)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=21)){
				$estado="Excelente";
				}
			if (($indiM>21)&&($indiM<=24)){
				$estado="Bueno";
				}
			if (($indiM>24)&&($indiM<=29)){
				$estado="Estandar";
				}
			if (($indiM>29)&&($indiM<=34)){
				$estado="Sobrepeso";
				} 
			if ($indiM>34){
				$estado="Obesidad";
				}
		}			
				if (($edad>=45)&&($edad<=49)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
				}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=23)){
				$estado="Excelente";
				}
			if (($indiM>23)&&($indiM<=26)){
				$estado="Bueno";
				}
			if (($indiM>26)&&($indiM<=31)){
				$estado="Estandar";
				}
			if (($indiM>31)&&($indiM<=36)){
				$estado="Sobrepeso";
				} 
			if ($indiM>36){
				$estado="Obesidad";
				}
		}			
				if (($edad>=50)&&($edad<=54)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=25)){
				$estado="Excelente";
				}
			if (($indiM>25)&&($indiM<=28)){
				$estado="Bueno";
				}
			if (($indiM>28)&&($indiM<=33)){
				$estado="Estandar";
				}
			if (($indiM>33)&&($indiM<=37)){
				$estado="Sobrepeso";
				} 
			if ($indiM>37){
				$estado="Obesidad";
				}
		}		
				if (($edad>=55)&&($edad<=59)){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=26)){
				$estado="Excelente";
				}
			if (($indiM>26)&&($indiM<=29)){
				$estado="Bueno";
				}
			if (($indiM>29)&&($indiM<=34)){
				$estado="Estandar";
				}
			if (($indiM>34)&&($indiM<=38)){
				$estado="Sobrepeso";
				} 
			if ($indiM>38){
				$estado="Obesidad";
				}
		}		
				if ($edad>60){

			if (($indiM>0)&&($indiM<=7)){
				$estado="Esencial";
			}
			if (($indiM>7)&&($indiM<=12)){
				$estado="Atleta";
				}
			if (($indiM>12)&&($indiM<=27)){
				$estado="Excelente";
				}
			if (($indiM>27)&&($indiM<=30)){
				$estado="Bueno";
				}
			if (($indiM>30)&&($indiM<=35)){
				$estado="Estandar";
				}
			if (($indiM>35)&&($indiM<=39)){
				$estado="Sobrepeso";
				} 
			if ($indiM>39){
				$estado="Obesidad";
				}
		}					
		echo $_REQUEST['nombre'].'  '."su indice de grasa corporal es del".' '.$indiM.'%'." el cual esta situado en el rango de".' '.$estado.' '."para personas de su sexo".'  '.$_REQUEST['sexo'];
	echo $estado;
	}	
?>
</body>
</html>