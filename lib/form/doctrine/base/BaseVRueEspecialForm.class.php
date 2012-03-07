<?php

/**
 * VRueEspecial form base class.
 *
 * @method VRueEspecial getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVRueEspecialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'gestion_id'        => new sfWidgetFormInputText(),
      'desc_modalidad'    => new sfWidgetFormInputText(),
      'desc_departamento' => new sfWidgetFormInputText(),
      'cod_distrito'      => new sfWidgetFormInputText(),
      'distrito'          => new sfWidgetFormInputText(),
      'cod_ue'            => new sfWidgetFormInputText(),
      'desc_ue'           => new sfWidgetFormInputText(),
      'rue'               => new sfWidgetFormInputText(),
      'fecha_resolucion'  => new sfWidgetFormDateTime(),
      'nro_resolucion'    => new sfWidgetFormInputText(),
      'obs_rue'           => new sfWidgetFormInputText(),
      'nivel_id'          => new sfWidgetFormInputText(),
      'desc_nivel'        => new sfWidgetFormInputText(),
      'id_acreditacion'   => new sfWidgetFormInputText(),
      'descciclo'         => new sfWidgetFormInputText(),
      'descciclo1'        => new sfWidgetFormInputText(),
      'certificado'       => new sfWidgetFormInputText(),
      'zona'              => new sfWidgetFormInputText(),
      'direccion'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'        => new sfValidatorInteger(array('required' => false)),
      'desc_modalidad'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_departamento' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cod_distrito'      => new sfValidatorInteger(array('required' => false)),
      'distrito'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_ue'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'           => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'rue'               => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'fecha_resolucion'  => new sfValidatorDateTime(array('required' => false)),
      'nro_resolucion'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'obs_rue'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nivel_id'          => new sfValidatorInteger(array('required' => false)),
      'desc_nivel'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_acreditacion'   => new sfValidatorInteger(array('required' => false)),
      'descciclo'         => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'descciclo1'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'certificado'       => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'zona'              => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'direccion'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_rue_especial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VRueEspecial';
  }

}
