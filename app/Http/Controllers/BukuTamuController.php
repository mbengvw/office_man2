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
            $data = BukuTamu::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
