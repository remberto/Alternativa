<?php

/**
 * SeqSlnCursoOferta form base class.
 *
 * @method SeqSlnCursoOferta getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSeqSlnCursoOfertaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'      => new sfWidgetFormInputHidden(),
      'cod_ue_id'       => new sfWidgetFormInputHidden(),
      'id_curso_oferta' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_ue_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'id_curso_oferta' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seq_sln_curso_oferta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeqSlnCursoOferta';
  }

}
