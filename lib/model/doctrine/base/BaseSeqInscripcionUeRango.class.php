<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SeqInscripcionUeRango', 'doctrine');

/**
 * BaseSeqInscripcionUeRango
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_ue_id
 * @property integer $gestion_id
 * @property integer $rango_inicio
 * @property integer $rango_fin
 * @property integer $numero_matricula
 * @property integer $habilitado
 * @property ClaGestion $ClaGestion
 * @property DatRueUnidadEducativa $DatRueUnidadEducativa
 * 
 * @method string                getCodUeId()               Returns the current record's "cod_ue_id" value
 * @method integer               getGestionId()             Returns the current record's "gestion_id" value
 * @method integer               getRangoInicio()           Returns the current record's "rango_inicio" value
 * @method integer               getRangoFin()              Returns the current record's "rango_fin" value
 * @method integer               getNumeroMatricula()       Returns the current record's "numero_matricula" value
 * @method integer               getHabilitado()            Returns the current record's "habilitado" value
 * @method ClaGestion            getClaGestion()            Returns the current record's "ClaGestion" value
 * @method DatRueUnidadEducativa getDatRueUnidadEducativa() Returns the current record's "DatRueUnidadEducativa" value
 * @method SeqInscripcionUeRango setCodUeId()               Sets the current record's "cod_ue_id" value
 * @method SeqInscripcionUeRango setGestionId()             Sets the current record's "gestion_id" value
 * @method SeqInscripcionUeRango setRangoInicio()           Sets the current record's "rango_inicio" value
 * @method SeqInscripcionUeRango setRangoFin()              Sets the current record's "rango_fin" value
 * @method SeqInscripcionUeRango setNumeroMatricula()       Sets the current record's "numero_matricula" value
 * @method SeqInscripcionUeRango setHabilitado()            Sets the current record's "habilitado" value
 * @method SeqInscripcionUeRango setClaGestion()            Sets the current record's "ClaGestion" value
 * @method SeqInscripcionUeRango setDatRueUnidadEducativa() Sets the current record's "DatRueUnidadEducativa" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSeqInscripcionUeRango extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seq_inscripcion_ue_rango');
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('rango_inicio', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('rango_fin', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('numero_matricula', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('habilitado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaGestion', array(
             'local' => 'gestion_id',
             'foreign' => 'id_gestion'));

        $this->hasOne('DatRueUnidadEducativa', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue'));
    }
}