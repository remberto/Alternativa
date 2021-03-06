<?php

/**
 * CtrDplImpresion form base class.
 *
 * @method CtrDplImpresion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrDplImpresionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'  => new sfWidgetFormInputHidden(),
      'gestion_id'      => new sfWidgetFormInputHidden(),
      'codigo_rude_id'  => new sfWidgetFormInputText(),
      'numero_serie'    => new sfWidgetFormInputText(),
      'fecha_impresion' => new sfWidgetFormDateTime(),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'obs'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_inscripcion'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_inscripcion', 'required' => false)),
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude_id'  => new sfValidatorString(array('max_length' => 18)),
      'numero_serie'    => new sfValidatorString(array('max_length' => 15)),
      'fecha_impresion' => new sfValidatorDateTime(),
      'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'obs'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_dpl_impresion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrDplImpresion';
  }

}
