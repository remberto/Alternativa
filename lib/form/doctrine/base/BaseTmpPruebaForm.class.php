<?php

/**
 * TmpPrueba form base class.
 *
 * @method TmpPrueba getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpPruebaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormInputHidden(),
      'texto' => new sfWidgetFormInputText(),
      'fecha' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'texto' => new sfValidatorString(array('max_length' => 45)),
      'fecha' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tmp_prueba[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpPrueba';
  }

}
