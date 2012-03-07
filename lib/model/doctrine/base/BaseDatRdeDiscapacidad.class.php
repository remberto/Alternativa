<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatRdeDiscapacidad', 'doctrine');

/**
 * BaseDatRdeDiscapacidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codigo_rude_id
 * @property integer $discapacidad_id
 * @property integer $origendiscapacidad_id
 * @property integer $gestion_id
 * @property timestamp $fecha_registro
 * @property DatRdeEstudiante $DatRdeEstudiante
 * @property ClaDiscapacidad $ClaDiscapacidad
 * @property ClaOrigendiscapacidad $ClaOrigendiscapacidad
 * @property ClaGestion $ClaGestion
 * 
 * @method string                getCodigoRudeId()          Returns the current record's "codigo_rude_id" value
 * @method integer               getDiscapacidadId()        Returns the current record's "discapacidad_id" value
 * @method integer               getOrigendiscapacidadId()  Returns the current record's "origendiscapacidad_id" value
 * @method integer               getGestionId()             Returns the current record's "gestion_id" value
 * @method timestamp             getFechaRegistro()         Returns the current record's "fecha_registro" value
 * @method DatRdeEstudiante      getDatRdeEstudiante()      Returns the current record's "DatRdeEstudiante" value
 * @method ClaDiscapacidad       getClaDiscapacidad()       Returns the current record's "ClaDiscapacidad" value
 * @method ClaOrigendiscapacidad getClaOrigendiscapacidad() Returns the current record's "ClaOrigendiscapacidad" value
 * @method ClaGestion            getClaGestion()            Returns the current record's "ClaGestion" value
 * @method DatRdeDiscapacidad    setCodigoRudeId()          Sets the current record's "codigo_rude_id" value
 * @method DatRdeDiscapacidad    setDiscapacidadId()        Sets the current record's "discapacidad_id" value
 * @method DatRdeDiscapacidad    setOrigendiscapacidadId()  Sets the current record's "origendiscapacidad_id" value
 * @method DatRdeDiscapacidad    setGestionId()             Sets the current record's "gestion_id" value
 * @method DatRdeDiscapacidad    setFechaRegistro()         Sets the current record's "fecha_registro" value
 * @method DatRdeDiscapacidad    setDatRdeEstudiante()      Sets the current record's "DatRdeEstudiante" value
 * @method DatRdeDiscapacidad    setClaDiscapacidad()       Sets the current record's "ClaDiscapacidad" value
 * @method DatRdeDiscapacidad    setClaOrigendiscapacidad() Sets the current record's "ClaOrigendiscapacidad" value
 * @method DatRdeDiscapacidad    setClaGestion()            Sets the current record's "ClaGestion" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatRdeDiscapacidad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_rde_discapacidad');
        $this->hasColumn('codigo_rude_id', 'string', 18, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '18',
             ));
        $this->hasColumn('discapacidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('origendiscapacidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('fecha_registro', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatRdeEstudiante', array(
             'local' => 'codigo_rude_id',
             'foreign' => 'codigo_rude'));

        $this->hasOne('ClaDiscapacidad', array(
             'local' => 'discapacidad_id',
             'foreign' => 'id_discapacidad'));

        $this->hasOne('ClaOrigendiscapacidad', array(
             'local' => 'origendiscapacidad_id',
             'foreign' => 'id_origendiscapacidad'));

        $this->hasOne('ClaGestion', array(
             'local' => 'gestion_id',
             'foreign' => 'id_gestion'));
    }
}