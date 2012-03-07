<?php

/**
 * ClaEdaEstadoRecursos form base class.
 *
 * @method ClaEdaEstadoRecursos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaEstadoRecursosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_estado_recursos'   => new sfWidgetFormInputHidden(),
      'desc_estado_recursos' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_estado_recursos'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_estado_recursos', 'required' => false)),
      'desc_estado_recursos' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_estado_recursos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaEstadoRecursos';
  }

}
