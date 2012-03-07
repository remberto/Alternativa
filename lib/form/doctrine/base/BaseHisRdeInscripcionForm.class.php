<?php

/**
 * HisRdeInscripcion form base class.
 *
 * @method HisRdeInscripcion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHisRdeInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'             => new sfWidgetFormInputHidden(),
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      'num_matricula'              => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormInputText(),
      'sub_cea_id'                 => new sfWidgetFormInputText(),
      'gestion_id'                 => new sfWidgetFormInputHidden(),
      'operativo_id'               => new sfWidgetFormInputText(),
      'periodo_id'                 => new sfWidgetFormInputText(),
      'nivel_id'                   => new sfWidgetFormInputText(),
      'ciclo_id'                   => new sfWidgetFormInputText(),
      'grado_id'                   => new sfWidgetFormInputText(),
      'paralelo'                   => new sfWidgetFormInputText(),
      'turno_id'                   => new sfWidgetFormInputText(),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => false)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'add_empty' => false)),
      'cod_ue_procedencia_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => false)),
      'observacion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'add_empty' => false)),
      'observacion'                => new sfWidgetFormInputText(),
      'fecha_inscripcion'          => new sfWidgetFormDate(),
      'apreciacion_final'          => new sfWidgetFormInputText(),
      'fecha_delete'               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_inscripcion'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_inscripcion', 'required' => false)),
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      'num_matricula'              => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'                  => new sfValidatorString(array('max_length' => 8)),
      'sub_cea_id'                 => new sfValidatorInteger(),
      'gestion_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'operativo_id'               => new sfValidatorInteger(),
      'periodo_id'                 => new sfValidatorInteger(),
      'nivel_id'                   => new sfValidatorInteger(),
      'ciclo_id'                   => new sfValidatorInteger(),
      'grado_id'                   => new sfValidatorInteger(),
      'paralelo'                   => new sfValidatorString(array('max_length' => 2)),
      'turno_id'                   => new sfValidatorInteger(),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'))),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'))),
      'cod_ue_procedencia_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'))),
      'observacion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'))),
      'observacion'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_inscripcion'          => new sfValidatorDate(),
      'apreciacion_final'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_delete'               => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('his_rde_inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HisRdeInscripcion';
  }

}
