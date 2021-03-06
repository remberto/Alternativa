<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VCertificacionRueAdultos', 'doctrine');

/**
 * BaseVCertificacionRueAdultos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $gestion_id
 * @property string $desc_modalidad
 * @property string $desc_departamento
 * @property integer $cod_distrito
 * @property string $distrito
 * @property string $cod_ue
 * @property string $desc_ue
 * @property string $desc_dependencia
 * @property string $rue
 * @property string $fecha resolucion
 * @property string $nro_resolucion
 * @property string $obs_rue
 * @property string $zona
 * @property string $direccion
 * @property integer $certificado
 * @property integer $eta (tecnico basico)
 * @property integer $educacion primaria de adultos
 * @property integer $educacion secundaria de adultos
 * @property integer $eta (tecnico auxiliar)
 * @property integer $eta (tecnico medio)
 * @property integer $tecnica complementaria
 * @property integer $capacitacion tecnica laboral
 * @property integer $alfabetizacion
 * 
 * @method integer                  getId()                Returns the current record's "id" value
 * @method integer                  getGestionId()         Returns the current record's "gestion_id" value
 * @method string                   getDescModalidad()     Returns the current record's "desc_modalidad" value
 * @method string                   getDescDepartamento()  Returns the current record's "desc_departamento" value
 * @method integer                  getCodDistrito()       Returns the current record's "cod_distrito" value
 * @method string                   getDistrito()          Returns the current record's "distrito" value
 * @method string                   getCodUe()             Returns the current record's "cod_ue" value
 * @method string                   getDescUe()            Returns the current record's "desc_ue" value
 * @method string                   getDescDependencia()   Returns the current record's "desc_dependencia" value
 * @method string                   getRue()               Returns the current record's "rue" value
 * @method string                   getFecha()             Returns the current record's "fecha" value
 * @method string                   getNroResolucion()     Returns the current record's "nro_resolucion" value
 * @method string                   getObsRue()            Returns the current record's "obs_rue" value
 * @method string                   getZona()              Returns the current record's "zona" value
 * @method string                   getDireccion()         Returns the current record's "direccion" value
 * @method integer                  getCertificado()       Returns the current record's "certificado" value
 * @method integer                  getEta()               Returns the current record's "eta" value
 * @method integer                  getEducacion()         Returns the current record's "educacion" value
 * @method integer                  getTecnica()           Returns the current record's "tecnica" value
 * @method integer                  getCapacitacion()      Returns the current record's "capacitacion" value
 * @method integer                  getAlfabetizacion()    Returns the current record's "alfabetizacion" value
 * @method VCertificacionRueAdultos setId()                Sets the current record's "id" value
 * @method VCertificacionRueAdultos setGestionId()         Sets the current record's "gestion_id" value
 * @method VCertificacionRueAdultos setDescModalidad()     Sets the current record's "desc_modalidad" value
 * @method VCertificacionRueAdultos setDescDepartamento()  Sets the current record's "desc_departamento" value
 * @method VCertificacionRueAdultos setCodDistrito()       Sets the current record's "cod_distrito" value
 * @method VCertificacionRueAdultos setDistrito()          Sets the current record's "distrito" value
 * @method VCertificacionRueAdultos setCodUe()             Sets the current record's "cod_ue" value
 * @method VCertificacionRueAdultos setDescUe()            Sets the current record's "desc_ue" value
 * @method VCertificacionRueAdultos setDescDependencia()   Sets the current record's "desc_dependencia" value
 * @method VCertificacionRueAdultos setRue()               Sets the current record's "rue" value
 * @method VCertificacionRueAdultos setFecha()             Sets the current record's "fecha" value
 * @method VCertificacionRueAdultos setNroResolucion()     Sets the current record's "nro_resolucion" value
 * @method VCertificacionRueAdultos setObsRue()            Sets the current record's "obs_rue" value
 * @method VCertificacionRueAdultos setZona()              Sets the current record's "zona" value
 * @method VCertificacionRueAdultos setDireccion()         Sets the current record's "direccion" value
 * @method VCertificacionRueAdultos setCertificado()       Sets the current record's "certificado" value
 * @method VCertificacionRueAdultos setEta()               Sets the current record's "eta" value
 * @method VCertificacionRueAdultos setEducacion()         Sets the current record's "educacion" value
 * @method VCertificacionRueAdultos setTecnica()           Sets the current record's "tecnica" value
 * @method VCertificacionRueAdultos setCapacitacion()      Sets the current record's "capacitacion" value
 * @method VCertificacionRueAdultos setAlfabetizacion()    Sets the current record's "alfabetizacion" value proyectos
 * @property integer $alfabetizacion
 * 
 * @method integer                  getId()                Returns the current record's "id" value
 * @method integer                  getGestionId()         Returns the current record's "gestion_id" value
 * @method string                   getDescModalidad()     Returns the current record's "desc_modalidad" value
 * @method string                   getDescDepartamento()  Returns the current record's "desc_departamento" value
 * @method integer                  getCodDistrito()       Returns the current record's "cod_distrito" value
 * @method string                   getDistrito()          Returns the current record's "distrito" value
 * @method string                   getCodUe()             Returns the current record's "cod_ue" value
 * @method string                   getDescUe()            Returns the current record's "desc_ue" value
 * @method string                   getDescDependencia()   Returns the current record's "desc_dependencia" value
 * @method string                   getRue()               Returns the current record's "rue" value
 * @method string                   getFecha()             Returns the current record's "fecha" value
 * @method string                   getNroResolucion()     Returns the current record's "nro_resolucion" value
 * @method string                   getObsRue()            Returns the current record's "obs_rue" value
 * @method string                   getZona()              Returns the current record's "zona" value
 * @method string                   getDireccion()         Returns the current record's "direccion" value
 * @method integer                  getCertificado()       Returns the current record's "certificado" value
 * @method integer                  getEta()               Returns the current record's "eta" value
 * @method integer                  getEducacion()         Returns the current record's "educacion" value
 * @method integer                  getTecnica()           Returns the current record's "tecnica" value
 * @method integer                  getCapacitacion()      Returns the current record's "capacitacion" value
 * @method integer                  getAlfabetizacion()    Returns the current record's "alfabetizacion" value
 * @method VCertificacionRueAdultos setId()                Sets the current record's "id" value
 * @method VCertificacionRueAdultos setGestionId()         Sets the current record's "gestion_id" value
 * @method VCertificacionRueAdultos setDescModalidad()     Sets the current record's "desc_modalidad" value
 * @method VCertificacionRueAdultos setDescDepartamento()  Sets the current record's "desc_departamento" value
 * @method VCertificacionRueAdultos setCodDistrito()       Sets the current record's "cod_distrito" value
 * @method VCertificacionRueAdultos setDistrito()          Sets the current record's "distrito" value
 * @method VCertificacionRueAdultos setCodUe()             Sets the current record's "cod_ue" value
 * @method VCertificacionRueAdultos setDescUe()            Sets the current record's "desc_ue" value
 * @method VCertificacionRueAdultos setDescDependencia()   Sets the current record's "desc_dependencia" value
 * @method VCertificacionRueAdultos setRue()               Sets the current record's "rue" value
 * @method VCertificacionRueAdultos setFecha()             Sets the current record's "fecha" value
 * @method VCertificacionRueAdultos setNroResolucion()     Sets the current record's "nro_resolucion" value
 * @method VCertificacionRueAdultos setObsRue()            Sets the current record's "obs_rue" value
 * @method VCertificacionRueAdultos setZona()              Sets the current record's "zona" value
 * @method VCertificacionRueAdultos setDireccion()         Sets the current record's "direccion" value
 * @method VCertificacionRueAdultos setCertificado()       Sets the current record's "certificado" value
 * @method VCertificacionRueAdultos setEta()               Sets the current record's "eta" value
 * @method VCertificacionRueAdultos setEducacion()         Sets the current record's "educacion" value
 * @method VCertificacionRueAdultos setTecnica()           Sets the current record's "tecnica" value
 * @method VCertificacionRueAdultos setCapacitacion()      Sets the current record's "capacitacion" value
 * @method VCertificacionRueAdultos setAlfabetizacion()    Sets the current record's "alfabetizacion" value campa�as
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVCertificacionRueAdultos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('v_certificacion_rue_adultos');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('desc_modalidad', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('desc_departamento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('distrito', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '70',
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
        $this->hasColumn('rue', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('fecha resolucion', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('nro_resolucion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('obs_rue', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('zona', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('direccion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('certificado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('eta (tecnico basico)', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('educacion primaria de adultos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('educacion secundaria de adultos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('eta (tecnico auxiliar)', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('eta (tecnico medio)', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('tecnica complementaria', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('capacitacion tecnica laboral', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('alfabetizacion proyectos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('alfabetizacion campa�as', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}