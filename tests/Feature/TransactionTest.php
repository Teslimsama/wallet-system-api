<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Transaction;

class TransactionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_user_can_view_transactions()
    {
        $user = User::factory()->create();
        Transaction::factory()->count(3)->create(['user_id' => $user->id]);

        $this->actingAs($user)
            ->get('/transactions') // Adjust path as needed
            ->assertStatus(200)
            ->assertViewHas('transactions', function ($transactions) {
                return $transactions->count() === 3;
            });
    }

}
