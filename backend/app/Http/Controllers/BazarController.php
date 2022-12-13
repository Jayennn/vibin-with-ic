<?php

namespace App\Http\Controllers;

use App\Models\BazarModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BazarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BazarModel::all();

        return DataTables::of($data)
            ->addIndexColumn()
            ->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $save = BazarModel::create([
            'nama' => $request->nama,
            'nama_menu' => $request->nama_menu,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'waktu' => date('Y-m-d H:i:s'),
        ]);

        if ($save) {
            return response()->json(['Message' => 'Success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BazarModel $bazar)
    {
        return $bazar;
        return response()->json(['Message' => 'Success', 'data' => $bazar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BazarModel $bazar)
    {
        // $bazar->status = '1';
        $bazar->update($request->all());

        return response()->json(['Message' => 'Success']);
    }

    public function updateStatus(Request $request, BazarModel $bazar)
    {
        $bazar->status = '1';
        $bazar->update();

        return response()->json(['Message' => 'Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BazarModel $bazar)
    {
        $bazar->delete();
    }

    public function total()
    {
        $total = BazarModel::sum('harga');
        return response()->json(['Message' => 'Success', 'total' => $total]);
    }
}
