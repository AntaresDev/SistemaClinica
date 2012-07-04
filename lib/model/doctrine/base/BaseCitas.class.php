<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Citas', 'doctrine');

/**
 * BaseCitas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_citas
 * @property timestamp $fecha
 * @property integer $id_clientes
 * @property integer $id_tipo
 * @property Clientes $Clientes
 * @property TipoCitas $TipoCitas
 * 
 * @method integer   getIdCitas()     Returns the current record's "id_citas" value
 * @method timestamp getFecha()       Returns the current record's "fecha" value
 * @method integer   getIdClientes()  Returns the current record's "id_clientes" value
 * @method integer   getIdTipo()      Returns the current record's "id_tipo" value
 * @method Clientes  getClientes()    Returns the current record's "Clientes" value
 * @method TipoCitas getTipoCitas()   Returns the current record's "TipoCitas" value
 * @method Citas     setIdCitas()     Sets the current record's "id_citas" value
 * @method Citas     setFecha()       Sets the current record's "fecha" value
 * @method Citas     setIdClientes()  Sets the current record's "id_clientes" value
 * @method Citas     setIdTipo()      Sets the current record's "id_tipo" value
 * @method Citas     setClientes()    Sets the current record's "Clientes" value
 * @method Citas     setTipoCitas()   Sets the current record's "TipoCitas" value
 * 
 * @package    sistemacitas
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCitas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('citas');
        $this->hasColumn('id_citas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('fecha', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('id_clientes', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_tipo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Clientes', array(
             'local' => 'id_clientes',
             'foreign' => 'id_clientes'));

        $this->hasOne('TipoCitas', array(
             'local' => 'id_tipo',
             'foreign' => 'id_tipo'));
    }
}