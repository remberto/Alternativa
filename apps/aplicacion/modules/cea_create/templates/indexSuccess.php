<?php use_helper('ysJQueryRevolutions') ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind') ?>
<?php if (!isset($notice)): ?>    
    <form id="myForm2" onsubmit="return confirm('&iquest;Est&aacute; seguro de crear?')" action="<?php echo url_for('cea_create/guardar') ?>">
        <?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable')) ?>
        <?php
        echo ui_init_title(array(
            'icon' => 'newwin',
            'class' => 'ui-widget-header ui-corner-all',
            'style' => 'top: 5px; left: 30px; height:50px;'))
        ?>
        INFORMACI&Oacute;N DEL CENTRO DE EDUCACI&Oacute;N ALTERNATIVA
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content() ?>
        <div style="width: 100%;padding:10px;">
            <table align="center" style="width: 95%">
                <tr>
                <input type="hidden" name="datos[codue]" value="<?php echo $ue; ?>"></input>
                <input type="hidden" name="datos[gestion]" value="<?php echo $gestion; ?>"></input>
                <input type="hidden" name="datos[periodo]" value="<?php echo $periodo; ?>"></input>
                <td><?php include_partial('cea_create/identificacion', array('identificacion' => $identificacion)); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('cea_create/ubicacion', array('identificacion' => $identificacion)); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('cea_create/administrativa', array('identificacion' => $identificacion)); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('cea_create/dependencia', array('identificacion' => $identificacion)); ?></td>
                </tr>                
            </table>
        </div>
    <?php echo ui_end_content() ?>
    <?php echo ui_end_content_panel() ?>
        <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
            <input type="submit" value="Crear Inicio de Gestion" id ="btnGrabar"  />
        </div>
    </form>
<?php else: ?>
    <?php include_partial('inicio/mensaje', array('fondo' => '#F00', 'letra' => '#fff', 'mensaje' => $notice, 'icono' => '/images/Scared.png')); ?>
<?php endif; ?>