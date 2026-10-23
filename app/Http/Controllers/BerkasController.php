<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    public function show(string $path)
    {
        // Tolak path yang mencoba keluar dari folder storage
        abort_if(str_contains($path, '..') || str_contains($path, "\0"), 404);

        $disk = Storage::disk('public');

        abort_unless($disk->exists($path), 404);

        return $disk->response($path, null, [
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }
}
