<?php

/**
 * ClaDatosComponente form base class.
 *
 * @method ClaDatosComponente getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDatosComponenteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_datos_componente'   => new sfWidgetFormInputHidden(),
      'requisito_id'          => new sfWidgetFormInputText(),
      'tramite_id'            => new sfWidgetFormInputText(),
      'desc_datos_componente' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_datos_componente'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_datos_componente', 'required' => false)),
      'requisito_id'          => new sfValidatorInteger(),
      'tramite_id'            => new sfValidatorInteger(),
      'desc_datos_componente' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_datos_componente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDatosComponente';
  }

}
