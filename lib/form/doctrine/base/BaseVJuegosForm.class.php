<?php

/**
 * VJuegos form base class.
 *
 * @method VJuegos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVJuegosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'desc_departamento'    => new sfWidgetFormInputText(),
      'abr_circunscripcion'  => new sfWidgetFormInputText(),
      'desc_circunscripcion' => new sfWidgetFormInputText(),
      'distrito'             => new sfWidgetFormInputText(),
      'cod_ue'               => new sfWidgetFormInputText(),
      'desc_ue'              => new sfWidgetFormInputText(),
      'desc_disciplina'      => new sfWidgetFormInputText(),
      'desc_prueba'          => new sfWidgetFormInputText(),
      'calculated_column1'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_departamento'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'abr_circunscripcion'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_circunscripcion' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'distrito'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_ue'               => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'              => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'desc_disciplina'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'desc_prueba'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'calculated_column1'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_juegos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VJuegos';
  }

}
