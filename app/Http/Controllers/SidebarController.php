<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SidebarController extends Controller
{
    public function showSidebar()
    {
        $user = Auth::user();
        return view('sidebar', compact('user'));
    }
}