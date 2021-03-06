<?php

/**
 * ClaCicloAcreditacion form base class.
 *
 * @method ClaCicloAcreditacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCicloAcreditacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nivel_id'        => new sfWidgetFormInputHidden(),
      'id_acreditacion' => new sfWidgetFormInputHidden(),
      'descciclo'       => new sfWidgetFormInputText(),
      'descciclo1'      => new sfWidgetFormInputText(),
      'abrev'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nivel_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'id_acreditacion' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_acreditacion', 'required' => false)),
      'descciclo'       => new sfValidatorString(array('max_length' => 55)),
      'descciclo1'      => new sfValidatorString(array('max_length' => 45)),
      'abrev'           => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_ciclo_acreditacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCicloAcreditacion';
  }

}
