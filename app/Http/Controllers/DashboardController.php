<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(private ContactService $contactService) {}

    public function index(){
        $inquires = $this->contactService->getAllContacts();
        return view('backend.dashboard.index', compact('inquires' ));
    }
}
