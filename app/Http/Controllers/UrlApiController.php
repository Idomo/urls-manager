<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteUrlRequest;
use App\Http\Requests\StoreUrlRequest;
use App\Http\Requests\UpdateUrlRequest;
use App\Models\Url;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use function response;

/**
 * @group Urls API
 * An API to CRUD URLs
 */
class UrlApiController extends Controller{
    /**
     * Get a list of the urls
     *
     * @return JsonResponse
     * @responseField success bool The succession of the operation
     * @responseField urls object[] An array with URLs
     * @responseField urls[].id int
     * @responseField urls[].uid int
     * @responseField urls[].expanded int
     * @responseField urls[].shortened int
     * @responseField urls[].created_at string
     * @responseField urls[].updated_at string
     */
    public function index(){
        $urls = Url::where('uid', Auth::id())->get()->toArray();
        if(!empty($urls))
            return response()->json(['success' => true, 'urls' => $urls]);
        else
            return response()->json(['success' => false], 404);
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
