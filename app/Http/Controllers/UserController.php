<?php

namespace App\Http\Controllers;

use App\Models\User;
use DataTables;
use Illuminate\Http\Request;
use App\Helpers\helper;
use Rawilk\Printing\Facades\Printing;
class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
    
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    // Generate the edit URL correctly
                    $url = route('users.edit', ['user' => $row->id]);
                    $deleteUrl = route('users.destroy', ['user' => $row->id]);
                    // Create the action button using the correct syntax
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary openFormModal btn-sm" data-url="'.$url . '">Edit</a>';
                    $btn.= '<a href="javascript:void(0)" class="delete btn btn-danger  openDeleteModal  btn-sm" data-url="'.$deleteUrl  . '">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('users.index');
    }
    
    public function create()
    {
        $html = view('users.create')->renderSections()['user-form'];
        return response([
            'html'=>$html,
            'title'=>'Add User'
        ]);
    }
    public function store()
    {
        // return view('users.create');
    }
    public function edit($id)
    {
        $users=User::find($id);
        $html= view('users.edit',compact('users'))->renderSections()['users-editform'];
        return response([
            'html' => $html,
            'title' => __('User Update'),
        ]);
    }
    public function update()
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return response()->json(['success' => 'User deleted successfully']);
    }

    public function previewPrint()
{
    // Simulate print job and get content
    $printContent = 'This is the content that will be printed.';

    // Pass to the preview view
    return view('print.preview', ['content' => $printContent]);
}
}
