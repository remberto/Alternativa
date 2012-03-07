<?php

/**
 * DatJueClasificados form base class.
 *
 * @method DatJueClasificados getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatJueClasificadosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'inscrito_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatJueInscritos'), 'add_empty' => false)),
      'fase'        => new sfWidgetFormInputText(),
      'marca'       => new sfWidgetFormInputText(),
      'distancia'   => new sfWidgetFormInputText(),
      'tipo_id'     => new sfWidgetFormInputText(),
      'genero_id'   => new sfWidgetFormInputText(),
      'posicion'    => new sfWidgetFormInputText(),
      'usuario_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'inscrito_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatJueInscritos'))),
      'fase'        => new sfValidatorInteger(),
      'marca'       => new sfValidatorNumber(array('required' => false)),
      'distancia'   => new sfValidatorNumber(array('required' => false)),
      'tipo_id'     => new sfValidatorInteger(),
      'genero_id'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'posicion'    => new sfValidatorInteger(),
      'usuario_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
    ));

    $this->widgetSchema->setNameFormat('dat_jue_clasificados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatJueClasificados';
  }

}
