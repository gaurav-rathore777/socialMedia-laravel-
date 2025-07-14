<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiUserController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $response->json();

        // Apply filters manually on array
        $filteredUsers = collect($users)->filter(function ($user) use ($request) {
            $nameMatch = !$request->filled('name') || str_contains(strtolower($user['name']), strtolower($request->name));
            $emailMatch = !$request->filled('email') || str_contains(strtolower($user['email']), strtolower($request->email));
            return $nameMatch && $emailMatch;
        });

        return view('api_users.index', [
            'users' => $filteredUsers,
            'filters' => $request->only(['name', 'email'])
        ]);
    }
}
