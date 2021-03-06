<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatRiesgos', 'doctrine');

/**
 * BaseDatRiesgos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codigo_ue_id
 * @property integer $tipo_danio
 * @property integer $grado_porcentaje
 * @property integer $id_user
 * @property string $observacion
 * @property timestamp $fecha_reporte
 * @property integer $id
 * @property DatRueUnidadEducativa $DatRueUnidadEducativa
 * @property ClaRiesgo $ClaRiesgo
 * @property DatUsuUsuario $DatUsuUsuario
 * 
 * @method string                getCodigoUeId()            Returns the current record's "codigo_ue_id" value
 * @method integer               getTipoDanio()             Returns the current record's "tipo_danio" value
 * @method integer               getGradoPorcentaje()       Returns the current record's "grado_porcentaje" value
 * @method integer               getIdUser()                Returns the current record's "id_user" value
 * @method string                getObservacion()           Returns the current record's "observacion" value
 * @method timestamp             getFechaReporte()          Returns the current record's "fecha_reporte" value
 * @method integer               getId()                    Returns the current record's "id" value
 * @method DatRueUnidadEducativa getDatRueUnidadEducativa() Returns the current record's "DatRueUnidadEducativa" value
 * @method ClaRiesgo             getClaRiesgo()             Returns the current record's "ClaRiesgo" value
 * @method DatUsuUsuario         getDatUsuUsuario()         Returns the current record's "DatUsuUsuario" value
 * @method DatRiesgos            setCodigoUeId()            Sets the current record's "codigo_ue_id" value
 * @method DatRiesgos            setTipoDanio()             Sets the current record's "tipo_danio" value
 * @method DatRiesgos            setGradoPorcentaje()       Sets the current record's "grado_porcentaje" value
 * @method DatRiesgos            setIdUser()                Sets the current record's "id_user" value
 * @method DatRiesgos            setObservacion()           Sets the current record's "observacion" value
 * @method DatRiesgos            setFechaReporte()          Sets the current record's "fecha_reporte" value
 * @method DatRiesgos            setId()                    Sets the current record's "id" value
 * @method DatRiesgos            setDatRueUnidadEducativa() Sets the current record's "DatRueUnidadEducativa" value
 * @method DatRiesgos            setClaRiesgo()             Sets the current record's "ClaRiesgo" value
 * @method DatRiesgos            setDatUsuUsuario()         Sets the current record's "DatUsuUsuario" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatRiesgos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_riesgos');
        $this->hasColumn('codigo_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('tipo_danio', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_porcentaje', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('id_user', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('observacion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('fecha_reporte', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatRueUnidadEducativa', array(
             'local' => 'codigo_ue_id',
             'foreign' => 'cod_ue'));

        $this->hasOne('ClaRiesgo', array(
             'local' => 'tipo_danio',
             'foreign' => 'id_riego'));

        $this->hasOne('DatUsuUsuario', array(
             'local' => 'id_user',
             'foreign' => 'id'));
    }
}