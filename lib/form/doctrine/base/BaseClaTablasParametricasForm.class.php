<?php

/**
 * ClaTablasParametricas form base class.
 *
 * @method ClaTablasParametricas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTablasParametricasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'tabla'        => new sfWidgetFormInputText(),
      'nivel'        => new sfWidgetFormInputText(),
      'estado'       => new sfWidgetFormInputText(),
      'primary_keys' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'tabla'        => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'nivel'        => new sfValidatorInteger(array('required' => false)),
      'estado'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'primary_keys' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tablas_parametricas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTablasParametricas';
  }

}
