<?php

/**
 * ClaCursoOferta form base class.
 *
 * @method ClaCursoOferta getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCursoOfertaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_curso_oferta'   => new sfWidgetFormInputHidden(),
      'desc_curso_oferta' => new sfWidgetFormInputText(),
      'area_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaArea'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_curso_oferta'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_curso_oferta', 'required' => false)),
      'desc_curso_oferta' => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'area_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaArea'))),
    ));

    $this->widgetSchema->setNameFormat('cla_curso_oferta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCursoOferta';
  }

}
