<?php

/**
 * RelUsuarioUe form base class.
 *
 * @method RelUsuarioUe getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelUsuarioUeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id' => new sfWidgetFormInputHidden(),
      'cod_ue_id'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'usuario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'usuario_id', 'required' => false)),
      'cod_ue_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_usuario_ue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelUsuarioUe';
  }

}
