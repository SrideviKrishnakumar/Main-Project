<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function fileUpload()
    {
        // Only show the view
        return view('pages.file');
    }

    public function fileUploadSubmit(Request $request,$folder)
    {
        // Check if the file match our criteria
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,jpeg|max:2048',
        ]);
       


        // Rename the file with timestamp
        $fileName = time() . '.' . $request->file->extension();

        // Save the file in public/uploads folder
    
        $request->file->move(public_path('/images'.$folder), $fileName);

        // Refresh the view with success message.
        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
}
