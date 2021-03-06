<?php

/**
 * TmpSieAdministrativo form base class.
 *
 * @method TmpSieAdministrativo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpSieAdministrativoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci_administrativo_id' => new sfWidgetFormInputHidden(),
      'cod_ue_id'            => new sfWidgetFormInputHidden(),
      'sub_cea'              => new sfWidgetFormInputHidden(),
      'gestion_id'           => new sfWidgetFormInputHidden(),
      'periodo_id'           => new sfWidgetFormInputHidden(),
      'operativo_id'         => new sfWidgetFormInputHidden(),
      'financiamiento_id'    => new sfWidgetFormInputText(),
      'cargo_id'             => new sfWidgetFormInputText(),
      'servicio'             => new sfWidgetFormInputText(),
      'item'                 => new sfWidgetFormInputText(),
      'formacion'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ci_administrativo_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ci_administrativo_id', 'required' => false)),
      'cod_ue_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea', 'required' => false)),
      'gestion_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'periodo_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'operativo_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'financiamiento_id'    => new sfValidatorInteger(),
      'cargo_id'             => new sfValidatorInteger(),
      'servicio'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'item'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'formacion'            => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tmp_sie_administrativo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpSieAdministrativo';
  }

}
