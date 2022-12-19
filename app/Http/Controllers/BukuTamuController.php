<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu;
use Yajra\DataTables\Facades\DataTables;

class BukuTamuController extends Controller
{
    public function index()
    {
        return view('admin.buku_tamu.list_buku_tamu');
    }

    public function list_all(Request $request)
    {
        if ($request->ajax()) {
            $data = BukuTamu::select("*")->orderBy("id", "DESC")->with('struktural')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if ($row->status == 0) {
                        $actionBtn = '<a href="javascript:void(0)" class="btn_approve btn btn-danger btn-sm" data-status="' . $row->status . '" id="' . $row->id . '">Menunggu Pelayanan</a>';
                    } elseif ($row->status == 1) {
                        $actionBtn = '<a href="javascript:void(0)" class="btn_approve btn btn-warning btn-sm" data-status="' . $row->status . '" id="' . $row->id . '">Sedang Dilayani</a>';
                    } else {
                        $actionBtn = '<a href="javascript:void(0)" class="btn_approve btn btn-success btn-sm" data-status="' . $row->status . '" id="' . $row->id . '" style="pointer-events: none;
                    }">Selesai</a>';
                    }

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function update_status(Request $request)
    {
        $id = $request->id;
        $current = $request->status;
        $new = value($current) + 1;

        $post = BukuTamu::where('id', $id)->update(['status' => $new]);
        // return response()->json($post);
        return $post;
    }

    public function test()
    {
        $list_tamu = BukuTamu::with('struktural')->get();
        $data = BukuTamu::select("*")->orderBy("id", "DESC")->with('struktural')->get();

        dd($data);
    }
}
