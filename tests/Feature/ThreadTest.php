<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadTest extends TestCase
{

	/** @test */
	public function a_user_can_view_all_threads()
	{
        // $this->withoutExceptionHandling();

        $thread = Thread::factory()->create();

		$response = $this->get('/threads');

		$response->assertSee($thread->title);

	}

    /** @test */
    public function a_user_can_read_a_single_thread()
    {
        $thread = Thread::factory()->create();

        $reponse = $this->get('/threads/' . $thread->id);

        $reponse->assertSee($thread->title);
    }
}
