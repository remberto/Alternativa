<?php

/**
 * DatNlcSeccionDistrito form base class.
 *
 * @method DatNlcSeccionDistrito getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatNlcSeccionDistritoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id' => new sfWidgetFormInputHidden(),
      'provincia_id'    => new sfWidgetFormInputHidden(),
      'seccion_id'      => new sfWidgetFormInputHidden(),
      'cod_distrito_id' => new sfWidgetFormInputHidden(),
      'gestion_id'      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'departamento_id', 'required' => false)),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'provincia_id', 'required' => false)),
      'seccion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'seccion_id', 'required' => false)),
      'cod_distrito_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_distrito_id', 'required' => false)),
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_nlc_seccion_distrito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatNlcSeccionDistrito';
  }

}
