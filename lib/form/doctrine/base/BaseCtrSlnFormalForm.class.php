<?php

/**
 * CtrSlnFormal form base class.
 *
 * @method CtrSlnFormal getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrSlnFormalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_2'), 'add_empty' => false)),
      'cod_ue_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnCursoOferta_5'), 'add_empty' => false)),
      'curso_oferta_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnCursoOferta'), 'add_empty' => false)),
      'inscripcion_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'), 'add_empty' => false)),
      'primer_trimestre'            => new sfWidgetFormInputText(),
      'segundo_trimestre'           => new sfWidgetFormInputText(),
      'tercer_trimestre'            => new sfWidgetFormInputText(),
      'promedio_anual'              => new sfWidgetFormInputText(),
      'reforzamiento'               => new sfWidgetFormInputText(),
      'promedio_final'              => new sfWidgetFormInputText(),
      'primer_eval'                 => new sfWidgetFormInputText(),
      'segundo_eval'                => new sfWidgetFormInputText(),
      'tercer_eval'                 => new sfWidgetFormInputText(),
      'primer_dias_trab'            => new sfWidgetFormInputText(),
      'segundo_dias_trab'           => new sfWidgetFormInputText(),
      'tercer_dias_trab'            => new sfWidgetFormInputText(),
      'reforzamiento_dias_trab'     => new sfWidgetFormInputText(),
      'primer_faltas_licencia'      => new sfWidgetFormInputText(),
      'segundo_faltas_licencia'     => new sfWidgetFormInputText(),
      'tecer_faltas_licencia'       => new sfWidgetFormInputText(),
      'primer_faltas_sin_licencia'  => new sfWidgetFormInputText(),
      'segundo_faltas_sin_licencia' => new sfWidgetFormInputText(),
      'tercer_faltas_sin_licencia'  => new sfWidgetFormInputText(),
      'fecha_actualizacion'         => new sfWidgetFormDateTime(),
      'usuario_id'                  => new sfWidgetFormInputText(),
      'fecha_cambio'                => new sfWidgetFormDateTime(),
      'id_sln_formal'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'gestion_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_2'))),
      'cod_ue_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnCursoOferta_5'))),
      'curso_oferta_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnCursoOferta'))),
      'inscripcion_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'))),
      'primer_trimestre'            => new sfValidatorInteger(array('required' => false)),
      'segundo_trimestre'           => new sfValidatorInteger(array('required' => false)),
      'tercer_trimestre'            => new sfValidatorInteger(array('required' => false)),
      'promedio_anual'              => new sfValidatorInteger(array('required' => false)),
      'reforzamiento'               => new sfValidatorInteger(array('required' => false)),
      'promedio_final'              => new sfValidatorInteger(array('required' => false)),
      'primer_eval'                 => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'segundo_eval'                => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'tercer_eval'                 => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'primer_dias_trab'            => new sfValidatorInteger(array('required' => false)),
      'segundo_dias_trab'           => new sfValidatorInteger(array('required' => false)),
      'tercer_dias_trab'            => new sfValidatorInteger(array('required' => false)),
      'reforzamiento_dias_trab'     => new sfValidatorInteger(array('required' => false)),
      'primer_faltas_licencia'      => new sfValidatorInteger(array('required' => false)),
      'segundo_faltas_licencia'     => new sfValidatorInteger(array('required' => false)),
      'tecer_faltas_licencia'       => new sfValidatorInteger(array('required' => false)),
      'primer_faltas_sin_licencia'  => new sfValidatorInteger(array('required' => false)),
      'segundo_faltas_sin_licencia' => new sfValidatorInteger(array('required' => false)),
      'tercer_faltas_sin_licencia'  => new sfValidatorInteger(array('required' => false)),
      'fecha_actualizacion'         => new sfValidatorDateTime(),
      'usuario_id'                  => new sfValidatorInteger(),
      'fecha_cambio'                => new sfValidatorDateTime(),
      'id_sln_formal'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_sln_formal', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_sln_formal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrSlnFormal';
  }

}
