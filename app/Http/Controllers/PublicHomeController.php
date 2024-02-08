<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class PublicHomeController extends Controller
{
    public function __construct()
    {
        Inertia::share('profile',__('messages.profile'));
        Inertia::share('experience',__('messages.experience'));
        Inertia::share('education',__('messages.education'));
        Inertia::share('skills',__('messages.skills'));
        Inertia::share('downloadLabel',__('messages.downloadLabel'));
        Inertia::share('titleDescription',__('messages.titleDescription'));
        Inertia::share('contact',__('messages.contact'));
        Inertia::share('address',__('messages.address'));
        Inertia::share('phone',__('messages.phone'));
        Inertia::share('email',__('messages.email'));

    }
    public function index()
    {
        return Inertia::render('Welcome');
    }
}
