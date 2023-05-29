<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use function friendlyUrlPath;

class Url extends Model{
    use HasFactory;

    /**
     * Adds new url to the database
     *
     * @param $request
     * @return bool Succession
     */
    static public function addUrl($request){
        $url = new self();
        $url->uid = Auth::id();
        $url->expanded = $request['expanded'];
        $url->shortened = friendlyUrlPath($request['shortened']);
        return $url->save();
    }

    /**
     * Update the given url
     *
     * @param $url
     * @param $request
     * @return bool Succession
     */
    static public function updateUrl(Url $url, $request){
        $url->expanded = $request['expanded'];
        $url->shortened = friendlyUrlPath($request['shortened']);
        return $url->save();
    }

    /**
     * Get search results for the request
     *
     * @param $request
     * @return Builder
     */
    static public function searchUrl(Request $request){
        return Url::where([
            ['uid', Auth::id()],
            [function($query) use ($request){
                if(($s = $request->s))
                    $query->orWhere('id', 'LIKE', '%'.$s.'%')
                        ->orWhere('expanded', 'LIKE', '%'.$s.'%')
                        ->orWhere('shortened', 'LIKE', '%'.$s.'%')
                        ->get();
            }],
        ]);
    }
}
