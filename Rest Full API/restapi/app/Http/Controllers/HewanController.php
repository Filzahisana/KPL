<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class HewanController extends Controller
{
    public function create(Request $request){

        $hewan = new Hewan(
            [
                'nama' => $request['nama'],
                'spesies' => $request['spesies'],
                'jenismakanan' => $request['jenismakanan'],
            ]
        );

        $hewan->save();

        return json_encode("Data berhasil masuk");
    }

    public function read(){
        $data = Hewan::all();
        return json_encode(["data-hewan" => $data]);
    }

    public function update (Request $request){
        Hewan::update ([
            'nama' => $request['nama'],
            'spesies' => $request['spesies'],
            'jenismakanan' => $request['jenismakanan'],
        ],
        [
            'id' => $request['id']
        ]);
        return json_encode("Data berhasil diperbarui");
    }

}
