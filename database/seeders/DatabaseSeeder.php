<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarStatus;
use App\Models\CarType;
use App\Models\License;
use App\Models\Payment;
use App\Models\PaymentStatus;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\Role;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\SubscriptionStatus;
use App\Models\Tenant;
use App\Models\Trip;
use App\Models\TripSpeed;
use App\Models\TripStatus;
use App\Models\TripStop;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SubscriptionStatusSeeder::class);
        Tenant::factory(10)->create();
        SubscriptionPlan::factory(3)->create();
        Subscription::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(TenantRoleSeeder::class);


        //create users with emails project@gmail.com, system@gmail.com and enumerator@gmail.com
        User::factory()->create(['email' => 'project@gmail.com', 'password' => bcrypt('password')]);
        User::factory()->create(['email' => 'system@gmail.com', 'password' => bcrypt('password')]);
        User::factory()->create(['email' => 'enumerator@gmail.com', 'password' => bcrypt('password')]);
        CarType::factory(10)->create();

        CarStatus::factory(3)->create();

        TripStatus::factory(3)->create();

        Trip::factory(10)->create();
        TripSpeed::factory(10)->create();
        TripStop::factory(10)->create();



        PaymentStatus::factory(4)->create();

        Payment::factory(20)->create();
    }
}
