<?php

/**
 * HisSlnFormal form base class.
 *
 * @method HisSlnFormal getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHisSlnFormalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_his_sln_formal'  => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputText(),
      'cod_ue_id'          => new sfWidgetFormInputText(),
      'curso_oferta_id'    => new sfWidgetFormInputText(),
      'inscripcion_id'     => new sfWidgetFormInputText(),
      'primer_trimestre'   => new sfWidgetFormInputText(),
      'segundo_trimestre'  => new sfWidgetFormInputText(),
      'tercer_trimestre'   => new sfWidgetFormInputText(),
      'promedio_anual'     => new sfWidgetFormInputText(),
      'reforzamiento'      => new sfWidgetFormInputText(),
      'promedio_final'     => new sfWidgetFormInputText(),
      'usuario_id'         => new sfWidgetFormInputText(),
      'fecha_modificacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_his_sln_formal'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_his_sln_formal', 'required' => false)),
      'gestion_id'         => new sfValidatorInteger(),
      'cod_ue_id'          => new sfValidatorString(array('max_length' => 8)),
      'curso_oferta_id'    => new sfValidatorInteger(),
      'inscripcion_id'     => new sfValidatorInteger(),
      'primer_trimestre'   => new sfValidatorInteger(),
      'segundo_trimestre'  => new sfValidatorInteger(),
      'tercer_trimestre'   => new sfValidatorInteger(),
      'promedio_anual'     => new sfValidatorInteger(),
      'reforzamiento'      => new sfValidatorInteger(),
      'promedio_final'     => new sfValidatorInteger(),
      'usuario_id'         => new sfValidatorInteger(),
      'fecha_modificacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('his_sln_formal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HisSlnFormal';
  }

}
