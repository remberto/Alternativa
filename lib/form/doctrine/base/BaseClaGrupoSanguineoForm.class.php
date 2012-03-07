<?php

/**
 * ClaGrupoSanguineo form base class.
 *
 * @method ClaGrupoSanguineo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaGrupoSanguineoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_grupo_sanguineo'   => new sfWidgetFormInputHidden(),
      'desc_grupo_sanguineo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_grupo_sanguineo'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_grupo_sanguineo', 'required' => false)),
      'desc_grupo_sanguineo' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_grupo_sanguineo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGrupoSanguineo';
  }

}
