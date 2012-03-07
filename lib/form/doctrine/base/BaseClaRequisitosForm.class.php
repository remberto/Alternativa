<?php

/**
 * ClaRequisitos form base class.
 *
 * @method ClaRequisitos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaRequisitosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_requisito'   => new sfWidgetFormInputHidden(),
      'desc_requisito' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_requisito'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_requisito', 'required' => false)),
      'desc_requisito' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_requisitos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaRequisitos';
  }

}
