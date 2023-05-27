<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUrlRequest;
use App\Http\Requests\UpdateUrlRequest;
use App\Models\Url;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;

class UrlController extends Controller{
    /**
     * Display a listing of the urls.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $urls = Url::where('uid', Auth::id())->get();
        return view('urls.urls-list', ['urls' => $urls]);
    }

    /**
     * Show the form for creating a new url.
     */
    public function create(){
        //
    }

    /**
     * Store a newly created url in database.
     * @param StoreUrlRequest $request
     */
    public function store(StoreUrlRequest $request){
        //
    }

    /**
     * Show the form for editing the specified url.
     * @param Url $url
     */
    public function edit(Url $url){
        //
    }

    /**
     * Update the specified url in database.
     * @param UpdateUrlRequest $request
     * @param Url $url
     */
    public function update(UpdateUrlRequest $request, Url $url){
        //
    }

    /**
     * Remove the specified url from database.
     * @param Url $url
     */
    public function destroy(Url $url){
        //
    }
}
