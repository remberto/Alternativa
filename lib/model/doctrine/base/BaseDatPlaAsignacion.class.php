<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatPlaAsignacion', 'doctrine');

/**
 * BaseDatPlaAsignacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $rda_id
 * @property integer $gestion_id
 * @property string $cod_ue_id
 * @property integer $mes_id
 * @property string $servicio_id
 * @property string $item_id
 * 
 * @method integer          getRdaId()       Returns the current record's "rda_id" value
 * @method integer          getGestionId()   Returns the current record's "gestion_id" value
 * @method string           getCodUeId()     Returns the current record's "cod_ue_id" value
 * @method integer          getMesId()       Returns the current record's "mes_id" value
 * @method string           getServicioId()  Returns the current record's "servicio_id" value
 * @method string           getItemId()      Returns the current record's "item_id" value
 * @method DatPlaAsignacion setRdaId()       Sets the current record's "rda_id" value
 * @method DatPlaAsignacion setGestionId()   Sets the current record's "gestion_id" value
 * @method DatPlaAsignacion setCodUeId()     Sets the current record's "cod_ue_id" value
 * @method DatPlaAsignacion setMesId()       Sets the current record's "mes_id" value
 * @method DatPlaAsignacion setServicioId()  Sets the current record's "servicio_id" value
 * @method DatPlaAsignacion setItemId()      Sets the current record's "item_id" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatPlaAsignacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_pla_asignacion');
        $this->hasColumn('rda_id', 'integer', 4, array(
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
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('mes_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('servicio_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('item_id', 'string', 8, array(
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
        
    }
}