<?php
            //==============================dashboard============================

use App\Models\Client;
use Illuminate\Routing\Route;

            Route::get('/client/dashboard', function () {
                $info = Client::where('id', auth()->user()->id)->get();
                return view('dashboard.client', compact('info'));
            })->name('dashboard.client');
