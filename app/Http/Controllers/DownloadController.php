<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function index(Request $request)
    {
        $query = Download::orderBy('title');
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        $downloads = $query->paginate(10)->withQueryString();

        $breadcrumbs = [
            ['title' => 'Downloads']
        ];

        return view('downloads.index', compact('downloads', 'breadcrumbs'));
    }

    public function downloadFile(Download $download)
    {
        $filePath = $download->file_path;
        $fileName = basename($filePath);
        return Storage::disk('public')->download($filePath, $fileName);
    }
}
