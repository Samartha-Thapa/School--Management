
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function toggleTheme(Request $request)
    {
        $theme = $request->input('theme') === 'dark' ? 'light' : 'dark';
        session(['theme' => $theme]);
        
        return response()->json(['status' => 'Theme updated']);
    }
}
