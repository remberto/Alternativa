<?php

/**
 * ClaTipoPeriodo form base class.
 *
 * @method ClaTipoPeriodo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoPeriodoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_periodo'   => new sfWidgetFormInputHidden(),
      'desc_tipo_periodo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_periodo'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_tipo_periodo', 'required' => false)),
      'desc_tipo_periodo' => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_periodo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoPeriodo';
  }

}
