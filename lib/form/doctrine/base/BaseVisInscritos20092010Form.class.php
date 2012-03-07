<?php

/**
 * VisInscritos20092010 form base class.
 *
 * @method VisInscritos20092010 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisInscritos20092010Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                        => new sfWidgetFormInputHidden(),
      'gestion_id'                                => new sfWidgetFormInputText(),
      'cod_ue_id'                                 => new sfWidgetFormInputText(),
      'nivel_id'                                  => new sfWidgetFormInputText(),
      'grado_id'                                  => new sfWidgetFormInputText(),
      'genero'                                    => new sfWidgetFormInputText(),
      'count(dat_rde_inscripcion.codigo_rude_id)' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                                        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'                                => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'                                 => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nivel_id'                                  => new sfValidatorInteger(array('required' => false)),
      'grado_id'                                  => new sfValidatorInteger(array('required' => false)),
      'genero'                                    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'count(dat_rde_inscripcion.codigo_rude_id)' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_inscritos20092010[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisInscritos20092010';
  }

}
