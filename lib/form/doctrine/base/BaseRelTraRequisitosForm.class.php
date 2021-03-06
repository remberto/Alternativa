<?php

/**
 * RelTraRequisitos form base class.
 *
 * @method RelTraRequisitos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelTraRequisitosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'proceso_id'    => new sfWidgetFormInputHidden(),
      'requisito_id'  => new sfWidgetFormInputHidden(),
      'opcional'      => new sfWidgetFormInputText(),
      'componente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaComponente'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'proceso_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'proceso_id', 'required' => false)),
      'requisito_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'requisito_id', 'required' => false)),
      'opcional'      => new sfValidatorInteger(array('required' => false)),
      'componente_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaComponente'))),
    ));

    $this->widgetSchema->setNameFormat('rel_tra_requisitos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelTraRequisitos';
  }

}
