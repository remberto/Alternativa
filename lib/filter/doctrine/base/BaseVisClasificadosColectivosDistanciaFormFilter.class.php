<?php

/**
 * VisClasificadosColectivosDistancia filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisClasificadosColectivosDistanciaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'posicion'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genero_id'          => new sfWidgetFormFilterInput(),
      'desc_disciplina'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_prueba'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'circunscripcion_id' => new sfWidgetFormFilterInput(),
      'tipo_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'carnet_identidad'   => new sfWidgetFormFilterInput(),
      'paterno'            => new sfWidgetFormFilterInput(),
      'materno'            => new sfWidgetFormFilterInput(),
      'nombre'             => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'distancia'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue'             => new sfValidatorPass(array('required' => false)),
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'posicion'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'genero_id'          => new sfValidatorPass(array('required' => false)),
      'desc_disciplina'    => new sfValidatorPass(array('required' => false)),
      'desc_prueba'        => new sfValidatorPass(array('required' => false)),
      'circunscripcion_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_distrito'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'           => new sfValidatorPass(array('required' => false)),
      'codigo_rude'        => new sfValidatorPass(array('required' => false)),
      'carnet_identidad'   => new sfValidatorPass(array('required' => false)),
      'paterno'            => new sfValidatorPass(array('required' => false)),
      'materno'            => new sfValidatorPass(array('required' => false)),
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'distancia'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vis_clasificados_colectivos_distancia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisClasificadosColectivosDistancia';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'cod_ue'             => 'Text',
      'desc_ue'            => 'Text',
      'posicion'           => 'Number',
      'genero_id'          => 'Text',
      'desc_disciplina'    => 'Text',
      'desc_prueba'        => 'Text',
      'circunscripcion_id' => 'Number',
      'tipo_id'            => 'Number',
      'cod_distrito'       => 'Number',
      'distrito'           => 'Text',
      'codigo_rude'        => 'Text',
      'carnet_identidad'   => 'Text',
      'paterno'            => 'Text',
      'materno'            => 'Text',
      'nombre'             => 'Text',
      'fecha_nacimiento'   => 'Date',
      'distancia'          => 'Number',
    );
  }
}
