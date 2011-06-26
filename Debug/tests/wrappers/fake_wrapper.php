<?php
/**
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version 1.2.1
 * @filesource
 * @package Debug
 * @subpackage Tests
 */

/**
 * Wrapper used in the test suite.
 *
 * @package Debug
 * @subpackage Tests
 */
class MyFakeMapper implements ezcLogMapper
{
    public function get( $sev, $src, $cat )
    {
        return null;
    }
}
?>
