<?php

/**
 * ClaFinanciamiento form base class.
 *
 * @method ClaFinanciamiento getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaFinanciamientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_financiamiento'      => new sfWidgetFormInputHidden(),
      'desc_financiamiento'    => new sfWidgetFormInputText(),
      'tipo_financiamiento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoFinanciamiento'), 'add_empty' => false)),
      'abrv_financiamiento'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_financiamiento'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_financiamiento', 'required' => false)),
      'desc_financiamiento'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'tipo_financiamiento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoFinanciamiento'))),
      'abrv_financiamiento'    => new sfValidatorString(array('max_length' => 3)),
    ));

    $this->widgetSchema->setNameFormat('cla_financiamiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaFinanciamiento';
  }

}
