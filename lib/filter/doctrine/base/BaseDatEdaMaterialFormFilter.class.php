<?php

/**
 * DatEdaMaterial filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaMaterialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cantidad_danado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad_perdido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cantidad_danado'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantidad_perdido' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_material_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaMaterial';
  }

  public function getFields()
  {
    return array(
      'evento_id'        => 'Number',
      'cod_ue_id'        => 'Text',
      'gestion_id'       => 'Number',
      'material_id'      => 'Number',
      'cantidad_danado'  => 'Number',
      'cantidad_perdido' => 'Number',
    );
  }
}
