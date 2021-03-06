<?php

/**
 * DatDplSerie form base class.
 *
 * @method DatDplSerie getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatDplSerieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_serie'            => new sfWidgetFormInputHidden(),
      'serie_alfanumerico'  => new sfWidgetFormInputHidden(),
      'gestion_id'          => new sfWidgetFormInputHidden(),
      'departamento_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => true)),
      'valido'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDplValido'), 'add_empty' => true)),
      'observacion_anulado' => new sfWidgetFormInputText(),
      'usuario_anulado'     => new sfWidgetFormInputText(),
      'fecha_anulado'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_serie'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_serie', 'required' => false)),
      'serie_alfanumerico'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'serie_alfanumerico', 'required' => false)),
      'gestion_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'departamento_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'required' => false)),
      'valido'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDplValido'), 'required' => false)),
      'observacion_anulado' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'usuario_anulado'     => new sfValidatorInteger(array('required' => false)),
      'fecha_anulado'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_dpl_serie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatDplSerie';
  }

}
