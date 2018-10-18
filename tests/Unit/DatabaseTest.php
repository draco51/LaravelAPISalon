<?php

namespace Tests\Unit;

use App\Model\FreelancerProfile;
use App\Model\Skill;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function Example()
    {
        $first = factory(Skill::class,10)->create();
        $skill = Skill::orderBy('created_at', 'desc')->first();
        $this->assertEquals('10',$first);


//        $this->assertEquals([
//            ["id" => $skill->id->format('int'),
//                "skill" => $skill->created_at->format('Y-M-D')
//
//            ]
//        ])
    }

}
