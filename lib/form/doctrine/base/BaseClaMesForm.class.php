<?php

/**
 * ClaMes form base class.
 *
 * @method ClaMes getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaMesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_mes' => new sfWidgetFormInputHidden(),
      'mes'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_mes' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_mes', 'required' => false)),
      'mes'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_mes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaMes';
  }

}
