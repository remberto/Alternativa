<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="grado_id" style="font-family: Arial;font-size: 12px;width: 200px;" name="dat_rde_estudiante[grado_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($grados as $grado): ?>
        <option value="<?php echo $grado->getGradoId(); ?>"><?php echo $grado->getGradoId().' - '.Doctrine::getTable('ClaGrado')->find(array($nivel,$ciclo,$grado->getGradoId()))->getDescGrado(); ?></option>
    <?php endforeach; ?>
</select>
<?php if($acreditacion == '21') :
		echo jquery_ajax(array(
		'listener' => array(
			'selector' => '#grado_id',
			'event' => 'change'),
		'url' => url_for('ins_con_rude/paralelo'),
		'success' =>  like_function("$('#paralelo').html(data)" , 'data'),
		'data' => "'grado_id='+". jquery_get('this','val')."+'&subsistema_id='+document.getElementById('subsistema_id').value+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&modalidad_id='+document.getElementById('modalidad_id').value",
		'type' => 'POST'));
	  else:
		echo jquery_ajax(array(
		'listener' => array(
			'selector' => '#grado_id',
			'event' => 'change'),
		'url' => url_for('ins_con_rude/especialidad'),
		'success' =>  like_function("$('#especialidad').html(data)" , 'data'),
		'data' => "'grado_id='+". jquery_get('this','val')."+'&subsistema_id='+document.getElementById('subsistema_id').value+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&modalidad_id='+document.getElementById('modalidad_id').value",
		'type' => 'POST'));
	  endif;	  
?>

<?php
    echo jquery_ajax_event(
           '#grado_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#grado_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
