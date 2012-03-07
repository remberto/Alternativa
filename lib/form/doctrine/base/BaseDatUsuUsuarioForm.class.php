<?php

/**
 * DatUsuUsuario form base class.
 *
 * @method DatUsuUsuario getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatUsuUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'username'   => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'paterno'    => new sfWidgetFormInputText(),
      'materno'    => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'telefono'   => new sfWidgetFormInputText(),
      'celular'    => new sfWidgetFormInputText(),
      'direccion'  => new sfWidgetFormInputText(),
      'estado_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'cargo_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
      'foto'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'username'   => new sfValidatorString(array('max_length' => 30)),
      'password'   => new sfValidatorString(array('max_length' => 200)),
      'nombre'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'materno'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'telefono'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'celular'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'direccion'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'estado_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'))),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'cargo_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'required' => false)),
      'foto'       => new sfValidatorString(array('max_length' => 125, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_usu_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatUsuUsuario';
  }

}
