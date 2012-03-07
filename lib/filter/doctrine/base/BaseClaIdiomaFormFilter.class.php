<?php

/**
 * ClaIdioma filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaIdiomaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_idioma' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_idioma' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_idioma_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaIdioma';
  }

  public function getFields()
  {
    return array(
      'id_idioma'   => 'Number',
      'desc_idioma' => 'Text',
    );
  }
}
