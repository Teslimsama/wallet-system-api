<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Transaction;

class PurchaseAirtimeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_user_can_purchase_airtime()
    {
        $user = User::factory()->create();
        $wallet = Wallet::factory()->create(['user_id' => $user->id, 'balance' => 100]);

        $response = $this->actingAs($user, 'sanctum')
        ->postJson('/api/purchase/airtime', [
            'amount' => 50,
        ]);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Airtime purchased successfully']);

        $this->assertEquals(50, $wallet->fresh()->balance);
    }
}
