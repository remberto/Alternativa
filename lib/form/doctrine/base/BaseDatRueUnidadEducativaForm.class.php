<?php

/**
 * DatRueUnidadEducativa form base class.
 *
 * @method DatRueUnidadEducativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueUnidadEducativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue'             => new sfWidgetFormInputHidden(),
      'desc_ue'            => new sfWidgetFormInputText(),
      'rue_ue'             => new sfWidgetFormInputText(),
      'fecha_resolucion'   => new sfWidgetFormDateTime(),
      'nro_resolucion'     => new sfWidgetFormInputText(),
      'obs_rue'            => new sfWidgetFormInputText(),
      'des_ue_antes'       => new sfWidgetFormInputText(),
      'cod_le_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatIfrJurisdiccionGeografica'), 'add_empty' => false)),
      'cod_org_curr_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => false)),
      'cod_dependencia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => false)),
      'cod_convenio_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'), 'add_empty' => false)),
      'cod_cerrada_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => false)),
      'fecha_creacion'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cod_ue'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue', 'required' => false)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70)),
      'rue_ue'             => new sfValidatorInteger(),
      'fecha_resolucion'   => new sfValidatorDateTime(array('required' => false)),
      'nro_resolucion'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'obs_rue'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'des_ue_antes'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_le_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatIfrJurisdiccionGeografica'))),
      'cod_org_curr_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'))),
      'cod_dependencia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'))),
      'cod_convenio_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'))),
      'cod_cerrada_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'))),
      'fecha_creacion'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_unidad_educativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueUnidadEducativa';
  }

}
