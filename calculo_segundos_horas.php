<?php 

function converterHora($total_segundos){
			
			$hora = sprintf("%02s",floor($total_segundos / (60*60)));
			$total_segundos = ($total_segundos % (60*60));
			
			$minuto = sprintf("%02s",floor ($total_segundos / 60 ));
			$total_segundos = ($total_segundos % 60);
			
			$hora_minuto = $hora.":".$minuto;
			return $hora_minuto;
  }

?>