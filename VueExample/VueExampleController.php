<?php

namespace Statamic\Addons\VueExample;

use Statamic\Extend\Controller;

class VueExampleController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'foo' => '123',
            'bar' => '456'
        ];

        return $this->view('index', compact('data'));
    }
}
