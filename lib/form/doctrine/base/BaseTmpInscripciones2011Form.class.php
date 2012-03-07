<?php

/**
 * TmpInscripciones2011 form base class.
 *
 * @method TmpInscripciones2011 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpInscripciones2011Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'        => new sfWidgetFormInputHidden(),
      'carnet_identidad'   => new sfWidgetFormInputText(),
      'libreta_militar'    => new sfWidgetFormInputText(),
      'paterno'            => new sfWidgetFormInputText(),
      'materno'            => new sfWidgetFormInputText(),
      'nombre'             => new sfWidgetFormInputText(),
      'fecha_nacimiento'   => new sfWidgetFormDate(),
      'genero'             => new sfWidgetFormInputText(),
      'inscrito_nuevo'     => new sfWidgetFormInputText(),
      'inscrito_repitente' => new sfWidgetFormInputText(),
      'nivel'              => new sfWidgetFormInputText(),
      'grado'              => new sfWidgetFormInputText(),
      'paralelo'           => new sfWidgetFormInputText(),
      'turno'              => new sfWidgetFormInputText(),
      'fecha_inscripcion'  => new sfWidgetFormDate(),
      'pais'               => new sfWidgetFormInputText(),
      'departamento'       => new sfWidgetFormInputText(),
      'provincia'          => new sfWidgetFormInputText(),
      'localidad'          => new sfWidgetFormInputText(),
      'oficialia'          => new sfWidgetFormInputText(),
      'libro'              => new sfWidgetFormInputText(),
      'partida'            => new sfWidgetFormInputText(),
      'folio'              => new sfWidgetFormInputText(),
      'seguimiento'        => new sfWidgetFormInputText(),
      'gestion_2010'       => new sfWidgetFormInputText(),
      'estado_fin_2010'    => new sfWidgetFormInputText(),
      'cod_ue'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo_rude'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude', 'required' => false)),
      'carnet_identidad'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'libreta_militar'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'materno'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nombre'             => new sfValidatorString(array('max_length' => 50)),
      'fecha_nacimiento'   => new sfValidatorDate(),
      'genero'             => new sfValidatorString(array('max_length' => 1)),
      'inscrito_nuevo'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'inscrito_repitente' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nivel'              => new sfValidatorString(array('max_length' => 45)),
      'grado'              => new sfValidatorString(array('max_length' => 1)),
      'paralelo'           => new sfValidatorString(array('max_length' => 2)),
      'turno'              => new sfValidatorString(array('max_length' => 4)),
      'fecha_inscripcion'  => new sfValidatorDate(array('required' => false)),
      'pais'               => new sfValidatorString(array('max_length' => 45)),
      'departamento'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'provincia'          => new sfValidatorString(array('max_length' => 65, 'required' => false)),
      'localidad'          => new sfValidatorString(array('max_length' => 165, 'required' => false)),
      'oficialia'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'libro'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'partida'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'folio'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'seguimiento'        => new sfValidatorInteger(),
      'gestion_2010'       => new sfValidatorInteger(),
      'estado_fin_2010'    => new sfValidatorInteger(),
      'cod_ue'             => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tmp_inscripciones2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpInscripciones2011';
  }

}
