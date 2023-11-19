<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\katalog;

class Goods extends Controller
{
    public function getData() {
        $data = DB::table('katalog')->get();
        if(count($data) > 0) {
            $res['message'] = 'Success!';
            $res['data'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Failed to fetch data !';
            return response($res);
        }
    }

    public function storeData(Request $request) {
        $this->validate($request, [
            'file' => 'required|max:2048'
        ]);
    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $upload_destination = 'data_file';

    if($file->move($upload_destination, $file_name)){
        $data = katalog::create([
            'product_name' => $request->product_name,
            'weight' => $request->weight,
            'price' => $request->price,
            'image' => $request->image,
            'remark' => $request->remark,
        ]);
        $res['message'] = 'Success!';
        $res['data'] = $data;
        return response($res);
    }
    }
}
