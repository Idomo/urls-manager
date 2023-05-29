<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteUrlRequest;
use App\Http\Requests\StoreUrlRequest;
use App\Http\Requests\UpdateUrlRequest;
use App\Models\Url;

class UrlApiController extends Controller{
    /**
     * Get a list of the urls
     */
    public function index(){
        //
    }

    /**
     * Get specific url data
     *
     * @param int $urlId
     */
    public function show(int $urlId){
        //
    }

    /**
     * Store a newly created url in database
     *
     * @param StoreUrlRequest $request
     */
    public function store(StoreUrlRequest $request){
        //
    }

    /**
     * Update the specified url in database
     *
     * @param UpdateUrlRequest $request
     * @param Url $url
     */
    public function update(UpdateUrlRequest $request, Url $url){
        //
    }

    /**
     * Remove the specified url from database
     *
     * @param DeleteUrlRequest $request
     * @param Url $url
     */
    public function destroy(DeleteUrlRequest $request, Url $url){
        //
    }
}
