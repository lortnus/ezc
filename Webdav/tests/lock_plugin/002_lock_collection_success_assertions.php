<?php

class ezcWebdavLockPluginClientTestAssertions002
{
    function assertLockDiscoveryPropertyCorrect( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection', 'lockdiscovery' );
        PHPUnit_Framework_Assert::assertNotNull(
            $prop,
            'Lock discovery property not set.'
        );
        PHPUnit_Framework_Assert::assertType(
            'ezcWebdavLockDiscoveryProperty',
            $prop,
            'Lock discovery property has incorrect type.'
        );
        PHPUnit_Framework_Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Number of activeLock elements incorrect.'
        );
        PHPUnit_Framework_Assert::assertEquals(
            new ezcWebdavPotentialUriContent(
                'http://example.com/some/user',
                true
            ),
            $prop->activeLock[0]->owner,
            'Lock owner not correct.'
        );

        $prop = $backend->getProperty( '/collection/resource.html', 'lockdiscovery' );
        PHPUnit_Framework_Assert::assertNotNull(
            $prop,
            'Lock discovery property not set.'
        );
        PHPUnit_Framework_Assert::assertType(
            'ezcWebdavLockDiscoveryProperty',
            $prop,
            'Lock discovery property has incorrect type.'
        );
        PHPUnit_Framework_Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Number of activeLock elements incorrect.'
        );
        PHPUnit_Framework_Assert::assertEquals(
            new ezcWebdavPotentialUriContent(
                'http://example.com/some/user',
                true
            ),
            $prop->activeLock[0]->owner,
            'Lock owner not correct.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions002();

?>
