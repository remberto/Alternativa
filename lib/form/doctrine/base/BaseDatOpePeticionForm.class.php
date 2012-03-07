<?php

/**
 * DatOpePeticion form base class.
 *
 * @method DatOpePeticion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatOpePeticionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'codigo_ue'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => false)),
      'fecha_hora_peticion'  => new sfWidgetFormDateTime(),
      'fecha_hora_respuesta' => new sfWidgetFormDateTime(),
      'respuesta'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoArchivo'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_ue'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'))),
      'fecha_hora_peticion'  => new sfValidatorDateTime(),
      'fecha_hora_respuesta' => new sfValidatorDateTime(array('required' => false)),
      'respuesta'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoArchivo'))),
    ));

    $this->widgetSchema->setNameFormat('dat_ope_peticion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatOpePeticion';
  }

}
