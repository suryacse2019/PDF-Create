<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class WelcomeController extends Controller
{
    public function PDF(){
        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->inline();
    }
}
