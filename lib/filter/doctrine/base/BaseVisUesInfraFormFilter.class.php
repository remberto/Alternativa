<?php

/**
 * VisUesInfra filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisUesInfraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'      => new sfWidgetFormFilterInput(),
      'cod_le'          => new sfWidgetFormFilterInput(),
      'cod_ue'          => new sfWidgetFormFilterInput(),
      'desc_ue'         => new sfWidgetFormFilterInput(),
      'departamento_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_le'          => new sfValidatorPass(array('required' => false)),
      'cod_ue'          => new sfValidatorPass(array('required' => false)),
      'desc_ue'         => new sfValidatorPass(array('required' => false)),
      'departamento_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vis_ues_infra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisUesInfra';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'gestion_id'      => 'Number',
      'cod_le'          => 'Text',
      'cod_ue'          => 'Text',
      'desc_ue'         => 'Text',
      'departamento_id' => 'Number',
    );
  }
}
