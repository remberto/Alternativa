<?php

/**
 * ClaProvincia form base class.
 *
 * @method ClaProvincia getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaProvinciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id' => new sfWidgetFormInputHidden(),
      'id_provincia'    => new sfWidgetFormInputHidden(),
      'desc_provincia'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'departamento_id', 'required' => false)),
      'id_provincia'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_provincia', 'required' => false)),
      'desc_provincia'  => new sfValidatorString(array('max_length' => 25)),
    ));

    $this->widgetSchema->setNameFormat('cla_provincia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaProvincia';
  }

}
