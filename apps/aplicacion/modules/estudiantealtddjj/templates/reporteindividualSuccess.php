 <?php
$arch = $gestion.'_'.$rude.'_DJ_'.date('Ymdhis').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/Declaracion_JuradaAlt.rptdesign&gestion='.$gestion.'&codUE='.$ue.'&codigo_rude='.$rude.'&&__format=pdf&');