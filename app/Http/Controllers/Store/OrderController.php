<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        echo '
            <div style="text-align: center; margin-top: 100px;">
                <h2>🚧 Under Development 🚧</h2>
                <p>This page is currently under construction.</p>
                <button 
                    onclick="window.history.back()" 
                    style="padding: 10px 20px; font-size: 16px; background-color: #d29c48; color: white; border: none; border-radius: 5px; cursor: pointer;"
                >
                    Go Back
                </button>
            </div>
        ';
    }
}
