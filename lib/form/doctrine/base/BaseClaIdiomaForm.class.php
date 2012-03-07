<?php

/**
 * ClaIdioma form base class.
 *
 * @method ClaIdioma getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaIdiomaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_idioma'   => new sfWidgetFormInputHidden(),
      'desc_idioma' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_idioma'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_idioma', 'required' => false)),
      'desc_idioma' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_idioma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaIdioma';
  }

}
