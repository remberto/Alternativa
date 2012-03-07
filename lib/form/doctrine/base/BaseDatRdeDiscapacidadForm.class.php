<?php

/**
 * DatRdeDiscapacidad form base class.
 *
 * @method DatRdeDiscapacidad getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeDiscapacidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'        => new sfWidgetFormInputHidden(),
      'discapacidad_id'       => new sfWidgetFormInputHidden(),
      'origendiscapacidad_id' => new sfWidgetFormInputHidden(),
      'gestion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'), 'add_empty' => false)),
      'fecha_registro'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'codigo_rude_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude_id', 'required' => false)),
      'discapacidad_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'discapacidad_id', 'required' => false)),
      'origendiscapacidad_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'origendiscapacidad_id', 'required' => false)),
      'gestion_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'))),
      'fecha_registro'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_discapacidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeDiscapacidad';
  }

}
