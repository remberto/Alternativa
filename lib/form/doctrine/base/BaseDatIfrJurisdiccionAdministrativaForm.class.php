<?php

/**
 * DatIfrJurisdiccionAdministrativa form base class.
 *
 * @method DatIfrJurisdiccionAdministrativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrJurisdiccionAdministrativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_distrito_id' => new sfWidgetFormInputHidden(),
      'gestion_id'      => new sfWidgetFormInputHidden(),
      'cod_le_id'       => new sfWidgetFormInputHidden(),
      'cod_cerrada_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => false)),
      'desc_creacion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_distrito_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_distrito_id', 'required' => false)),
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_le_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_le_id', 'required' => false)),
      'cod_cerrada_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'))),
      'desc_creacion'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_jurisdiccion_administrativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrJurisdiccionAdministrativa';
  }

}
