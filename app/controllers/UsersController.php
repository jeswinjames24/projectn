<?php

class UsersController extends \BaseController {

    protected $layout = "layouts.prelogin";

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
    public function getRegister() {
        $this->layout->content = View::make('users.register');
    }
    public function postCom_register() {
     $ds = ldap_connect('ldap://138.91.41.100:389');
		  if ($ds) {
    // bind with appropriate dn to give update access
    $r = ldap_bind( $ds, 'nubesadmin@nubeslab.com', 'Nub3s@dmin');

    // prepare data
    $info["OU"] = "Test OU";
    $info["DC"] = "nubeslab";
    $info["DC"] = "com";

    // add data to directory
    $r = ldap_add($ds, "cn=TestUser", $info);

    ldap_close($ds);
    } else {
      echo "Unable to connect to LDAP server";
      }
    }
    public function getCom_register() {
        $this->layout->content = View::make('users.com_register');
    }

    public function getLogin() {
        $this->layout->content = View::make('users.login');
    }
    public function getDashboard() {
        $this->layout->content = View::make('users.dashboard');
    }
    public function postSignin() {
        //Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')));
        if (Auth::attempt(array('username'=>'eteng', 'email'=>Input::get('email'),'password'=>Input::get('password')))) {
            return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('users/login')
                ->with('message', 'Your username/password combination was incorrect')
                ->withInput();
        }
    }
}
