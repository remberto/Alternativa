<?php

/**
 * DatRdeEstudianteObservados form base class.
 *
 * @method DatRdeEstudianteObservados getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeEstudianteObservadosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'codigo_rude'      => new sfWidgetFormInputText(),
      'carnet_identidad' => new sfWidgetFormInputText(),
      'libreta_militar'  => new sfWidgetFormInputText(),
      'pasaporte'        => new sfWidgetFormInputText(),
      'paterno'          => new sfWidgetFormInputText(),
      'materno'          => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'genero'           => new sfWidgetFormInputText(),
      'cod_ue'           => new sfWidgetFormInputText(),
      'tipo'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_rude'      => new sfValidatorString(array('max_length' => 18)),
      'carnet_identidad' => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'libreta_militar'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'pasaporte'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'genero'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cod_ue'           => new sfValidatorString(array('max_length' => 8)),
      'tipo'             => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_estudiante_observados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeEstudianteObservados';
  }

}
