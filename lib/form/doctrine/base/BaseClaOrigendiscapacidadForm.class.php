<?php

/**
 * ClaOrigendiscapacidad form base class.
 *
 * @method ClaOrigendiscapacidad getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaOrigendiscapacidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_origendiscapacidad'   => new sfWidgetFormInputHidden(),
      'desc_origendiscapacidad' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_origendiscapacidad'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_origendiscapacidad', 'required' => false)),
      'desc_origendiscapacidad' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_origendiscapacidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaOrigendiscapacidad';
  }

}
