<?php

/**
 * ClaCircunscripcion form base class.
 *
 * @method ClaCircunscripcion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCircunscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'desc_circunscripcion' => new sfWidgetFormInputText(),
      'abr_circunscripcion'  => new sfWidgetFormInputText(),
      'departamento_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_circunscripcion' => new sfValidatorString(array('max_length' => 100)),
      'abr_circunscripcion'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'departamento_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_circunscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCircunscripcion';
  }

}
