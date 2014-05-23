<?php
/**
 * File containing the EncryptionTest class.
 *
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 * @package Authentication
 * @version 1.3.1
 * @subpackage Tests
 */

/**
 * Class which contain some test functions for the Token filter.
 *
 * For testing purposes only.
 *
 * @package Authentication
 * @version 1.3.1
 * @subpackage Tests
 * @access private
 */
class EncryptionTest
{
    /**
     * Returns the value $s hashed with crypt with the salt value 'xx'.
     *
     * @param string $s The value to hash
     * @return string
     */
    public static function uncrackable( $s )
    {
        return crypt( $s, 'xx' );
    }
}
?>
