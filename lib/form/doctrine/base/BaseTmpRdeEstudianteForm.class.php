<?php

/**
 * TmpRdeEstudiante form base class.
 *
 * @method TmpRdeEstudiante getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpRdeEstudianteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'codigo_rude'      => new sfWidgetFormInputText(),
      'paterno'          => new sfWidgetFormInputText(),
      'materno'          => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'genero'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_rude'      => new sfValidatorString(array('max_length' => 18)),
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'genero'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_rde_estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpRdeEstudiante';
  }

}
