<?php

namespace App\Http\Controllers;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('users.index');
    }


}
