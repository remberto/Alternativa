<?php

/**
 * VisInformacionCeas form base class.
 *
 * @method VisInformacionCeas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisInformacionCeasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'cod_ue'               => new sfWidgetFormInputText(),
      'desc_ue'              => new sfWidgetFormInputText(),
      'aub_cea'              => new sfWidgetFormInputText(),
      'nombre_subcea'        => new sfWidgetFormInputText(),
      'cod_le_id'            => new sfWidgetFormInputText(),
      'desc_dependencia'     => new sfWidgetFormInputText(),
      'gestion_id'           => new sfWidgetFormInputText(),
      'operativo_id'         => new sfWidgetFormInputText(),
      'periodo_id'           => new sfWidgetFormInputText(),
      'telefono1'            => new sfWidgetFormInputText(),
      'telefono2'            => new sfWidgetFormInputText(),
      'referencia_telefono2' => new sfWidgetFormInputText(),
      'fax'                  => new sfWidgetFormInputText(),
      'email'                => new sfWidgetFormInputText(),
      'casilla'              => new sfWidgetFormInputText(),
      'ci_director'          => new sfWidgetFormInputText(),
      'director'             => new sfWidgetFormInputText(),
      'item_director'        => new sfWidgetFormInputText(),
      'cod_cerrada_id'       => new sfWidgetFormInputText(),
      'turno_id'             => new sfWidgetFormInputText(),
      'desc_localidad'       => new sfWidgetFormInputText(),
      'id_localidad'         => new sfWidgetFormInputText(),
      'id_canton'            => new sfWidgetFormInputText(),
      'desc_canton'          => new sfWidgetFormInputText(),
      'id_seccion'           => new sfWidgetFormInputText(),
      'desc_seccion'         => new sfWidgetFormInputText(),
      'id_provincia'         => new sfWidgetFormInputText(),
      'desc_provincia'       => new sfWidgetFormInputText(),
      'id_departamento'      => new sfWidgetFormInputText(),
      'desc_departamento'    => new sfWidgetFormInputText(),
      'cod_distrito_id'      => new sfWidgetFormInputText(),
      'distrito'             => new sfWidgetFormInputText(),
      'zona'                 => new sfWidgetFormInputText(),
      'direccion'            => new sfWidgetFormInputText(),
      'tipo_area'            => new sfWidgetFormInputText(),
      'desc_abrv'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'cod_ue'               => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'              => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'aub_cea'              => new sfValidatorInteger(array('required' => false)),
      'nombre_subcea'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cod_le_id'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_dependencia'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'gestion_id'           => new sfValidatorInteger(array('required' => false)),
      'operativo_id'         => new sfValidatorInteger(array('required' => false)),
      'periodo_id'           => new sfValidatorInteger(array('required' => false)),
      'telefono1'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'telefono2'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'referencia_telefono2' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'email'                => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'casilla'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ci_director'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'director'             => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'item_director'        => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cod_cerrada_id'       => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'turno_id'             => new sfValidatorInteger(array('required' => false)),
      'desc_localidad'       => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'id_localidad'         => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'id_canton'            => new sfValidatorInteger(array('required' => false)),
      'desc_canton'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_seccion'           => new sfValidatorInteger(array('required' => false)),
      'desc_seccion'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_provincia'         => new sfValidatorInteger(array('required' => false)),
      'desc_provincia'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'id_departamento'      => new sfValidatorInteger(array('required' => false)),
      'desc_departamento'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cod_distrito_id'      => new sfValidatorInteger(array('required' => false)),
      'distrito'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'zona'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'direccion'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo_area'            => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'desc_abrv'            => new sfValidatorString(array('max_length' => 4, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_informacion_ceas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisInformacionCeas';
  }

}
