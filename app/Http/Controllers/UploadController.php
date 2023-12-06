<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function process(Request $request): string
    {
        $files = $request->allFiles();
        $requestKey = array_key_first($files);
        $file = $request->file($requestKey);

        return $file->store(
            path: 'tmp'
        );
    }

    public function destroy(Request $data): string
    {
        Storage::delete($data->getContent());
        return '';
    }
}
