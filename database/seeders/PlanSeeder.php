<?php

namespace Database\Seeders;

use App\Http\Controllers\PaystackController;
use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $free = [
            'name' => 'FREE',
            'code' => 'PLN_FREE',
            'amount' => '0',
            'interval' => 'monthly'
        ];
        $plans = [
            // Essential
            [
                'name' => 'ESSENTIAL-MONTHLY-100',
                'amount' => '3480',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ESSENTIAL-YEARLY-100',
                'amount' => '38280',
                'interval' => 'annually'
            ],
            [
                'name' => 'ESSENTIAL-MONTHLY-300',
                'amount' => '12850',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ESSENTIAL-YEARLY-300',
                'amount' => '141350',
                'interval' => 'annually'
            ],
            [
                'name' => 'ESSENTIAL-MONTHLY-500',
                'amount' => '18220',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ESSENTIAL-YEARLY-500',
                'amount' => '200420',
                'interval' => 'annually'
            ],
            [
                'name' => 'ESSENTIAL-MONTHLY-700',
                'amount' => '23570',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ESSENTIAL-YEARLY-700',
                'amount' => '248270',
                'interval' => 'annually'
            ],
            [
                'name' => 'ESSENTIAL-MONTHLY-1000',
                'amount' => '28730',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ESSENTIAL-YEARLY-1000',
                'amount' => '305250',
                'interval' => 'annually'
            ],

            // Advanced
            [
                'name' => 'ADVANCED-MONTHLY-1001',
                'amount' => '32270',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ADVANCED-YEARLY-1001',
                'amount' => '354970',
                'interval' => 'annually'
            ],
            [
                'name' => 'ADVANCED-MONTHLY-1500',
                'amount' => '36830',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ADVANCED-YEARLY-1500',
                'amount' => '405240',
                'interval' => 'annually'
            ],
            [
                'name' => 'ADVANCED-MONTHLY-2000',
                'amount' => '40660',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ADVANCED-YEARLY-2000',
                'amount' => '447260',
                'interval' => 'annually'
            ],
            [
                'name' => 'ADVANCED-MONTHLY-2500',
                'amount' => '44710',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ADVANCED-YEARLY-2500',
                'amount' => '491810',
                'interval' => 'annually'
            ],
            [
                'name' => 'ADVANCED-MONTHLY-3000',
                'amount' => '49870',
                'interval' => 'monthly'
            ],
            [
                'name' => 'ADVANCED-YEARLY-3000',
                'amount' => '548570',
                'interval' => 'annually'
            ],
        ];

        Plan::firstOrCreate($free);
        /*foreach ($plans as $plan) {
            $response = PaystackController::create_plan($plan);
            if ($response['status']) {
                Plan::updateOrCreate(['name' => $response['data']['name']],[
                    'name' => $response['data']['name'],
                    'amount' => $response['data']['amount'],
                    'interval' => $response['data']['interval'],
                    'code' => $response['data']['plan_code'],
                ]);
            }
        }*/
    }
}
