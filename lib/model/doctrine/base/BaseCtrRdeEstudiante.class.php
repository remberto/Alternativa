<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CtrRdeEstudiante', 'doctrine');

/**
 * BaseCtrRdeEstudiante
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codigo_rude
 * @property integer $gestion_id
 * @property string $carnet_identidad
 * @property string $paterno
 * @property string $materno
 * @property string $nombre
 * @property date $fecha_nacimiento
 * @property string $genero
 * @property integer $pais_nac_id
 * @property integer $departamento_nac_id
 * @property integer $provincia_nac_id
 * @property string $localidad_nac
 * @property string $oficialia
 * @property string $libro
 * @property string $partida
 * @property string $folio
 * @property integer $usuario_id
 * @property timestamp $fecha_modificacion
 * @property string $cod_ue_id
 * @property DatRdeEstudiante $DatRdeEstudiante
 * @property ClaDepartamento $ClaDepartamento
 * @property ClaProvincia $ClaProvincia
 * @property ClaProvincia $ClaProvincia_4
 * @property DatUsuUsuario $DatUsuUsuario
 * @property DatRueUnidadEducativa $DatRueUnidadEducativa
 * 
 * @method string                getCodigoRude()            Returns the current record's "codigo_rude" value
 * @method integer               getGestionId()             Returns the current record's "gestion_id" value
 * @method string                getCarnetIdentidad()       Returns the current record's "carnet_identidad" value
 * @method string                getPaterno()               Returns the current record's "paterno" value
 * @method string                getMaterno()               Returns the current record's "materno" value
 * @method string                getNombre()                Returns the current record's "nombre" value
 * @method date                  getFechaNacimiento()       Returns the current record's "fecha_nacimiento" value
 * @method string                getGenero()                Returns the current record's "genero" value
 * @method integer               getPaisNacId()             Returns the current record's "pais_nac_id" value
 * @method integer               getDepartamentoNacId()     Returns the current record's "departamento_nac_id" value
 * @method integer               getProvinciaNacId()        Returns the current record's "provincia_nac_id" value
 * @method string                getLocalidadNac()          Returns the current record's "localidad_nac" value
 * @method string                getOficialia()             Returns the current record's "oficialia" value
 * @method string                getLibro()                 Returns the current record's "libro" value
 * @method string                getPartida()               Returns the current record's "partida" value
 * @method string                getFolio()                 Returns the current record's "folio" value
 * @method integer               getUsuarioId()             Returns the current record's "usuario_id" value
 * @method timestamp             getFechaModificacion()     Returns the current record's "fecha_modificacion" value
 * @method string                getCodUeId()               Returns the current record's "cod_ue_id" value
 * @method DatRdeEstudiante      getDatRdeEstudiante()      Returns the current record's "DatRdeEstudiante" value
 * @method ClaDepartamento       getClaDepartamento()       Returns the current record's "ClaDepartamento" value
 * @method ClaProvincia          getClaProvincia()          Returns the current record's "ClaProvincia" value
 * @method ClaProvincia          getClaProvincia4()         Returns the current record's "ClaProvincia_4" value
 * @method DatUsuUsuario         getDatUsuUsuario()         Returns the current record's "DatUsuUsuario" value
 * @method DatRueUnidadEducativa getDatRueUnidadEducativa() Returns the current record's "DatRueUnidadEducativa" value
 * @method CtrRdeEstudiante      setCodigoRude()            Sets the current record's "codigo_rude" value
 * @method CtrRdeEstudiante      setGestionId()             Sets the current record's "gestion_id" value
 * @method CtrRdeEstudiante      setCarnetIdentidad()       Sets the current record's "carnet_identidad" value
 * @method CtrRdeEstudiante      setPaterno()               Sets the current record's "paterno" value
 * @method CtrRdeEstudiante      setMaterno()               Sets the current record's "materno" value
 * @method CtrRdeEstudiante      setNombre()                Sets the current record's "nombre" value
 * @method CtrRdeEstudiante      setFechaNacimiento()       Sets the current record's "fecha_nacimiento" value
 * @method CtrRdeEstudiante      setGenero()                Sets the current record's "genero" value
 * @method CtrRdeEstudiante      setPaisNacId()             Sets the current record's "pais_nac_id" value
 * @method CtrRdeEstudiante      setDepartamentoNacId()     Sets the current record's "departamento_nac_id" value
 * @method CtrRdeEstudiante      setProvinciaNacId()        Sets the current record's "provincia_nac_id" value
 * @method CtrRdeEstudiante      setLocalidadNac()          Sets the current record's "localidad_nac" value
 * @method CtrRdeEstudiante      setOficialia()             Sets the current record's "oficialia" value
 * @method CtrRdeEstudiante      setLibro()                 Sets the current record's "libro" value
 * @method CtrRdeEstudiante      setPartida()               Sets the current record's "partida" value
 * @method CtrRdeEstudiante      setFolio()                 Sets the current record's "folio" value
 * @method CtrRdeEstudiante      setUsuarioId()             Sets the current record's "usuario_id" value
 * @method CtrRdeEstudiante      setFechaModificacion()     Sets the current record's "fecha_modificacion" value
 * @method CtrRdeEstudiante      setCodUeId()               Sets the current record's "cod_ue_id" value
 * @method CtrRdeEstudiante      setDatRdeEstudiante()      Sets the current record's "DatRdeEstudiante" value
 * @method CtrRdeEstudiante      setClaDepartamento()       Sets the current record's "ClaDepartamento" value
 * @method CtrRdeEstudiante      setClaProvincia()          Sets the current record's "ClaProvincia" value
 * @method CtrRdeEstudiante      setClaProvincia4()         Sets the current record's "ClaProvincia_4" value
 * @method CtrRdeEstudiante      setDatUsuUsuario()         Sets the current record's "DatUsuUsuario" value
 * @method CtrRdeEstudiante      setDatRueUnidadEducativa() Sets the current record's "DatRueUnidadEducativa" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCtrRdeEstudiante extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ctr_rde_estudiante');
        $this->hasColumn('codigo_rude', 'string', 18, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '18',
             ));
        $this->hasColumn('gestion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('carnet_identidad', 'string', 12, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '12',
             ));
        $this->hasColumn('paterno', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('materno', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('nombre', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('fecha_nacimiento', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1900-01-01',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('genero', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('pais_nac_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('departamento_nac_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('provincia_nac_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('localidad_nac', 'string', 125, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '125',
             ));
        $this->hasColumn('oficialia', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('libro', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('partida', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('folio', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
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
        $this->hasColumn('fecha_modificacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatRdeEstudiante', array(
             'local' => 'codigo_rude',
             'foreign' => 'codigo_rude'));

        $this->hasOne('ClaDepartamento', array(
             'local' => 'departamento_nac_id',
             'foreign' => 'id_departamento'));

        $this->hasOne('ClaProvincia', array(
             'local' => 'departamento_nac_id',
             'foreign' => 'departamento_id'));

        $this->hasOne('ClaProvincia as ClaProvincia_4', array(
             'local' => 'provincia_nac_id',
             'foreign' => 'id_provincia'));

        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));

        $this->hasOne('DatRueUnidadEducativa', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue'));
    }
}