<?php

/**
 * ClaAcciones form base class.
 *
 * @method ClaAcciones getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAccionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_accion'   => new sfWidgetFormInputHidden(),
      'desc_accion' => new sfWidgetFormInputText(),
      'url_accion'  => new sfWidgetFormInputText(),
      'proceso_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraProceso'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_accion'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_accion', 'required' => false)),
      'desc_accion' => new sfValidatorString(array('max_length' => 45)),
      'url_accion'  => new sfValidatorString(array('max_length' => 80)),
      'proceso_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraProceso'))),
    ));

    $this->widgetSchema->setNameFormat('cla_acciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAcciones';
  }

}
