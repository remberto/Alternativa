<?php

/**
 * VAlternativaAcreditacion form base class.
 *
 * @method VAlternativaAcreditacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVAlternativaAcreditacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'cod_ue'   => new sfWidgetFormInputText(),
      'desc_ue'  => new sfWidgetFormInputText(),
      'nivel_id' => new sfWidgetFormInputText(),
      'ciclo'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'cod_ue'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'  => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'nivel_id' => new sfValidatorInteger(array('required' => false)),
      'ciclo'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_alternativa_acreditacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VAlternativaAcreditacion';
  }

}
