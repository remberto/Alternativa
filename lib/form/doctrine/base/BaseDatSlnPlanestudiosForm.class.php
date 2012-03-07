<?php

/**
 * DatSlnPlanestudios form base class.
 *
 * @method DatSlnPlanestudios getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSlnPlanestudiosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_asignatura_id' => new sfWidgetFormInputHidden(),
      'plan_estudios_id'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cod_asignatura_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_asignatura_id', 'required' => false)),
      'plan_estudios_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'plan_estudios_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sln_planestudios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSlnPlanestudios';
  }

}
