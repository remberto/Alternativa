<?php

/**
 * ClaCerrada form base class.
 *
 * @method ClaCerrada getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCerradaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_cerrada'  => new sfWidgetFormInputHidden(),
      'desc_cerrada' => new sfWidgetFormInputText(),
      'obs_cerrada'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_cerrada'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_cerrada', 'required' => false)),
      'desc_cerrada' => new sfValidatorString(array('max_length' => 45)),
      'obs_cerrada'  => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_cerrada[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCerrada';
  }

}
