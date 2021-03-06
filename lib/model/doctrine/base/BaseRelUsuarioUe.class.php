<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RelUsuarioUe', 'doctrine');

/**
 * BaseRelUsuarioUe
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $usuario_id
 * @property string $cod_ue_id
 * @property DatUsuUsuario $DatUsuUsuario
 * @property DatRueUnidadEducativa $DatRueUnidadEducativa
 * 
 * @method integer               getUsuarioId()             Returns the current record's "usuario_id" value
 * @method string                getCodUeId()               Returns the current record's "cod_ue_id" value
 * @method DatUsuUsuario         getDatUsuUsuario()         Returns the current record's "DatUsuUsuario" value
 * @method DatRueUnidadEducativa getDatRueUnidadEducativa() Returns the current record's "DatRueUnidadEducativa" value
 * @method RelUsuarioUe          setUsuarioId()             Sets the current record's "usuario_id" value
 * @method RelUsuarioUe          setCodUeId()               Sets the current record's "cod_ue_id" value
 * @method RelUsuarioUe          setDatUsuUsuario()         Sets the current record's "DatUsuUsuario" value
 * @method RelUsuarioUe          setDatRueUnidadEducativa() Sets the current record's "DatRueUnidadEducativa" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseRelUsuarioUe extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rel_usuario_ue');
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));

        $this->hasOne('DatRueUnidadEducativa', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue'));
    }
}