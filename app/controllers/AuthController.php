<?php

class AuthController extends \BaseController {

    public function __construct(LDAP $ldap)
    {
        $this->ldap = $ldap;
    }

    public function login()
    {
        if ( $this->ldap->authenticate( Input::get('email'), Input::get('password') ) )
        {
            $user = User::where('email', Input::get('email'))->first();

            Auth::login( $user );

            return Redirect::to('home');
        }

        return Redirect::refresh()->with('error', 'User and/or password are incorrect.');
    }

    public function logout()
    {

        if ( ! Auth::guest())
        {
            Auth::logout();

            return Redirect::to('message')
                ->with('message', 'You just logged out.');
        }

        return Redirect::to('login');

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}