<?php

/**
 * CtrRdeEstudiante form base class.
 *
 * @method CtrRdeEstudiante getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeEstudianteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'         => new sfWidgetFormInputHidden(),
      'gestion_id'          => new sfWidgetFormInputHidden(),
      'carnet_identidad'    => new sfWidgetFormInputText(),
      'paterno'             => new sfWidgetFormInputText(),
      'materno'             => new sfWidgetFormInputText(),
      'nombre'              => new sfWidgetFormInputText(),
      'fecha_nacimiento'    => new sfWidgetFormDate(),
      'genero'              => new sfWidgetFormInputText(),
      'pais_nac_id'         => new sfWidgetFormInputText(),
      'departamento_nac_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => false)),
      'provincia_nac_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_4'), 'add_empty' => false)),
      'localidad_nac'       => new sfWidgetFormInputText(),
      'oficialia'           => new sfWidgetFormInputText(),
      'libro'               => new sfWidgetFormInputText(),
      'partida'             => new sfWidgetFormInputText(),
      'folio'               => new sfWidgetFormInputText(),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'fecha_modificacion'  => new sfWidgetFormDateTime(),
      'cod_ue_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'codigo_rude'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude', 'required' => false)),
      'gestion_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'carnet_identidad'    => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'paterno'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'    => new sfValidatorDate(array('required' => false)),
      'genero'              => new sfValidatorString(array('max_length' => 1)),
      'pais_nac_id'         => new sfValidatorInteger(array('required' => false)),
      'departamento_nac_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'required' => false)),
      'provincia_nac_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_4'), 'required' => false)),
      'localidad_nac'       => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'oficialia'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'libro'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'partida'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'folio'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'required' => false)),
      'fecha_modificacion'  => new sfValidatorDateTime(array('required' => false)),
      'cod_ue_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeEstudiante';
  }

}
