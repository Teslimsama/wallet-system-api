---

# Wallet System API

A robust Wallet System API built with **Laravel** that allows users to manage their wallets, fund their balances, make airtime purchases, and view transaction history.

## Requirements

- PHP >= 8.0
- Composer
- MySQL or any other supported database
- Laravel >= 9.x
- Postman or any API testing tool

## Setup

### 1. Clone the repository

Clone the project to your local machine:

```bash
git clone https://github.com/yourusername/wallet-system-api.git
```

### 2. Install dependencies

Navigate to the project directory and install the dependencies:

```bash
cd wallet-system-api
composer install
```

### 3. Set up the `.env` file

Copy the `.env.example` file to `.env` and update your environment variables, especially the database connection settings:

```bash
cp .env.example .env
```

Update the `.env` file with your database credentials:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wallet_system
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### 4. Generate the application key

Run the following command to generate a unique application key:

```bash
php artisan key:generate
```

### 5. Run database migrations and seeders

Migrate the database and seed it with test data (optional):

```bash
php artisan migrate
php artisan db:seed
```

### 6. Start the application

Start the development server:

```bash
php artisan serve
```

The API will now be accessible at `http://localhost:8000`.

---

## API Reference

### Authentication

This API uses **Laravel Sanctum** for authentication. A valid Bearer Token is required for most endpoints.

#### Login User

```http
POST /api/login
```

| Parameter  | Type     | Description           |
|------------|----------|-----------------------|
| `email`    | `string` | **Required** User email |
| `password` | `string` | **Required** User password |

Response:

```json
{
  "token": "your-auth-token"
}
```

Pass the token as the `Authorization` header in subsequent requests:

```bash
Authorization: Bearer your-auth-token
```

---

### Wallet API

#### Check Wallet Balance

```http
GET /api/wallet/balance
```

Response:

```json
{
  "balance": 500.0
}
```

#### Fund Wallet

```http
POST /api/wallet/fund
```

| Parameter | Type     | Description                |
|-----------|----------|----------------------------|
| `amount`  | `number` | **Required** Amount to add |

Response:

```json
{
  "message": "Wallet funded successfully."
}
```

---

### Airtime Purchase API

#### Purchase Airtime

```http
POST /api/purchase/airtime
```

| Parameter | Type     | Description                |
|-----------|----------|----------------------------|
| `amount`  | `number` | **Required** Airtime amount |

Response:

```json
{
  "message": "Airtime purchased successfully."
}
```

Error Response (if insufficient balance):

```json
{
  "error": "Insufficient wallet balance."
}
```

---

### Transactions API

#### View Transactions

```http
GET /api/transactions
```

Response:

```json
[
  {
    "id": 1,
    "type": "purchase",
    "amount": 50,
    "description": "Airtime purchase",
    "created_at": "2024-11-29T12:00:00"
  }
]
```

---

## Testing

### Running Feature Tests

The application includes robust feature tests for wallet, airtime purchases, and transactions. Run tests using:

```bash
php artisan test
```

---

## Example Feature Tests

### Airtime Purchase

```php
public function test_user_can_purchase_airtime()
{
    $user = User::factory()->create();
    $wallet = Wallet::factory()->create(['user_id' => $user->id, 'balance' => 100]);

    $response = $this->actingAs($user, 'sanctum')
        ->postJson('/api/purchase/airtime', ['amount' => 50]);

    $response->assertStatus(200)
        ->assertJson(['message' => 'Airtime purchased successfully']);

    $this->assertEquals(50, $wallet->fresh()->balance);
}
```

### Wallet Balance

```php
public function test_user_can_check_wallet_balance()
{
    $user = User::factory()->create();
    $wallet = Wallet::factory()->create(['user_id' => $user->id, 'balance' => 500]);

    $this->actingAs($user, 'sanctum')
        ->getJson('/api/wallet/balance')
        ->assertStatus(200)
        ->assertJson(['balance' => 500]);
}
```

---

## Postman Collection

Import the [Postman Collection](https://www.getpostman.com/collections/yourcollectionlink) to test API endpoints directly.

---

## Acknowledgements

- [Laravel](https://laravel.com)
- [PHPUnit](https://phpunit.de)
- [Tailwind CSS](https://tailwindcss.com)

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
