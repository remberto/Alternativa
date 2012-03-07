<?php

/**
 * ClaDiscapacidad form base class.
 *
 * @method ClaDiscapacidad getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDiscapacidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_discapacidad'   => new sfWidgetFormInputHidden(),
      'desc_discapacidad' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_discapacidad'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_discapacidad', 'required' => false)),
      'desc_discapacidad' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_discapacidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDiscapacidad';
  }

}
