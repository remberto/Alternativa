<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TskUsuAsignacion', 'doctrine');

/**
 * BaseTskUsuAsignacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $usuario_id
 * @property integer $usuario_asignado_id
 * @property integer $habiltado
 * @property DatUsuUsuario $DatUsuUsuario
 * @property DatUsuUsuario $DatUsuUsuario_2
 * 
 * @method integer          getUsuarioId()           Returns the current record's "usuario_id" value
 * @method integer          getUsuarioAsignadoId()   Returns the current record's "usuario_asignado_id" value
 * @method integer          getHabiltado()           Returns the current record's "habiltado" value
 * @method DatUsuUsuario    getDatUsuUsuario()       Returns the current record's "DatUsuUsuario" value
 * @method DatUsuUsuario    getDatUsuUsuario2()      Returns the current record's "DatUsuUsuario_2" value
 * @method TskUsuAsignacion setUsuarioId()           Sets the current record's "usuario_id" value
 * @method TskUsuAsignacion setUsuarioAsignadoId()   Sets the current record's "usuario_asignado_id" value
 * @method TskUsuAsignacion setHabiltado()           Sets the current record's "habiltado" value
 * @method TskUsuAsignacion setDatUsuUsuario()       Sets the current record's "DatUsuUsuario" value
 * @method TskUsuAsignacion setDatUsuUsuario2()      Sets the current record's "DatUsuUsuario_2" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTskUsuAsignacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tsk_usu_asignacion');
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('usuario_asignado_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('habiltado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));

        $this->hasOne('DatUsuUsuario as DatUsuUsuario_2', array(
             'local' => 'usuario_asignado_id',
             'foreign' => 'id'));
    }
}