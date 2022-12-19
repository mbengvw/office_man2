<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuisioner;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class KuisionerController extends Controller
{
    public function index()
    {
        return view('admin.kuisioner.list_kuisioner');
    }

    public function list_all(Request $request)
    {
        if ($request->ajax()) {
            // $data = Kuisioner::all();
            $data = Kuisioner::select(
                "id",
                "nama",
                "usia",
                "pendidikan",
                "pekerjaan",
                DB::raw("(no_1+no_2+no_3+no_4+no_5+no_6+no_7+no_8+no_9+no_10)/40*100 as tingkat"),
                "saran"
            )
                ->groupBy("id")
                ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function test()
    {
        //YourModel::sum(DB::raw('field1 + field2'));
        $data = Kuisioner::select(
            "id",
            "nama",
            "usia",
            "pendidikan",
            "pekerjaan",
            DB::raw("(no_1+no_2+no_3+no_4+no_5+no_6+no_7+no_8+no_9+no_10)/40*100 as tingkat")
        )
            ->groupBy("id")
            ->get();
        dd($data);
    }
}
