<?php

/**
 * DatJueInscritos form base class.
 *
 * @method DatJueInscritos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatJueInscritosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'codigo_rude_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      'cod_ue_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => false)),
      'prueba_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPrueba'), 'add_empty' => false)),
      'estado_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => true)),
      'observacion_id'     => new sfWidgetFormInputText(),
      'gestion_id'         => new sfWidgetFormInputText(),
      'circunscripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCircunscripcion'), 'add_empty' => true)),
      'fase_id'            => new sfWidgetFormInputText(),
      'fecha_ins'          => new sfWidgetFormDate(),
      'foto'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_rude_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      'cod_ue_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'))),
      'prueba_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPrueba'))),
      'estado_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'required' => false)),
      'observacion_id'     => new sfValidatorInteger(array('required' => false)),
      'gestion_id'         => new sfValidatorInteger(),
      'circunscripcion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCircunscripcion'), 'required' => false)),
      'fase_id'            => new sfValidatorInteger(array('required' => false)),
      'fecha_ins'          => new sfValidatorDate(),
      'foto'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_jue_inscritos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatJueInscritos';
  }

}
