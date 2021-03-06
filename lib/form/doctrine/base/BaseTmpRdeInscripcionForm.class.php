<?php

/**
 * TmpRdeInscripcion form base class.
 *
 * @method TmpRdeInscripcion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpRdeInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'gestion_id'                 => new sfWidgetFormInputText(),
      'codigo_rude_id'             => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormInputText(),
      'sub_cea_id'                 => new sfWidgetFormInputText(),
      'nivel_id'                   => new sfWidgetFormInputText(),
      'ciclo_id'                   => new sfWidgetFormInputText(),
      'grado_id'                   => new sfWidgetFormInputText(),
      'paralelo'                   => new sfWidgetFormInputText(),
      'estado_matricula_inicio_id' => new sfWidgetFormInputText(),
      'estado_matricula_fin_id'    => new sfWidgetFormInputText(),
      'turno'                      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'                 => new sfValidatorInteger(),
      'codigo_rude_id'             => new sfValidatorString(array('max_length' => 18)),
      'cod_ue_id'                  => new sfValidatorString(array('max_length' => 8)),
      'sub_cea_id'                 => new sfValidatorInteger(),
      'nivel_id'                   => new sfValidatorInteger(),
      'ciclo_id'                   => new sfValidatorInteger(),
      'grado_id'                   => new sfValidatorInteger(),
      'paralelo'                   => new sfValidatorString(array('max_length' => 1)),
      'estado_matricula_inicio_id' => new sfValidatorInteger(array('required' => false)),
      'estado_matricula_fin_id'    => new sfValidatorInteger(array('required' => false)),
      'turno'                      => new sfValidatorString(array('max_length' => 25)),
    ));

    $this->widgetSchema->setNameFormat('tmp_rde_inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpRdeInscripcion';
  }

}
