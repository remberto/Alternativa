<?php

/**
 * VisGestion2010 form base class.
 *
 * @method VisGestion2010 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisGestion2010Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'id_inscripcion'             => new sfWidgetFormInputText(),
      'gestion_id'                 => new sfWidgetFormInputText(),
      'cod_distrito'               => new sfWidgetFormInputText(),
      'distrito'                   => new sfWidgetFormInputText(),
      'cod_ue'                     => new sfWidgetFormInputText(),
      'desc_ue'                    => new sfWidgetFormInputText(),
      'codigo_rude'                => new sfWidgetFormInputText(),
      'carnet_identidad'           => new sfWidgetFormInputText(),
      'paterno'                    => new sfWidgetFormInputText(),
      'materno'                    => new sfWidgetFormInputText(),
      'nombre'                     => new sfWidgetFormInputText(),
      'fecha_nacimiento'           => new sfWidgetFormDate(),
      'genero'                     => new sfWidgetFormInputText(),
      'nivel_id'                   => new sfWidgetFormInputText(),
      'desc_nivel'                 => new sfWidgetFormInputText(),
      'id_grado'                   => new sfWidgetFormInputText(),
      'desc_grado'                 => new sfWidgetFormInputText(),
      'paralelo'                   => new sfWidgetFormInputText(),
      'desc_abrv'                  => new sfWidgetFormInputText(),
      'estado_matricula_inicio_id' => new sfWidgetFormInputText(),
      'matricula_inicio'           => new sfWidgetFormInputText(),
      'matricula_fin'              => new sfWidgetFormInputText(),
      'desc_estado_matricula'      => new sfWidgetFormInputText(),
      'cod_org_curr'               => new sfWidgetFormInputText(),
      'desc_modalidad'             => new sfWidgetFormInputText(),
      'cod_dependencia'            => new sfWidgetFormInputText(),
      'desc_dependencia'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_inscripcion'             => new sfValidatorInteger(),
      'gestion_id'                 => new sfValidatorInteger(),
      'cod_distrito'               => new sfValidatorInteger(),
      'distrito'                   => new sfValidatorString(array('max_length' => 45)),
      'cod_ue'                     => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'                    => new sfValidatorString(array('max_length' => 70)),
      'codigo_rude'                => new sfValidatorString(array('max_length' => 18)),
      'carnet_identidad'           => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'paterno'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'                     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'           => new sfValidatorDate(array('required' => false)),
      'genero'                     => new sfValidatorString(array('max_length' => 1)),
      'nivel_id'                   => new sfValidatorInteger(),
      'desc_nivel'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_grado'                   => new sfValidatorInteger(),
      'desc_grado'                 => new sfValidatorString(array('max_length' => 45)),
      'paralelo'                   => new sfValidatorString(array('max_length' => 2)),
      'desc_abrv'                  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'estado_matricula_inicio_id' => new sfValidatorInteger(),
      'matricula_inicio'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'matricula_fin'              => new sfValidatorInteger(),
      'desc_estado_matricula'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_org_curr'               => new sfValidatorInteger(),
      'desc_modalidad'             => new sfValidatorString(array('max_length' => 45)),
      'cod_dependencia'            => new sfValidatorInteger(),
      'desc_dependencia'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_gestion2010[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisGestion2010';
  }

}
