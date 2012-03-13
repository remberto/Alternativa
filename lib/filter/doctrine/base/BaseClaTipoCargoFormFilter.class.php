<?php

/**
 * ClaTipoCargo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoCargoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_tipo_cargo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_tipo_cargo' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_cargo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoCargo';
  }

  public function getFields()
  {
    return array(
      'id_tipo_cargo'   => 'Number',
      'desc_tipo_cargo' => 'Text',
    );
  }
}
