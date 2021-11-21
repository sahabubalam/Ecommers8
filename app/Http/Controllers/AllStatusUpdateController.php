<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AllStatusUpdateController extends Controller
{
    public function status(Request $request,$status,$id)
    {
        $category=category::find($id);
        $category->status=$status;
        $category->save();
        return back();
    }
}
