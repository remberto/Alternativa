<?php

/**
 * DatIfrJurisdiccionGeografica form base class.
 *
 * @method DatIfrJurisdiccionGeografica getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrJurisdiccionGeograficaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_le'          => new sfWidgetFormInputHidden(),
      'localidad_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad'), 'add_empty' => false)),
      'canton_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_2'), 'add_empty' => false)),
      'seccion_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_3'), 'add_empty' => false)),
      'provincia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_4'), 'add_empty' => false)),
      'departamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_5'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_le'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_le', 'required' => false)),
      'localidad_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad'))),
      'canton_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_2'))),
      'seccion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_3'))),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_4'))),
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_5'))),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_jurisdiccion_geografica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrJurisdiccionGeografica';
  }

}
