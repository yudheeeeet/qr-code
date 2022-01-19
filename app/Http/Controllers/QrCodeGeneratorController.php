<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\Generator;

class QrCodeGeneratorController extends Controller
{
    public function qr()
    {
        return view('qr-code');
    }
}
