<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_CodeGenerator
 * @subpackage PHP
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @namespace
 */
namespace Zend\Code\Generator\PhpMember;

/**
 * @category   Zend
 * @package    Zend_CodeGenerator
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class MemberContainer extends \ArrayObject
{

    /**#@+
     * @param const string
     */
    const TYPE_PROPERTY = 'property';
    const TYPE_METHOD   = 'method';
    /**#@-*/

    /**
     * @var const|string
     */
    protected $type = self::TYPE_PROPERTY;

    /**
     * __construct()
     *
     * @param const|string $type
     */
    public function __construct($type = self::TYPE_PROPERTY)
    {
        $this->type = $type;
        parent::__construct(array(), self::ARRAY_AS_PROPS);
    }

}
