<?php

//title   	sentence($nbWords = 5, $variableNbWords = true) 
//description	text($maxNbChars = 249)
//posted_in	dateTime($max = 'now', $timezone = null)
//stars     	numberBetween($min = 1, $max = 5)

'name' => $faker->name,
'email' => $faker->unique()->safeEmail,
'password' => '$2y
$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
'remember_token' => str_random(10),

'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
'description' => $faker->text($maxNbChars = 249),
'posted_in' => $faker->dateTime($max = 'now', $timezone = null), // secret
'stars' => $faker->numberBetween($min = 1, $max = 5),

'text' => $faker->text($maxNbChars = 149),
'commented_in' => $faker->dateTime($max = 'now', $timezone = null),

'url'=> $faker->imageUrl($width = 640, $height = 480),
'uploaded_in' => $faker->dateTime($max = 'now', $timezone = null),

//===========app/routes.php

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));


//===========app/controllers/HomeController.php

public function showLogin()
{
    // show the form
    return view('test-login-form');
}

public function doLogin()
{
		// validate the info, create rules for the inputs
	$rules = array(
		'email'    => 'required|email', // make sure the email is an actual email
		'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
	);

	// run the validation rules on the inputs from the form
	$validator = Validator::make(Input::all(), $rules);

	// if the validator fails, redirect back to the form
	if ($validator->fails()) {
		return Redirect::to('login')
			->withErrors($validator) // send back all errors to the login form
			->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
	} else {

		// create our user data for the authentication
		$userdata = array(
			'email'     => Input::get('email'),
			'password'  => Input::get('password')
		);

		// attempt to do the login
		if (Auth::attempt($userdata)) {

			// validation successful!
			// redirect them to the secure section or whatever
			// return Redirect::to('secure');
			// for now we'll just echo success (even though echoing in a controller is bad)
			echo 'SUCCESS!';

		} else {        

			// validation not successful, send back to form 
			return Redirect::to('login');

		}
	}
}

public function doLogout()
{
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
}
