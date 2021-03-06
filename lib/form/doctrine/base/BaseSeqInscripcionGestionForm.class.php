<?php

/**
 * SeqInscripcionGestion form base class.
 *
 * @method SeqInscripcionGestion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSeqInscripcionGestionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'       => new sfWidgetFormInputHidden(),
      'numero_matricula' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'gestion_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'numero_matricula' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('seq_inscripcion_gestion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeqInscripcionGestion';
  }

}
