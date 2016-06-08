<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
#app/tests/controllers/DesControllerTest.php
class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
 
     
 
	public function testIndex()
	{
	  $this->call('GET', 'posts');
	}

	public function test_mainpage(){
        $this->visit('/')
            ->see('visit our beautiful country');
    	}
   
	public function testdistrict()
       {
           $this->visit('/')
            ->click('District')
            ->seePageIs('/');
      }
	public function checklog(){
        $this->visit('/log')
            
            ->type('buet','username')
            ->type('1234','password')
            ->press('button')
            ->seePageIs('http://localhost/test/p.php');
        }

	public function testmain()
       {
           $this->visit('/district')
            ->click('Home')
            ->seePageIs('/');
      }
	// public function testName()
         //{
           //  $district = App\District::all();
            // $this->be($disrict);
         //}

	public function check_list(){
        $this->visit('/district')
            ->see('Dhaka')
	    ->see('Khagrachari');
      }

 

}
