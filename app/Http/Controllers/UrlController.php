<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteUrlRequest;
use App\Http\Requests\StoreUrlRequest;
use App\Http\Requests\UpdateUrlRequest;
use App\Models\Url;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;

class UrlController extends Controller{
    /**
     * Expand shortened url and redirect to it.
     * If the shortened url is not exists in the database,
     * the query will fail and redirect to 404 error page.
     *
     * @param string $shortenedUrl
     * @return Redirector|RedirectResponse
     */
    public function expandUrl(string $shortenedUrl){
        $url = Url::where('shortened', $shortenedUrl)->firstOrFail();
        return redirect($url['expanded']);
    }

    /**
     * Display a listing of the urls.
     *
     * @return Factory|View
     */
    public function index(){
        $urls = Url::where('uid', Auth::id())->paginate(5);
        return view('urls.urls-list', ['urls' => $urls]);
    }

    /**
     * Show the form for creating a new url.
     *
     * @return Factory|View
     */
    public function create(){
        return view('urls.create-form');
    }

    /**
     * Store a newly created url in database.
     *
     * @param StoreUrlRequest $request
     * @return Redirector|RedirectResponse
     */
    public function store(StoreUrlRequest $request){
        Url::addUrl($request);
        return redirect('urls');
    }

    /**
     * Show the form for editing the specified url.
     *
     * @param Url $url
     * @return Factory|View
     */
    public function edit(Url $url){
        return view('urls.edit-form', ['url' => $url]);
    }

    /**
     * Update the specified url in database.
     *
     * @param UpdateUrlRequest $request
     * @param Url $url
     * @return Redirector|RedirectResponse
     */
    public function update(UpdateUrlRequest $request, Url $url){
        Url::updateUrl($url, $request);
        return redirect('/');
    }

    /**
     * Remove the specified url from database.
     *
     * @param DeleteUrlRequest $request
     * @param Url $url
     * @return Redirector|RedirectResponse
     */
    public function destroy(DeleteUrlRequest $request, Url $url){
        Url::destroy($url['id']);
        return redirect('/');
    }
}
