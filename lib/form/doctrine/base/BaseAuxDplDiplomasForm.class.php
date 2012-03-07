<?php

/**
 * AuxDplDiplomas form base class.
 *
 * @method AuxDplDiplomas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxDplDiplomasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'serie_id'           => new sfWidgetFormInputHidden(),
      'serie_alfanumerico' => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'inscripcion_id'     => new sfWidgetFormInputHidden(),
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'cod_ue_id'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'serie_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'serie_id', 'required' => false)),
      'serie_alfanumerico' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'serie_alfanumerico', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'required' => false)),
      'cod_ue_id'          => new sfValidatorString(array('max_length' => 8)),
    ));

    $this->widgetSchema->setNameFormat('aux_dpl_diplomas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxDplDiplomas';
  }

}
