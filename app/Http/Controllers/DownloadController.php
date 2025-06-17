<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::orderBy('title')->get();

        $breadcrumbs = [
            ['title' => 'Downloads']
        ];

        return view('downloads.index', compact('downloads', 'breadcrumbs'));
    }

    public function downloadFile(Download $download)
    {
        return Storage::disk('public')->download($download->file_path, $download->title);
    }
}
