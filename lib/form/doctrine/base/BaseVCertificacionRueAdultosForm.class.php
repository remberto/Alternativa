<?php

/**
 * VCertificacionRueAdultos form base class.
 *
 * @method VCertificacionRueAdultos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCertificacionRueAdultosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                              => new sfWidgetFormInputHidden(),
      'gestion_id'                      => new sfWidgetFormInputText(),
      'desc_modalidad'                  => new sfWidgetFormInputText(),
      'desc_departamento'               => new sfWidgetFormInputText(),
      'cod_distrito'                    => new sfWidgetFormInputText(),
      'distrito'                        => new sfWidgetFormInputText(),
      'cod_ue'                          => new sfWidgetFormInputText(),
      'desc_ue'                         => new sfWidgetFormInputText(),
      'desc_dependencia'                => new sfWidgetFormInputText(),
      'rue'                             => new sfWidgetFormInputText(),
      'fecha resolucion'                => new sfWidgetFormInputText(),
      'nro_resolucion'                  => new sfWidgetFormInputText(),
      'obs_rue'                         => new sfWidgetFormInputText(),
      'zona'                            => new sfWidgetFormInputText(),
      'direccion'                       => new sfWidgetFormInputText(),
      'certificado'                     => new sfWidgetFormInputText(),
      'eta (tecnico basico)'            => new sfWidgetFormInputText(),
      'educacion primaria de adultos'   => new sfWidgetFormInputText(),
      'educacion secundaria de adultos' => new sfWidgetFormInputText(),
      'eta (tecnico auxiliar)'          => new sfWidgetFormInputText(),
      'eta (tecnico medio)'             => new sfWidgetFormInputText(),
      'tecnica complementaria'          => new sfWidgetFormInputText(),
      'capacitacion tecnica laboral'    => new sfWidgetFormInputText(),
      'alfabetizacion proyectos'        => new sfWidgetFormInputText(),
      'alfabetizacion campa�as'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'                      => new sfValidatorInteger(array('required' => false)),
      'desc_modalidad'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_departamento'               => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cod_distrito'                    => new sfValidatorInteger(array('required' => false)),
      'distrito'                        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_ue'                          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'                         => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'desc_dependencia'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'rue'                             => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'fecha resolucion'                => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nro_resolucion'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'obs_rue'                         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'zona'                            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'direccion'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'certificado'                     => new sfValidatorInteger(array('required' => false)),
      'eta (tecnico basico)'            => new sfValidatorInteger(array('required' => false)),
      'educacion primaria de adultos'   => new sfValidatorInteger(array('required' => false)),
      'educacion secundaria de adultos' => new sfValidatorInteger(array('required' => false)),
      'eta (tecnico auxiliar)'          => new sfValidatorInteger(array('required' => false)),
      'eta (tecnico medio)'             => new sfValidatorInteger(array('required' => false)),
      'tecnica complementaria'          => new sfValidatorInteger(array('required' => false)),
      'capacitacion tecnica laboral'    => new sfValidatorInteger(array('required' => false)),
      'alfabetizacion proyectos'        => new sfValidatorInteger(array('required' => false)),
      'alfabetizacion campa�as'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_certificacion_rue_adultos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCertificacionRueAdultos';
  }

}
