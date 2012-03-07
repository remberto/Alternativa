<?php

/**
 * DatRueInscripcionTramite form base class.
 *
 * @method DatRueInscripcionTramite getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueInscripcionTramiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'              => new sfWidgetFormInputHidden(),
      'gestion_id'                 => new sfWidgetFormInputHidden(),
      'codigo_rude_id'             => new sfWidgetFormInputHidden(),
      'num_matricula'              => new sfWidgetFormInputText(),
      'periodo_id'                 => new sfWidgetFormInputHidden(),
      'sub_cea_id'                 => new sfWidgetFormInputHidden(),
      'nivel_id'                   => new sfWidgetFormInputHidden(),
      'grado_id'                   => new sfWidgetFormInputHidden(),
      'ciclo_id'                   => new sfWidgetFormInputHidden(),
      'paralelo'                   => new sfWidgetFormInputHidden(),
      'turno_id'                   => new sfWidgetFormInputHidden(),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => false)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_11'), 'add_empty' => false)),
      'cod_ue_procedencia_id'      => new sfWidgetFormInputText(),
      'observacion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'add_empty' => false)),
      'observacion'                => new sfWidgetFormInputText(),
      'fecha_inscripcion'          => new sfWidgetFormDate(),
      'apreciacion_final'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'formulario_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'formulario_id', 'required' => false)),
      'gestion_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude_id', 'required' => false)),
      'num_matricula'              => new sfValidatorInteger(array('required' => false)),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea_id', 'required' => false)),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado_id', 'required' => false)),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'turno_id', 'required' => false)),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'))),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_11'))),
      'cod_ue_procedencia_id'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'observacion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'))),
      'observacion'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_inscripcion'          => new sfValidatorDate(array('required' => false)),
      'apreciacion_final'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_inscripcion_tramite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueInscripcionTramite';
  }

}
