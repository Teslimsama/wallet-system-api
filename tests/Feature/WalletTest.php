<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Wallet;

class WalletTest extends TestCase
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

    public function test_user_can_check_wallet_balance()
    {
        $user = User::factory()->create();
        $wallet = Wallet::factory()->create(['user_id' => $user->id, 'balance' => 500]);

        $this->actingAs($user, 'sanctum')
        ->getJson('/api/wallet/balance')
        ->assertStatus(200)
            ->assertJson(['balance' => 500]);
    }

    public function test_user_can_fund_wallet()
    {
        $user = User::factory()->create();
        $wallet = Wallet::factory()->create(['user_id' => $user->id, 'balance' => 0]);

        $this->actingAs($user, 'sanctum')
        ->postJson('/api/wallet/fund', ['amount' => 100])
            ->assertStatus(200)
            ->assertJson(['message' => 'Wallet funded successfully.']);

        $this->assertEquals(100, $wallet->fresh()->balance);
    }
    

}
