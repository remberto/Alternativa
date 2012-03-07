<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="modalidad_id" style="font-family: Arial;font-size: 12px;">
    <option value="-999">[-----]</option>
    <?php foreach($niveles as $nivel): ?>
        <option value="<?php echo $nivel->getNivelId(); ?>"><?php echo $nivel->getNivelId().' - '.Doctrine::getTable('ClaNivel')->find($nivel->getNivelId())->getDescNivel(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#modalidad_id',
                'event' => 'change'),
            'url' => url_for('adultoshumanisticainscripcion/nivel'),
            'success' =>  like_function("$('#nivel').html(data)" , 'data'),
            'data' => "'modalidad_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value+'&subcea_id='+document.getElementById('subcea_id').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#unidad_educativa',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#unidad_educativa',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
