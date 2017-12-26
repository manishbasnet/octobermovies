<?php


// Route::get('hello',function(){

// 	$faker = Faker\Factory::create();

// 	for ($i=0; $i < 100; $i++) { 
// 		# code...
// 		$name = $faker->sentence($nbWords = 3, $variableNbWords = true);


// 		Movie::create([

// 			'name' => $faker->$firstName,
// 			'lastName' => $faker->lastName
// 		]);

// 	}
	

// 		return "Actors created!";	

// });

	Route::get('api/user','ManishBasnet\Movies\Controllers\Userinfo@index');

	Route::post('/api/add/user', 'ManishBasnet\Movies\Controllers\Userinfo@create');

	Route::post('/api/login','ManishBasnet\Movies\Controllers\Userinfo@checkUser');


	Route::post('foo/bar', function () {
    return 'Hello World';

	});




?>
