<?php

/**
 * ClaAsignatura form base class.
 *
 * @method ClaAsignatura getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAsignaturaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_asignatura'  => new sfWidgetFormInputHidden(),
      'desc_asignatura' => new sfWidgetFormInputText(),
      'desc_abrev'      => new sfWidgetFormInputText(),
      'oficial'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_asignatura'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_asignatura', 'required' => false)),
      'desc_asignatura' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_abrev'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'oficial'         => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_asignatura[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAsignatura';
  }

}
