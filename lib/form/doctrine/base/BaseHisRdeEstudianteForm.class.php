<?php

/**
 * HisRdeEstudiante form base class.
 *
 * @method HisRdeEstudiante getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHisRdeEstudianteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_his_estudiante'   => new sfWidgetFormInputHidden(),
      'codigo_rude_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      'carnet_identidad'    => new sfWidgetFormInputText(),
      'pasaporte'           => new sfWidgetFormInputText(),
      'libreta_militar'     => new sfWidgetFormInputText(),
      'paterno'             => new sfWidgetFormInputText(),
      'materno'             => new sfWidgetFormInputText(),
      'nombre'              => new sfWidgetFormInputText(),
      'fecha_nacimiento'    => new sfWidgetFormDate(),
      'genero'              => new sfWidgetFormInputText(),
      'pais_nac_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPais'), 'add_empty' => false)),
      'estado_civil_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoCivil'), 'add_empty' => true)),
      'departamento_nac_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_5'), 'add_empty' => false)),
      'provincia_nac_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia'), 'add_empty' => false)),
      'localidad_nac'       => new sfWidgetFormInputText(),
      'oficialia'           => new sfWidgetFormInputText(),
      'libro'               => new sfWidgetFormInputText(),
      'partida'             => new sfWidgetFormInputText(),
      'folio'               => new sfWidgetFormInputText(),
      'grupo_sanguineo_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'add_empty' => true)),
      'idioma_materno_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => true)),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'fecha_modificacion'  => new sfWidgetFormDateTime(),
      'user_bd'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_his_estudiante'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_his_estudiante', 'required' => false)),
      'codigo_rude_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      'carnet_identidad'    => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'pasaporte'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'libreta_militar'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'paterno'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'    => new sfValidatorDate(array('required' => false)),
      'genero'              => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'pais_nac_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPais'))),
      'estado_civil_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoCivil'), 'required' => false)),
      'departamento_nac_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_5'))),
      'provincia_nac_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia'))),
      'localidad_nac'       => new sfValidatorString(array('max_length' => 130, 'required' => false)),
      'oficialia'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'libro'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'partida'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'folio'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'grupo_sanguineo_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'required' => false)),
      'idioma_materno_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'required' => false)),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'fecha_modificacion'  => new sfValidatorDateTime(),
      'user_bd'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('his_rde_estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HisRdeEstudiante';
  }

}
