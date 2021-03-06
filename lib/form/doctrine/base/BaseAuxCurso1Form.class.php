<?php

/**
 * AuxCurso1 form base class.
 *
 * @method AuxCurso1 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxCurso1Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id' => new sfWidgetFormInputHidden(),
      'nivel_id'  => new sfWidgetFormInputHidden(),
      'grado'     => new sfWidgetFormInputHidden(),
      'paralelo'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cod_ue_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'nivel_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'grado'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado', 'required' => false)),
      'paralelo'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aux_curso1[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxCurso1';
  }

}
