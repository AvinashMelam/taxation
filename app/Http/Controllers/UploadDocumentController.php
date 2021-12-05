<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UploadDocument;

class UploadDocumentController extends Controller
{
    public function index()
    {
        if(session()->has('UserId'))
        {

            return view('users.UploadDocument');
        }
        else
        {
            return redirect('UserLogin');
        }
    }

    public function step2()
    {
        return view('users.UploadDocument2');
    }

    public function upload_document(Request $request)
    {
        if(session()->has('UserId'))
        {
            $request->validate([
                'file' => 'required|mimes:pdf|max:2048',
            ]);

            $doc_year = $request->document_year;
            $doc_type = $request->document_type;
            $doc_name = @$request->file('doucment_name');
            $document_name = $file->getClientOriginalName();
            $document_type = $request->file('doucment_name')->getMimeType();
            $path = 'uploads';
            $request->file->move(public_path('uploads'), $fileName);
            $upload ;
            $fileName = time().'.'.$request->doucment_name->extension();  
            return back()
                ->with('success','You have successfully upload file.')
                ->with('file',$fileName);
        }
        else
        {
            return redirect('UserLogin');
        }
    }
}
