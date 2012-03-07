<?php

/**
 * DatRdeInscripcionTecnica form base class.
 *
 * @method DatRdeInscripcionTecnica getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeInscripcionTecnicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'             => new sfWidgetFormInputHidden(),
      'gestion_id'                 => new sfWidgetFormInputHidden(),
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      'num_matricula'              => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica'), 'add_empty' => false)),
      'periodo_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_5'), 'add_empty' => false)),
      'operativo_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_6'), 'add_empty' => false)),
      'sub_cea_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_8'), 'add_empty' => false)),
      'nivel_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_11'), 'add_empty' => false)),
      'grado_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_9'), 'add_empty' => false)),
      'ciclo_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_10'), 'add_empty' => false)),
      'paralelo'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_12'), 'add_empty' => false)),
      'turno_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_13'), 'add_empty' => false)),
      'curso_oferta_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_14'), 'add_empty' => false)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => false)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_2'), 'add_empty' => false)),
      'fecha_inscripcion'          => new sfWidgetFormDate(),
      'apreciacion_final'          => new sfWidgetFormInputText(),
      'postula_acreditacion_n_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCiclo'), 'add_empty' => false)),
      'postula_acreditacion_c_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCiclo_16'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_inscripcion'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_inscripcion', 'required' => false)),
      'gestion_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      'num_matricula'              => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica'))),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_5'))),
      'operativo_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_6'))),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_8'))),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_11'))),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_9'))),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_10'))),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_12'))),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_13'))),
      'curso_oferta_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_14'))),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'))),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_2'))),
      'fecha_inscripcion'          => new sfValidatorDate(array('required' => false)),
      'apreciacion_final'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'postula_acreditacion_n_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCiclo'))),
      'postula_acreditacion_c_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCiclo_16'))),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_inscripcion_tecnica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeInscripcionTecnica';
  }

}
