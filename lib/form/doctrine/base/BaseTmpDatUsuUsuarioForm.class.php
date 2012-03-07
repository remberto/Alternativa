<?php

/**
 * TmpDatUsuUsuario form base class.
 *
 * @method TmpDatUsuUsuario getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDatUsuUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputText(),
      'username'   => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'paterno'    => new sfWidgetFormInputText(),
      'materno'    => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'telefono'   => new sfWidgetFormInputText(),
      'celular'    => new sfWidgetFormInputText(),
      'direccion'  => new sfWidgetFormInputText(),
      'estado_id'  => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'cargo_id'   => new sfWidgetFormInputText(),
      'usu_tipo'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorInteger(array('required' => false)),
      'username'   => new sfValidatorString(array('max_length' => 30)),
      'password'   => new sfValidatorString(array('max_length' => 200)),
      'nombre'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'materno'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'telefono'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'celular'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'direccion'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'estado_id'  => new sfValidatorInteger(),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'cargo_id'   => new sfValidatorInteger(array('required' => false)),
      'usu_tipo'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_dat_usu_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDatUsuUsuario';
  }

}
