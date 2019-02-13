<?php
function calculo_salario_por_segundo($diasmes, $salario){
$segundos_hora="3600";
$h_dia="8";
$ttat= $salario / $diasmes / $h_dia / $segundos_hora;
return $ttat;
}
function calculo_salario_por_hora($diasmes, $salario, $soma){
$segundos_hora="3600";
$h_dia="8";
if($soma == "mes"){
$multi_seg= $salario * 3600 * $h_dia * $diasmes;
return $multi_seg;
}if($soma == "dia"){
	return $salario * $diasmes;
}	
}
echo "R$:";
echo calculo_salario_por_hora(calculo_salario_por_segundo("22", "1290"), "21600", "dia");