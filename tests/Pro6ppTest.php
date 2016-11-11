<?php

use PendoNL\LaravelPro6pp\Pro6pp;

class LaravelPro6ppTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test if the API key gets set when constructing.
     */
    public function test_it_sets_api_key()
    {
        $pro6pp = new Pro6pp('api_key');

        $this->assertEquals('api_key', $pro6pp->getApiKey());
    }
}
