<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatJueClasificados', 'doctrine');

/**
 * BaseDatJueClasificados
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $inscrito_id
 * @property integer $fase
 * @property decimal $marca
 * @property decimal $distancia
 * @property integer $tipo_id
 * @property string $genero_id
 * @property integer $posicion
 * @property integer $usuario_id
 * @property DatJueInscritos $DatJueInscritos
 * @property DatUsuUsuario $DatUsuUsuario
 * 
 * @method integer            getId()              Returns the current record's "id" value
 * @method integer            getInscritoId()      Returns the current record's "inscrito_id" value
 * @method integer            getFase()            Returns the current record's "fase" value
 * @method decimal            getMarca()           Returns the current record's "marca" value
 * @method decimal            getDistancia()       Returns the current record's "distancia" value
 * @method integer            getTipoId()          Returns the current record's "tipo_id" value
 * @method string             getGeneroId()        Returns the current record's "genero_id" value
 * @method integer            getPosicion()        Returns the current record's "posicion" value
 * @method integer            getUsuarioId()       Returns the current record's "usuario_id" value
 * @method DatJueInscritos    getDatJueInscritos() Returns the current record's "DatJueInscritos" value
 * @method DatUsuUsuario      getDatUsuUsuario()   Returns the current record's "DatUsuUsuario" value
 * @method DatJueClasificados setId()              Sets the current record's "id" value
 * @method DatJueClasificados setInscritoId()      Sets the current record's "inscrito_id" value
 * @method DatJueClasificados setFase()            Sets the current record's "fase" value
 * @method DatJueClasificados setMarca()           Sets the current record's "marca" value
 * @method DatJueClasificados setDistancia()       Sets the current record's "distancia" value
 * @method DatJueClasificados setTipoId()          Sets the current record's "tipo_id" value
 * @method DatJueClasificados setGeneroId()        Sets the current record's "genero_id" value
 * @method DatJueClasificados setPosicion()        Sets the current record's "posicion" value
 * @method DatJueClasificados setUsuarioId()       Sets the current record's "usuario_id" value
 * @method DatJueClasificados setDatJueInscritos() Sets the current record's "DatJueInscritos" value
 * @method DatJueClasificados setDatUsuUsuario()   Sets the current record's "DatUsuUsuario" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatJueClasificados extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_jue_clasificados');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('inscrito_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('fase', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('marca', 'decimal', 17, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '17',
             'scale' => ' 3',
             ));
        $this->hasColumn('distancia', 'decimal', 17, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '17',
             'scale' => ' 2',
             ));
        $this->hasColumn('tipo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('genero_id', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('posicion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatJueInscritos', array(
             'local' => 'inscrito_id',
             'foreign' => 'id'));

        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));
    }
}