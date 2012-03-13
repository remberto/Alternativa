<?php

/**
 * ClaFormacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaFormacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_formacion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_formacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_formacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaFormacion';
  }

  public function getFields()
  {
    return array(
      'id_formacion'   => 'Number',
      'desc_formacion' => 'Text',
    );
  }
}
