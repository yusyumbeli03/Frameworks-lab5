<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class DashboardController extends Controller
{
    public function index($userId = null)
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    // Просмотр всех кабинетов (только для администратора)
    public function adminIndex()
    {
        if (!Auth::user()->isAdmin()) {
            abort(403, 'Access denied');
        }

        $users = User::all();
        return view('admin.dashboards', compact('users'));
    }

    public function show(User $user)
    {
        // Проверка доступа: администратор может видеть любой кабинет, пользователь — только свой
        if (!Auth::user()->can('canViewDashboard', $user)) {
            abort(403, 'Access denied');
        }

        return view('dashboard', compact('user'));
    }


}

