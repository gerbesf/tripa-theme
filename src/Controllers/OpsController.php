<?php

namespace Gerbesf\TripaTheme\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OpsController extends Controller
{
    public function defaultOps(){
        return view('tripa-theme::ops',[
            'title'=>'Acesso não autorizado!',
            'description'=>"Seu acesso expirou ou nao existe."
        ]);
    }
}
