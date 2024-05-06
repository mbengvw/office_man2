<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuisioner;
use App\Models\StrukturalModel;
use App\Models\BukuTamu;
use App\Http\Requests\KuesionerCreateRequest;
use App\Http\Requests\TamuCreateRequest;

class PelayananController extends Controller
{
    public function index()
    {
        $list_struktural = StrukturalModel::all();

        return view('front_office.index', ['list_struktural' => $list_struktural]);
    }

    public function store_kuisioner(KuesionerCreateRequest $request)
    {
        $form_data = array(
            'nama'  => $request->nama,
            'usia'  => $request->usia,
            'pendidikan'  => $request->pendidikan,
            'pekerjaan'  => $request->pekerjaan,
            'no_1'     =>  $request->no_1,
            'no_2'     =>  $request->no_2,
            'no_3'     =>  $request->no_3,
            'no_4'     =>  $request->no_4,
            'no_5'     =>  $request->no_5,
            'no_6'     =>  $request->no_6,
            'no_7'     =>  $request->no_7,
            'no_8'     =>  $request->no_8,
            'no_9'     =>  $request->no_9,
            'no_10'    =>  $request->no_10,
            'saran'    =>   $request->saran
        );
        $post = Kuisioner::create($form_data);
        return response()->json($post);
    }

    public function store_buku_tamu(TamuCreateRequest $request)
    {
        $form_data = array(
            'nama_lengkap'  => $request->nama,
            'no_hp'  => $request->hp,
            'alamat'  => $request->alamat,
            'id_struktural_tujuan'  => $request->struktural,
            'keperluan'    =>   $request->keperluan
        );
        $post = BukuTamu::updateOrCreate($form_data);
        return response()->json($post);
    }
}
