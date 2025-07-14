<?php

// app/Http/Controllers/PdfController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function index()
    {
        $pdfs = Pdf::all();
        return view('pdfs.index', compact('pdfs'));
    }

    public function create()
    {
        return view('pdfs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'pdf' => 'required|mimes:pdf|max:10240', // Max 10MB
        ]);

        $path = $request->file('pdf')->store('pdfs');

        Pdf::create([
            'title' => $request->title,
            'file_path' => $path,
        ]);

        return redirect()->route('pdfs.index')->with('success', 'PDF uploaded successfully.');
    }

    public function download(Pdf $pdf)
    {
        return Storage::download($pdf->file_path, $pdf->title . '.pdf');
    }

    public function show(Pdf $pdf)
    {
        return response()->file(storage_path('app/private/' . $pdf->file_path));
    }

    public function destroy(Pdf $pdf)
    {
        Storage::delete($pdf->file_path);
        $pdf->delete();

        return redirect()->route('pdfs.index')->with('success', 'PDF deleted.');
    }
}
