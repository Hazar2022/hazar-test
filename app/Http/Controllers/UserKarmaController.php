<?php

namespace App\Http\Controllers;

use App\Models\UserKarma;
use Illuminate\Http\Request;

class UserKarmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }
    public function getById($id)
    {
        $me=UserKarma::join('user_images','user_karmas.image_id','=','user_images.id')->where('user_karmas.id','=',$id)->get(['user_karmas.*','user_images.url']);
        $more=UserKarma::join('user_images','user_karmas.image_id','=','user_images.id')->where('karma_score','>',$me[0]->karma_score)->orderBy('karma_score')->take(2)->get(['user_karmas.*','user_images.url']);
        $less=UserKarma::join('user_images','user_karmas.image_id','=','user_images.id')->where('karma_score','<',$me[0]->karma_score)->orderBy('karma_score')->take(2)->get(['user_karmas.*','user_images.url']);
        return $more->merge($me)->merge($less);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserKarma  $userKarma
     * @return \Illuminate\Http\Response
     */
    public function show(UserKarma $userKarma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserKarma  $userKarma
     * @return \Illuminate\Http\Response
     */
    public function edit(UserKarma $userKarma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserKarma  $userKarma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserKarma $userKarma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserKarma  $userKarma
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserKarma $userKarma)
    {
        //
    }
}
