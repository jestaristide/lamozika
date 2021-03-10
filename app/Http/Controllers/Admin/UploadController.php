<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if($request->hasFile('pochette')) {
            $file = $request->file('pochette');
            $fileName = $request->getClientOriginName();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('pochette/test/'.$folder, $fileName);

            return $folder;
        }

        return '';
    }
}
