<?php

/**
 * DatRueFormularios form base class.
 *
 * @method DatRueFormularios getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueFormulariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_formulario'    => new sfWidgetFormInputHidden(),
      'gestion_id'       => new sfWidgetFormInputHidden(),
      'fecha_formulario' => new sfWidgetFormDateTime(),
      'usuario_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_formulario'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_formulario', 'required' => false)),
      'gestion_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'fecha_formulario' => new sfValidatorDateTime(array('required' => false)),
      'usuario_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_formularios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueFormularios';
  }

}
