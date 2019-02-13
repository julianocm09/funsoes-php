<?php 

function calculo_horas_trabalhadas($horaInicial, $horaFinal, $intervalo, $horaAuxuliar){
 $horaInicial  = strtotime($horaInicial);
 $horaFinal    = strtotime($horaFinal);
 $intervalo    = strtotime($intervalo);
 $horaAuxuliar = strtotime($horaAuxuliar);
 $totalSegundos = ($horaFinal - $horaInicial);
 $totalHora = $totalSegundos / 3600; 
 $segundosIntervalo = $intervalo - $horaAuxuliar;
 $horaIntervalo = $segundosIntervalo /3600;
 $horasTrabalhadas = $totalHora - $horaIntervalo; 
 $segundosTotal = $totalSegundos - $segundosIntervalo;
 return $segundosTotal;
}
// converte horarios em segundos

?>