<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Dashboard;

class DashboardController extends Controller
{
    public $model;

    public function __construct(Dashboard $dashboard)
    {
        $this->model = $dashboard;
    }

    public function index()
    {
        $data = $this->dashboard();

        return view('admin/contents/index',[]);
    }

    public function dashboard()
    {
        $data = $this->model->getDatadashboard();

        return $data;
    }
}
