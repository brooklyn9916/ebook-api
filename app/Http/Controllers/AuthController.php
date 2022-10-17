<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS'=> 3103120179,
            'Name'=> 'Rafa Fausta',
            'Phone'=> '081227198910',
            'Class'=> 'XII RPL 6'
        ];
    }
}
