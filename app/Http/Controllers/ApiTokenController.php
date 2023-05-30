<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use function view;

class ApiTokenController extends Controller{
    /**
     *
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(){
        return view('profile.api');
    }

    /**
     * Update the authenticated user's API token.
     *
     * @param Request $request
     * @return array|Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function update(Request $request){
        $token = $request->user()->createToken('api-token');
        return view('profile.api', ['token' => $token->plainTextToken]);
    }
}
