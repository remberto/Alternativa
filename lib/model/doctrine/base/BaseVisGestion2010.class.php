<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VisGestion2010', 'doctrine');

/**
 * BaseVisGestion2010
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $id_inscripcion
 * @property integer $gestion_id
 * @property integer $cod_distrito
 * @property string $distrito
 * @property string $cod_ue
 * @property string $desc_ue
 * @property string $codigo_rude
 * @property string $carnet_identidad
 * @property string $paterno
 * @property string $materno
 * @property string $nombre
 * @property date $fecha_nacimiento
 * @property string $genero
 * @property integer $nivel_id
 * @property string $desc_nivel
 * @property integer $id_grado
 * @property string $desc_grado
 * @property string $paralelo
 * @property string $desc_abrv
 * @property integer $estado_matricula_inicio_id
 * @property string $matricula_inicio
 * @property integer $matricula_fin
 * @property string $desc_estado_matricula
 * @property integer $cod_org_curr
 * @property string $desc_modalidad
 * @property integer $cod_dependencia
 * @property string $desc_dependencia
 * 
 * @method integer        getId()                         Returns the current record's "id" value
 * @method integer        getIdInscripcion()              Returns the current record's "id_inscripcion" value
 * @method integer        getGestionId()                  Returns the current record's "gestion_id" value
 * @method integer        getCodDistrito()                Returns the current record's "cod_distrito" value
 * @method string         getDistrito()                   Returns the current record's "distrito" value
 * @method string         getCodUe()                      Returns the current record's "cod_ue" value
 * @method string         getDescUe()                     Returns the current record's "desc_ue" value
 * @method string         getCodigoRude()                 Returns the current record's "codigo_rude" value
 * @method string         getCarnetIdentidad()            Returns the current record's "carnet_identidad" value
 * @method string         getPaterno()                    Returns the current record's "paterno" value
 * @method string         getMaterno()                    Returns the current record's "materno" value
 * @method string         getNombre()                     Returns the current record's "nombre" value
 * @method date           getFechaNacimiento()            Returns the current record's "fecha_nacimiento" value
 * @method string         getGenero()                     Returns the current record's "genero" value
 * @method integer        getNivelId()                    Returns the current record's "nivel_id" value
 * @method string         getDescNivel()                  Returns the current record's "desc_nivel" value
 * @method integer        getIdGrado()                    Returns the current record's "id_grado" value
 * @method string         getDescGrado()                  Returns the current record's "desc_grado" value
 * @method string         getParalelo()                   Returns the current record's "paralelo" value
 * @method string         getDescAbrv()                   Returns the current record's "desc_abrv" value
 * @method integer        getEstadoMatriculaInicioId()    Returns the current record's "estado_matricula_inicio_id" value
 * @method string         getMatriculaInicio()            Returns the current record's "matricula_inicio" value
 * @method integer        getMatriculaFin()               Returns the current record's "matricula_fin" value
 * @method string         getDescEstadoMatricula()        Returns the current record's "desc_estado_matricula" value
 * @method integer        getCodOrgCurr()                 Returns the current record's "cod_org_curr" value
 * @method string         getDescModalidad()              Returns the current record's "desc_modalidad" value
 * @method integer        getCodDependencia()             Returns the current record's "cod_dependencia" value
 * @method string         getDescDependencia()            Returns the current record's "desc_dependencia" value
 * @method VisGestion2010 setId()                         Sets the current record's "id" value
 * @method VisGestion2010 setIdInscripcion()              Sets the current record's "id_inscripcion" value
 * @method VisGestion2010 setGestionId()                  Sets the current record's "gestion_id" value
 * @method VisGestion2010 setCodDistrito()                Sets the current record's "cod_distrito" value
 * @method VisGestion2010 setDistrito()                   Sets the current record's "distrito" value
 * @method VisGestion2010 setCodUe()                      Sets the current record's "cod_ue" value
 * @method VisGestion2010 setDescUe()                     Sets the current record's "desc_ue" value
 * @method VisGestion2010 setCodigoRude()                 Sets the current record's "codigo_rude" value
 * @method VisGestion2010 setCarnetIdentidad()            Sets the current record's "carnet_identidad" value
 * @method VisGestion2010 setPaterno()                    Sets the current record's "paterno" value
 * @method VisGestion2010 setMaterno()                    Sets the current record's "materno" value
 * @method VisGestion2010 setNombre()                     Sets the current record's "nombre" value
 * @method VisGestion2010 setFechaNacimiento()            Sets the current record's "fecha_nacimiento" value
 * @method VisGestion2010 setGenero()                     Sets the current record's "genero" value
 * @method VisGestion2010 setNivelId()                    Sets the current record's "nivel_id" value
 * @method VisGestion2010 setDescNivel()                  Sets the current record's "desc_nivel" value
 * @method VisGestion2010 setIdGrado()                    Sets the current record's "id_grado" value
 * @method VisGestion2010 setDescGrado()                  Sets the current record's "desc_grado" value
 * @method VisGestion2010 setParalelo()                   Sets the current record's "paralelo" value
 * @method VisGestion2010 setDescAbrv()                   Sets the current record's "desc_abrv" value
 * @method VisGestion2010 setEstadoMatriculaInicioId()    Sets the current record's "estado_matricula_inicio_id" value
 * @method VisGestion2010 setMatriculaInicio()            Sets the current record's "matricula_inicio" value
 * @method VisGestion2010 setMatriculaFin()               Sets the current record's "matricula_fin" value
 * @method VisGestion2010 setDescEstadoMatricula()        Sets the current record's "desc_estado_matricula" value
 * @method VisGestion2010 setCodOrgCurr()                 Sets the current record's "cod_org_curr" value
 * @method VisGestion2010 setDescModalidad()              Sets the current record's "desc_modalidad" value
 * @method VisGestion2010 setCodDependencia()             Sets the current record's "cod_dependencia" value
 * @method VisGestion2010 setDescDependencia()            Sets the current record's "desc_dependencia" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVisGestion2010 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vis_gestion2010');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('id_inscripcion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
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
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('distrito', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '70',
             ));
        $this->hasColumn('codigo_rude', 'string', 18, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '18',
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
        $this->hasColumn('nivel_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_nivel', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('id_grado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_grado', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('paralelo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('desc_abrv', 'string', 4, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('estado_matricula_inicio_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('matricula_inicio', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('matricula_fin', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_estado_matricula', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('cod_org_curr', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_modalidad', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('cod_dependencia', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_dependencia', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}