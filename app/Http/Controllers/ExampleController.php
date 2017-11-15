<?php

namespace App\Http\Controllers;

use PDF;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pdf()
    {
        $pdf = PDF::loadView('test', []);
        return $pdf->stream('test.pdf');
        return 'Tewst';
    }

    //
}
