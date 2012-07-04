<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Clientes', 'doctrine');

/**
 * BaseClientes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_clientes
 * @property string $nombres
 * @property string $direccion
 * @property Doctrine_Collection $Citas
 * 
 * @method integer             getIdClientes()  Returns the current record's "id_clientes" value
 * @method string              getNombres()     Returns the current record's "nombres" value
 * @method string              getDireccion()   Returns the current record's "direccion" value
 * @method Doctrine_Collection getCitas()       Returns the current record's "Citas" collection
 * @method Clientes            setIdClientes()  Sets the current record's "id_clientes" value
 * @method Clientes            setNombres()     Sets the current record's "nombres" value
 * @method Clientes            setDireccion()   Sets the current record's "direccion" value
 * @method Clientes            setCitas()       Sets the current record's "Citas" collection
 * 
 * @package    sistemacitas
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClientes extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('clientes');
        $this->hasColumn('id_clientes', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombres', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('direccion', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 70,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Citas', array(
             'local' => 'id_clientes',
             'foreign' => 'id_clientes'));
    }
}