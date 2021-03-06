<?php

/**
 * CtrRdeExtemporaneo form base class.
 *
 * @method CtrRdeExtemporaneo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeExtemporaneoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_extemporaneo'    => new sfWidgetFormInputHidden(),
      'fecha_extemporaneo' => new sfWidgetFormDateTime(),
      'inscripcion_id'     => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'rde_bool'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_extemporaneo'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_extemporaneo', 'required' => false)),
      'fecha_extemporaneo' => new sfValidatorDateTime(),
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'rde_bool'           => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_extemporaneo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeExtemporaneo';
  }

}
