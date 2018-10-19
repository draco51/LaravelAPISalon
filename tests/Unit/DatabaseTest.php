<?php

namespace Tests\Unit;

use App\Model\FreelancerProfile;
use App\Model\Skill;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{

    use DatabaseTransactions;

    private $user;
    public function setUp()
    {
        parent::setUp();
        $this->user = factory(FreelancerProfile::class)->create();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function expecting_input_user_count()
    {
        $this->assertNotEmpty($this->user->id);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function freelacner_has_name()
    {
        $this->assertNotEmpty($this->user->name);
    }

}
