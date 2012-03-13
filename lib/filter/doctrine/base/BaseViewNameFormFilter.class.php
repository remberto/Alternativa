<?php

/**
 * ViewName filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseViewNameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_departamento'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_departamento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_org_curr_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_departamento'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento' => new sfValidatorPass(array('required' => false)),
      'gestion_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_distrito'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'          => new sfValidatorPass(array('required' => false)),
      'tipo'              => new sfValidatorPass(array('required' => false)),
      'cod_ue'            => new sfValidatorPass(array('required' => false)),
      'desc_ue'           => new sfValidatorPass(array('required' => false)),
      'cod_org_curr_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('view_name_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ViewName';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_departamento'   => 'Number',
      'desc_departamento' => 'Text',
      'gestion_id'        => 'Number',
      'cod_distrito'      => 'Number',
      'distrito'          => 'Text',
      'tipo'              => 'Text',
      'cod_ue'            => 'Text',
      'desc_ue'           => 'Text',
      'cod_org_curr_id'   => 'Number',
    );
  }
}
