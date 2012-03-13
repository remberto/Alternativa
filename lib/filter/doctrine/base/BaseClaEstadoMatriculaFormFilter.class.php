<?php

/**
 * ClaEstadoMatricula filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEstadoMatriculaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_estado_matricula' => new sfWidgetFormFilterInput(),
      'operativo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_estado_matricula' => new sfValidatorPass(array('required' => false)),
      'operativo'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cla_estado_matricula_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEstadoMatricula';
  }

  public function getFields()
  {
    return array(
      'id_estado_matricula'   => 'Number',
      'desc_estado_matricula' => 'Text',
      'operativo'             => 'Number',
    );
  }
}
