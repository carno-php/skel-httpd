<?php
/**
 * Defaults router
 */

namespace App\Routers;

use App\Controllers\Homepage;
use Carno\Web\Router\Configure;
use Carno\Web\Router\Setup;

class Defaults extends Configure
{
    /**
     * @inject
     * @var Homepage
     */
    private $homepage = null;

    /**
     * @param Setup $setup
     */
    protected function index(Setup $setup) : void
    {
        $setup->get('/', [$this->homepage, 'index']);
    }
}
