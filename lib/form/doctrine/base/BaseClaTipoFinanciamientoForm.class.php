<?php

/**
 * ClaTipoFinanciamiento form base class.
 *
 * @method ClaTipoFinanciamiento getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoFinanciamientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_financiamiento'   => new sfWidgetFormInputHidden(),
      'desc_tipo_financiamiento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_financiamiento'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_tipo_financiamiento', 'required' => false)),
      'desc_tipo_financiamiento' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_financiamiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoFinanciamiento';
  }

}
