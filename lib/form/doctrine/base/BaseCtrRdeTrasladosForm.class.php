<?php

/**
 * CtrRdeTraslados form base class.
 *
 * @method CtrRdeTraslados getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeTrasladosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_traslado'      => new sfWidgetFormInputHidden(),
      'fecha_traslado'   => new sfWidgetFormDateTime(),
      'inscripcion_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'), 'add_empty' => false)),
      'gestion_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_3'), 'add_empty' => false)),
      'usuario_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'motivo_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaMotivo'), 'add_empty' => false)),
      'cod_ue_id_origen' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_traslado'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_traslado', 'required' => false)),
      'fecha_traslado'   => new sfValidatorDateTime(),
      'inscripcion_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'))),
      'gestion_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_3'))),
      'usuario_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'motivo_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaMotivo'))),
      'cod_ue_id_origen' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'))),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_traslados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeTraslados';
  }

}
