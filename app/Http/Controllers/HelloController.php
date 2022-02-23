<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function home()
    {
        $datas = DB::table('books')->get();
        
        return view('hello', [
            'data' => $datas,
        ]);
    }

    public function deleteData($id)
    {
        DB::table('books')->delete($id);
        
        return redirect('/home');
    }
}