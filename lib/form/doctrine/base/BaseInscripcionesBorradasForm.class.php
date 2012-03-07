<?php

/**
 * InscripcionesBorradas form base class.
 *
 * @method InscripcionesBorradas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseInscripcionesBorradasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'id_inscripcion'             => new sfWidgetFormInputText(),
      'gestion_id'                 => new sfWidgetFormInputText(),
      'codigo_rude_id'             => new sfWidgetFormInputText(),
      'num_matricula'              => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormInputText(),
      'periodo_id'                 => new sfWidgetFormInputText(),
      'operativo_id'               => new sfWidgetFormInputText(),
      'sub_cea_id'                 => new sfWidgetFormInputText(),
      'nivel_id'                   => new sfWidgetFormInputText(),
      'grado_id'                   => new sfWidgetFormInputText(),
      'ciclo_id'                   => new sfWidgetFormInputText(),
      'paralelo'                   => new sfWidgetFormInputText(),
      'turno_id'                   => new sfWidgetFormInputText(),
      'estado_matricula_inicio_id' => new sfWidgetFormInputText(),
      'estado_matricula_fin_id'    => new sfWidgetFormInputText(),
      'cod_ue_procedencia_id'      => new sfWidgetFormInputText(),
      'observacion_id'             => new sfWidgetFormInputText(),
      'observacion'                => new sfWidgetFormTextarea(),
      'fecha_inscripcion'          => new sfWidgetFormDateTime(),
      'apreciacion_final'          => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_inscripcion'             => new sfValidatorInteger(array('required' => false)),
      'gestion_id'                 => new sfValidatorInteger(array('required' => false)),
      'codigo_rude_id'             => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'num_matricula'              => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'                  => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'periodo_id'                 => new sfValidatorInteger(array('required' => false)),
      'operativo_id'               => new sfValidatorInteger(array('required' => false)),
      'sub_cea_id'                 => new sfValidatorInteger(array('required' => false)),
      'nivel_id'                   => new sfValidatorInteger(array('required' => false)),
      'grado_id'                   => new sfValidatorInteger(array('required' => false)),
      'ciclo_id'                   => new sfValidatorInteger(array('required' => false)),
      'paralelo'                   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'turno_id'                   => new sfValidatorInteger(array('required' => false)),
      'estado_matricula_inicio_id' => new sfValidatorInteger(array('required' => false)),
      'estado_matricula_fin_id'    => new sfValidatorInteger(array('required' => false)),
      'cod_ue_procedencia_id'      => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'observacion_id'             => new sfValidatorInteger(array('required' => false)),
      'observacion'                => new sfValidatorString(array('max_length' => 510, 'required' => false)),
      'fecha_inscripcion'          => new sfValidatorDateTime(array('required' => false)),
      'apreciacion_final'          => new sfValidatorString(array('max_length' => 510, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inscripciones_borradas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InscripcionesBorradas';
  }

}
