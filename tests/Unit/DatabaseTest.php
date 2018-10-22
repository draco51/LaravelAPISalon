<?php

namespace Tests\Unit;

use App\Model\FreelancerProfile;
use App\Model\Skill;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use PhpParser\Builder\Property;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{

    use DatabaseTransactions;

    private $users;
    public function setUp()
    {
        parent::setUp();
        $this->users = factory(FreelancerProfile::class)->create();
    }

    /** @test */
    public function expecting_input_user_count()
    {
        $this->assertNotEmpty($this->users->id);
    }


    /** @test */
    public function freelacner_has_name()
    {
        $this->assertNotEmpty($this->users->name);
    }

    /** @test */
    public function api_test()
    {


    }

}
