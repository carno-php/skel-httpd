<?php
/**
 * Homepage controller
 */

namespace App\Controllers;

use Carno\Web\Controller\Based;

class Homepage extends Based
{
    public function index()
    {
        return 'Hello world';
    }
}
