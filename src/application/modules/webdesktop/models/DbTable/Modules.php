<?php
/**
 * Database Model for the Table "modules" containing all modules in the webdesktop
 *
 * @author Andreas Mairhofer <andreas@classphp.de>
 * @verion 0.1
 * @package Webdesktop
 * @subpackage Model_DbTable
 * @namespace Webdesktop_Model_DbTable
 * @see Zend Framework <http://framework.zend.com>
 * @license     http://framework.zend.com/license New BSD License
 */

/**
 * @class Webdesktop_Model_DbTable_Modules
 * @extends Zend_Db_Table_Abstract
 */
class Webdesktop_Model_DbTable_Modules extends Zend_Db_Table_Abstract
{

    /**
     * primary key
     *
     * @var string
     */
    protected $_primary = 'm_id';
    /**
     * Table name
     *
     * @var String
     */
    protected $_name    = 'modules';

    /**
     * Find a module by the module Id. This is not the table Id
     *
     * @param int $moduleId
     * @return Zend_Db_Table_Rowset_Abstract
     * @access public
     */
    public function findModuleById($moduleId)
    {
        $select = $this->select()->where('m_moduleid = ?', $moduleId);

        RETURN $this->fetchAll($select);
    }
}
?>
