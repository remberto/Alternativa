<?php

/**
 * ClaPrueba form base class.
 *
 * @method ClaPrueba getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPruebaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'desc_prueba'   => new sfWidgetFormInputText(),
      'abr_prueba'    => new sfWidgetFormInputText(),
      'disciplina_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDisciplina'), 'add_empty' => false)),
      'tipo_id'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_prueba'   => new sfValidatorString(array('max_length' => 45)),
      'abr_prueba'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'disciplina_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDisciplina'))),
      'tipo_id'       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_prueba[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPrueba';
  }

}
