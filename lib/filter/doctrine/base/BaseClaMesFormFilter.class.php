<?php

/**
 * ClaMes filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaMesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mes'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'mes'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_mes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaMes';
  }

  public function getFields()
  {
    return array(
      'id_mes' => 'Number',
      'mes'    => 'Text',
    );
  }
}
