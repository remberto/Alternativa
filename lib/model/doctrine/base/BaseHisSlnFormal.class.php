<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HisSlnFormal', 'doctrine');

/**
 * BaseHisSlnFormal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_his_sln_formal
 * @property integer $gestion_id
 * @property string $cod_ue_id
 * @property integer $curso_oferta_id
 * @property integer $inscripcion_id
 * @property integer $primer_trimestre
 * @property integer $segundo_trimestre
 * @property integer $tercer_trimestre
 * @property integer $promedio_anual
 * @property integer $reforzamiento
 * @property integer $promedio_final
 * @property integer $usuario_id
 * @property timestamp $fecha_modificacion
 * 
 * @method integer      getIdHisSlnFormal()     Returns the current record's "id_his_sln_formal" value
 * @method integer      getGestionId()          Returns the current record's "gestion_id" value
 * @method string       getCodUeId()            Returns the current record's "cod_ue_id" value
 * @method integer      getCursoOfertaId()      Returns the current record's "curso_oferta_id" value
 * @method integer      getInscripcionId()      Returns the current record's "inscripcion_id" value
 * @method integer      getPrimerTrimestre()    Returns the current record's "primer_trimestre" value
 * @method integer      getSegundoTrimestre()   Returns the current record's "segundo_trimestre" value
 * @method integer      getTercerTrimestre()    Returns the current record's "tercer_trimestre" value
 * @method integer      getPromedioAnual()      Returns the current record's "promedio_anual" value
 * @method integer      getReforzamiento()      Returns the current record's "reforzamiento" value
 * @method integer      getPromedioFinal()      Returns the current record's "promedio_final" value
 * @method integer      getUsuarioId()          Returns the current record's "usuario_id" value
 * @method timestamp    getFechaModificacion()  Returns the current record's "fecha_modificacion" value
 * @method HisSlnFormal setIdHisSlnFormal()     Sets the current record's "id_his_sln_formal" value
 * @method HisSlnFormal setGestionId()          Sets the current record's "gestion_id" value
 * @method HisSlnFormal setCodUeId()            Sets the current record's "cod_ue_id" value
 * @method HisSlnFormal setCursoOfertaId()      Sets the current record's "curso_oferta_id" value
 * @method HisSlnFormal setInscripcionId()      Sets the current record's "inscripcion_id" value
 * @method HisSlnFormal setPrimerTrimestre()    Sets the current record's "primer_trimestre" value
 * @method HisSlnFormal setSegundoTrimestre()   Sets the current record's "segundo_trimestre" value
 * @method HisSlnFormal setTercerTrimestre()    Sets the current record's "tercer_trimestre" value
 * @method HisSlnFormal setPromedioAnual()      Sets the current record's "promedio_anual" value
 * @method HisSlnFormal setReforzamiento()      Sets the current record's "reforzamiento" value
 * @method HisSlnFormal setPromedioFinal()      Sets the current record's "promedio_final" value
 * @method HisSlnFormal setUsuarioId()          Sets the current record's "usuario_id" value
 * @method HisSlnFormal setFechaModificacion()  Sets the current record's "fecha_modificacion" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseHisSlnFormal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('his_sln_formal');
        $this->hasColumn('id_his_sln_formal', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('curso_oferta_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('primer_trimestre', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('segundo_trimestre', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('tercer_trimestre', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('promedio_anual', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('reforzamiento', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('promedio_final', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
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
        $this->hasColumn('fecha_modificacion', 'timestamp', 25, array(
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
        
    }
}