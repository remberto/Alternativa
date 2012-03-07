<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatDplDiplomas', 'doctrine');

/**
 * BaseDatDplDiplomas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $serie_id
 * @property string $serie_alfanumerico
 * @property integer $gestion_id
 * @property integer $inscripcion_id
 * @property integer $usuario_id
 * @property timestamp $fecha_impresion
 * @property string $observaciones
 * @property date $fecha_emision
 * @property DatRdeInscripcion $DatRdeInscripcion
 * @property DatRdeInscripcion $DatRdeInscripcion_2
 * @property DatUsuUsuario $DatUsuUsuario
 * @property DatDplSerie $DatDplSerie
 * @property DatDplSerie $DatDplSerie_5
 * @property DatDplSerie $DatDplSerie_6
 * @property DatRdeInscripcion $DatRdeInscripcion_7
 * @property DatRdeInscripcion $DatRdeInscripcion_8
 * 
 * @method integer           getSerieId()             Returns the current record's "serie_id" value
 * @method string            getSerieAlfanumerico()   Returns the current record's "serie_alfanumerico" value
 * @method integer           getGestionId()           Returns the current record's "gestion_id" value
 * @method integer           getInscripcionId()       Returns the current record's "inscripcion_id" value
 * @method integer           getUsuarioId()           Returns the current record's "usuario_id" value
 * @method timestamp         getFechaImpresion()      Returns the current record's "fecha_impresion" value
 * @method string            getObservaciones()       Returns the current record's "observaciones" value
 * @method date              getFechaEmision()        Returns the current record's "fecha_emision" value
 * @method DatRdeInscripcion getDatRdeInscripcion()   Returns the current record's "DatRdeInscripcion" value
 * @method DatRdeInscripcion getDatRdeInscripcion2()  Returns the current record's "DatRdeInscripcion_2" value
 * @method DatUsuUsuario     getDatUsuUsuario()       Returns the current record's "DatUsuUsuario" value
 * @method DatDplSerie       getDatDplSerie()         Returns the current record's "DatDplSerie" value
 * @method DatDplSerie       getDatDplSerie5()        Returns the current record's "DatDplSerie_5" value
 * @method DatDplSerie       getDatDplSerie6()        Returns the current record's "DatDplSerie_6" value
 * @method DatRdeInscripcion getDatRdeInscripcion7()  Returns the current record's "DatRdeInscripcion_7" value
 * @method DatRdeInscripcion getDatRdeInscripcion8()  Returns the current record's "DatRdeInscripcion_8" value
 * @method DatDplDiplomas    setSerieId()             Sets the current record's "serie_id" value
 * @method DatDplDiplomas    setSerieAlfanumerico()   Sets the current record's "serie_alfanumerico" value
 * @method DatDplDiplomas    setGestionId()           Sets the current record's "gestion_id" value
 * @method DatDplDiplomas    setInscripcionId()       Sets the current record's "inscripcion_id" value
 * @method DatDplDiplomas    setUsuarioId()           Sets the current record's "usuario_id" value
 * @method DatDplDiplomas    setFechaImpresion()      Sets the current record's "fecha_impresion" value
 * @method DatDplDiplomas    setObservaciones()       Sets the current record's "observaciones" value
 * @method DatDplDiplomas    setFechaEmision()        Sets the current record's "fecha_emision" value
 * @method DatDplDiplomas    setDatRdeInscripcion()   Sets the current record's "DatRdeInscripcion" value
 * @method DatDplDiplomas    setDatRdeInscripcion2()  Sets the current record's "DatRdeInscripcion_2" value
 * @method DatDplDiplomas    setDatUsuUsuario()       Sets the current record's "DatUsuUsuario" value
 * @method DatDplDiplomas    setDatDplSerie()         Sets the current record's "DatDplSerie" value
 * @method DatDplDiplomas    setDatDplSerie5()        Sets the current record's "DatDplSerie_5" value
 * @method DatDplDiplomas    setDatDplSerie6()        Sets the current record's "DatDplSerie_6" value
 * @method DatDplDiplomas    setDatRdeInscripcion7()  Sets the current record's "DatRdeInscripcion_7" value
 * @method DatDplDiplomas    setDatRdeInscripcion8()  Sets the current record's "DatRdeInscripcion_8" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatDplDiplomas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_dpl_diplomas');
        $this->hasColumn('serie_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('serie_alfanumerico', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('fecha_impresion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('observaciones', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('fecha_emision', 'date', 25, array(
             'type' => 'date',
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
        $this->hasOne('DatRdeInscripcion', array(
             'local' => 'inscripcion_id',
             'foreign' => 'id_inscripcion'));

        $this->hasOne('DatRdeInscripcion as DatRdeInscripcion_2', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));

        $this->hasOne('DatDplSerie', array(
             'local' => 'serie_id',
             'foreign' => 'id_serie'));

        $this->hasOne('DatDplSerie as DatDplSerie_5', array(
             'local' => 'serie_alfanumerico',
             'foreign' => 'serie_alfanumerico'));

        $this->hasOne('DatDplSerie as DatDplSerie_6', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatRdeInscripcion as DatRdeInscripcion_7', array(
             'local' => 'inscripcion_id',
             'foreign' => 'id_inscripcion'));

        $this->hasOne('DatRdeInscripcion as DatRdeInscripcion_8', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));
    }
}