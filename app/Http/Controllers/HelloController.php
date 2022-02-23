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
        
        return redirect('/home/');
    }

    public function insertData(Request $dataRegister)
    {
        DB::insert('insert into books (titile, type) values (?, ?)', [$dataRegister->title, $dataRegister->type]);
        return redirect('/home/');
    }

    public function move_insert_page()
    {
        return view(
            'insert'
        );
    }

    public function move_edit_page($id)
    {
        $row = DB::table('books')->where('id', $id)->get();

        foreach ($row as $rw) {
            $title = $rw->titile;
            $type = $rw->type;
        }

        return view(
            'edit', [
                'id' => $id,
                'title' => $title,
                'type' => $type
            ]
        );
    }
}