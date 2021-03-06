<?php

/**
 * CtrRdeCambioGrado form base class.
 *
 * @method CtrRdeCambioGrado getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeCambioGradoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion' => new sfWidgetFormInputHidden(),
      'gestion_id'     => new sfWidgetFormInputHidden(),
      'nivel_id'       => new sfWidgetFormInputHidden(),
      'ciclo_id'       => new sfWidgetFormInputHidden(),
      'grado_id'       => new sfWidgetFormInputHidden(),
      'paralelo'       => new sfWidgetFormInputHidden(),
      'turno_id'       => new sfWidgetFormInputHidden(),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'fecha_cambio'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_inscripcion' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_inscripcion', 'required' => false)),
      'gestion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'nivel_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'grado_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado_id', 'required' => false)),
      'paralelo'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'turno_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'turno_id', 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'fecha_cambio'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'fecha_cambio', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_cambio_grado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeCambioGrado';
  }

}
