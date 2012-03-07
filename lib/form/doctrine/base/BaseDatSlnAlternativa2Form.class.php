<?php

/**
 * DatSlnAlternativa2 form base class.
 *
 * @method DatSlnAlternativa2 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSlnAlternativa2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'      => new sfWidgetFormInputHidden(),
      'cod_ue_id'       => new sfWidgetFormInputHidden(),
      'curso_oferta_id' => new sfWidgetFormInputHidden(),
      'inscripcion_id'  => new sfWidgetFormInputHidden(),
      'participacion'   => new sfWidgetFormInputText(),
      'aplicacion'      => new sfWidgetFormInputText(),
      'conocimientos'   => new sfWidgetFormInputText(),
      'promedio_anual'  => new sfWidgetFormInputText(),
      'observacion'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_ue_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'curso_oferta_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'curso_oferta_id', 'required' => false)),
      'inscripcion_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'participacion'   => new sfValidatorInteger(array('required' => false)),
      'aplicacion'      => new sfValidatorInteger(array('required' => false)),
      'conocimientos'   => new sfValidatorInteger(array('required' => false)),
      'promedio_anual'  => new sfValidatorInteger(array('required' => false)),
      'observacion'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sln_alternativa2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSlnAlternativa2';
  }

}
