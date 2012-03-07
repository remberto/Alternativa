<?php

/**
 * DatRdeSocioEconomico form base class.
 *
 * @method DatRdeSocioEconomico getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeSocioEconomicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscripcion_id'                  => new sfWidgetFormInputHidden(),
      'gestion_id'                      => new sfWidgetFormInputHidden(),
      'certificado_nac'                 => new sfWidgetFormInputText(),
      'libreta_escolar'                 => new sfWidgetFormInputText(),
      'libreta_familiar'                => new sfWidgetFormInputText(),
      'libreta_militar'                 => new sfWidgetFormInputText(),
      'libreta_vacunas'                 => new sfWidgetFormInputText(),
      'medio_comunicacion_celular'      => new sfWidgetFormInputText(),
      'medio_comunicacion_telefono'     => new sfWidgetFormInputText(),
      'medio_comunicacion_television'   => new sfWidgetFormInputText(),
      'medio_comunicacion_computadora'  => new sfWidgetFormInputText(),
      'medio_comunicacion_radio'        => new sfWidgetFormInputText(),
      'medio_comunicacion_internet'     => new sfWidgetFormInputText(),
      'seguro_salud'                    => new sfWidgetFormInputText(),
      'discapacidad_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDiscapacidad'), 'add_empty' => false)),
      'origendiscapacidad_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrigendiscapacidad'), 'add_empty' => false)),
      'atencionmedica_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaAtencionmedica'), 'add_empty' => false)),
      'servicio_aguadomicilio'          => new sfWidgetFormInputText(),
      'servicio_aguapileta'             => new sfWidgetFormInputText(),
      'servicio_agualagolaguna'         => new sfWidgetFormInputText(),
      'servicio_aguapozo'               => new sfWidgetFormInputText(),
      'servicio_aguasisterna'           => new sfWidgetFormInputText(),
      'servicio_aguavertiente'          => new sfWidgetFormInputText(),
      'servicio_energiaredpublica'      => new sfWidgetFormInputText(),
      'servicio_energiageneradorelectr' => new sfWidgetFormInputText(),
      'servicio_energiapanelsolar'      => new sfWidgetFormInputText(),
      'servicio_gasdomicilio'           => new sfWidgetFormInputText(),
      'servicio_gaslicuado'             => new sfWidgetFormInputText(),
      'servicio_gasnatural'             => new sfWidgetFormInputText(),
      'servicio_sanitarioalcantarillad' => new sfWidgetFormInputText(),
      'servicio_sanitariopozoseptico'   => new sfWidgetFormInputText(),
      'direccion_departamento_id'       => new sfWidgetFormInputText(),
      'direccion_provincia_id'          => new sfWidgetFormInputText(),
      'direccion_seccion_id'            => new sfWidgetFormInputText(),
      'direccion_canton_id'             => new sfWidgetFormInputText(),
      'direccion_localidad_id'          => new sfWidgetFormInputText(),
      'empleo'                          => new sfWidgetFormInputText(),
      'direccion_desc_localidad'        => new sfWidgetFormInputText(),
      'direccion_zona'                  => new sfWidgetFormInputText(),
      'direccion_calle_nro'             => new sfWidgetFormInputText(),
      'direccion_telefono'              => new sfWidgetFormInputText(),
      'idioma1_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => false)),
      'idioma2_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_5'), 'add_empty' => false)),
      'idioma3_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_6'), 'add_empty' => false)),
      'idioma4_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_7'), 'add_empty' => false)),
      'idioma5_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_8'), 'add_empty' => false)),
      'idioma6_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_9'), 'add_empty' => false)),
      'etnia_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEtnia'), 'add_empty' => false)),
      'transporte_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTransporte'), 'add_empty' => false)),
      'transporte_tiempo'               => new sfWidgetFormInputText(),
      'transporte_distancia'            => new sfWidgetFormInputText(),
      'numero_hijo'                     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'inscripcion_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'gestion_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'certificado_nac'                 => new sfValidatorInteger(array('required' => false)),
      'libreta_escolar'                 => new sfValidatorInteger(array('required' => false)),
      'libreta_familiar'                => new sfValidatorInteger(array('required' => false)),
      'libreta_militar'                 => new sfValidatorInteger(array('required' => false)),
      'libreta_vacunas'                 => new sfValidatorInteger(array('required' => false)),
      'medio_comunicacion_celular'      => new sfValidatorInteger(array('required' => false)),
      'medio_comunicacion_telefono'     => new sfValidatorInteger(array('required' => false)),
      'medio_comunicacion_television'   => new sfValidatorInteger(array('required' => false)),
      'medio_comunicacion_computadora'  => new sfValidatorInteger(array('required' => false)),
      'medio_comunicacion_radio'        => new sfValidatorInteger(array('required' => false)),
      'medio_comunicacion_internet'     => new sfValidatorInteger(array('required' => false)),
      'seguro_salud'                    => new sfValidatorInteger(array('required' => false)),
      'discapacidad_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDiscapacidad'), 'required' => false)),
      'origendiscapacidad_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrigendiscapacidad'), 'required' => false)),
      'atencionmedica_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaAtencionmedica'), 'required' => false)),
      'servicio_aguadomicilio'          => new sfValidatorInteger(array('required' => false)),
      'servicio_aguapileta'             => new sfValidatorInteger(array('required' => false)),
      'servicio_agualagolaguna'         => new sfValidatorInteger(array('required' => false)),
      'servicio_aguapozo'               => new sfValidatorInteger(array('required' => false)),
      'servicio_aguasisterna'           => new sfValidatorInteger(array('required' => false)),
      'servicio_aguavertiente'          => new sfValidatorInteger(array('required' => false)),
      'servicio_energiaredpublica'      => new sfValidatorInteger(array('required' => false)),
      'servicio_energiageneradorelectr' => new sfValidatorInteger(array('required' => false)),
      'servicio_energiapanelsolar'      => new sfValidatorInteger(array('required' => false)),
      'servicio_gasdomicilio'           => new sfValidatorInteger(array('required' => false)),
      'servicio_gaslicuado'             => new sfValidatorInteger(array('required' => false)),
      'servicio_gasnatural'             => new sfValidatorInteger(array('required' => false)),
      'servicio_sanitarioalcantarillad' => new sfValidatorInteger(array('required' => false)),
      'servicio_sanitariopozoseptico'   => new sfValidatorInteger(array('required' => false)),
      'direccion_departamento_id'       => new sfValidatorInteger(),
      'direccion_provincia_id'          => new sfValidatorInteger(),
      'direccion_seccion_id'            => new sfValidatorInteger(),
      'direccion_canton_id'             => new sfValidatorInteger(),
      'direccion_localidad_id'          => new sfValidatorString(array('max_length' => 6)),
      'empleo'                          => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'direccion_desc_localidad'        => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'direccion_zona'                  => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'direccion_calle_nro'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion_telefono'              => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'idioma1_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'required' => false)),
      'idioma2_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_5'), 'required' => false)),
      'idioma3_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_6'), 'required' => false)),
      'idioma4_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_7'), 'required' => false)),
      'idioma5_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_8'), 'required' => false)),
      'idioma6_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_9'), 'required' => false)),
      'etnia_id'                        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEtnia'), 'required' => false)),
      'transporte_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTransporte'), 'required' => false)),
      'transporte_tiempo'               => new sfValidatorInteger(array('required' => false)),
      'transporte_distancia'            => new sfValidatorInteger(array('required' => false)),
      'numero_hijo'                     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_socio_economico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeSocioEconomico';
  }

}
