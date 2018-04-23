<?php
namespace Laraflat\Users\Tests;

use Orchestra\Testbench\BrowserKit\TestCase as OrchestraTestCase;

class GuestTest extends OrchestraTestCase
{

    public function test_open_guest_link_test()
    {
        /*
         * open guest page
         */

        $response = $this->get('/guest');

        $response->assert(200);

        /*
         * open home page
         */

        $response = $this->get('/guest/home');

        $response->assert(200);
    }

}