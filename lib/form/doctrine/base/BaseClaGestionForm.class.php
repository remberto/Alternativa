<?php

/**
 * ClaGestion form base class.
 *
 * @method ClaGestion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaGestionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_gestion' => new sfWidgetFormInputHidden(),
      'cerrada'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_gestion' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_gestion', 'required' => false)),
      'cerrada'    => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_gestion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGestion';
  }

}
