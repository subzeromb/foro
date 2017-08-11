<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	use DatabaseTransactions; // Elimina los registros en la tabla al finalizar el test
	
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
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
