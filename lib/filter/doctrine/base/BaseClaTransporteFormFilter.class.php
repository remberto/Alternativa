<?php

/**
 * ClaTransporte filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTransporteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_transporte' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_transporte' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_transporte_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTransporte';
  }

  public function getFields()
  {
    return array(
      'id_transporte'   => 'Number',
      'desc_transporte' => 'Text',
    );
  }
}
