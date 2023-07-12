<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CurrencyConverterTest extends TestCase
{
    private $source = 'USD';
    private $target = 'JPY';
    private $amount = '$1,525';
 		private $response;

    private function setResponse() 
    {
			$this->response = $this->get('/api/currencyConverter/?source=' . $this->source . '&target=' . $this->target . '&amount=' . $this->amount);
    }

    public function test_ok()
    {
    	$this->setResponse();

    	$this->response->assertStatus(200);
    }

    public function test_error_source()
    {
    	$this->source = 'USD1';
    	$this->setResponse();

    	$this->response->assertStatus(400);
    }

    public function test_error_target()
    {
    	$this->source = 'JPY1';
    	$this->setResponse();

    	$this->response->assertStatus(400);
    }

    public function test_error_source_symbol()
    {
    	$this->amount = '¥1,525';
    	$this->setResponse();

    	$this->response->assertStatus(400);
    }

    public function test_error_amount()
    {
    	$this->amount = '$ddd';
    	$this->setResponse();

    	$this->response->assertStatus(400);
    }
}
