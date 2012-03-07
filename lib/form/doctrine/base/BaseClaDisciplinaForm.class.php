<?php

/**
 * ClaDisciplina form base class.
 *
 * @method ClaDisciplina getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDisciplinaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'desc_disciplina' => new sfWidgetFormInputText(),
      'abr_disciplina'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_disciplina' => new sfValidatorString(array('max_length' => 255)),
      'abr_disciplina'  => new sfValidatorString(array('max_length' => 15)),
    ));

    $this->widgetSchema->setNameFormat('cla_disciplina[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDisciplina';
  }

}
