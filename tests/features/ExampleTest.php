<?php

class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
    {
	    $user = factory(\App\User::class)->create([
		    'name' => 'Diego Lopez',
		    'email' => 'lopezanta@gmail.com'
	    ]);
	    
        $this->actingAs($user, 'api')
        	->visit('api/user')
            ->see('Diego')
            ->see('lopezanta@gmail.com');
    }
}
