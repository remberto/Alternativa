<?php

/**
 * CtrRdeInscripcion form base class.
 *
 * @method CtrRdeInscripcion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'             => new sfWidgetFormInputText(),
      'gestion_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'), 'add_empty' => false)),
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      'num_matricula'              => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso'), 'add_empty' => false)),
      'periodo_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'), 'add_empty' => false)),
      'operativo_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'), 'add_empty' => false)),
      'sub_cea_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_11'), 'add_empty' => false)),
      'nivel_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_14'), 'add_empty' => false)),
      'grado_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_12'), 'add_empty' => false)),
      'ciclo_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_13'), 'add_empty' => false)),
      'paralelo'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_15'), 'add_empty' => false)),
      'turno_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_16'), 'add_empty' => false)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => false)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'add_empty' => false)),
      'cod_ue_procedencia_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => false)),
      'observacion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'add_empty' => false)),
      'observacion_control'        => new sfWidgetFormInputText(),
      'fecha_control'              => new sfWidgetFormDateTime(),
      'fecha_inscripcion'          => new sfWidgetFormDate(),
      'apreciacion_final'          => new sfWidgetFormInputText(),
      'usuario_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'id_control'                 => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_inscripcion'             => new sfValidatorInteger(),
      'gestion_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'))),
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      'num_matricula'              => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso'))),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'))),
      'operativo_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'))),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_11'))),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_14'))),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_12'))),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_13'))),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_15'))),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_16'))),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'))),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'))),
      'cod_ue_procedencia_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'))),
      'observacion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'))),
      'observacion_control'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_control'              => new sfValidatorDateTime(array('required' => false)),
      'fecha_inscripcion'          => new sfValidatorDate(array('required' => false)),
      'apreciacion_final'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'usuario_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'id_control'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_control', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeInscripcion';
  }

}
