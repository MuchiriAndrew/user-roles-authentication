<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superAdminDashboard(){
        //return an Inertia view
        return Inertia::render('Dashboards/superAdminDashboard');
    }

    public function adminDashboard(){
        return Inertia::render('Dashboards/adminUserDashboard');
    }

    public function generalUserDashboard(){
        return Inertia::render('Dashboards/generalUserDashboard');
    }
}
