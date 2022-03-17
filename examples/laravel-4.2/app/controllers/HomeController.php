<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function verifyCredentials()
    {
        Log::info('Verifying credentials');
        $user = DB::table('migrations')->where('migration', 'a migration')->first();
        throw new Exception('No credentials passed!');
    }


    public function authenticateUser()
    {
        Log::info('Authenticating the current user');
        $this->verifyCredentials();
    }

    public function showWelcome($id)
    {
        Log::info('Rendering a page thats about to error');
        $this->authenticateUser();
        return View::make('hello');
    }

}
