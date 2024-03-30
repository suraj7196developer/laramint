<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigurationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Configuration::factory()->create([
            'config_type' => 'SiteName',
            'config_value' => json_encode('BinayakEdu'),
            'config_category' => 'global'
        ]);


        \App\Models\Configuration::factory()->create([
            'config_type' => 'NoReplyEmail',
            'config_value' => json_encode([
                'MAIL_MAILER' => 'smtp',
                'MAIL_HOST' => 'smtp.gmail.com',
                'MAIL_PORT' => '587',
                'MAIL_USERNAME' => 'warispc12334@gmail.com',
                'MAIL_PASSWORD' => 'xjgfptbyqsgdurld',
                'MAIL_ENCRYPTION' => 'tls',
                'MAIL_FROM_ADDRESS' => 'warispc12334@gmail.com',
                'MAIL_FROM_NAME' => "No-Reply: BinayakEdu Gamification",
            ]),
            'config_category' => 'global'
        ]);


        \App\Models\Configuration::factory()->create([
            'config_type' => 'AlertNotification',
            'config_value' => json_encode(1),
            'config_category' => 'global'
        ]);


        \App\Models\Configuration::factory()->create([
            'config_type' => 'CoinsForNewUserRegister',
            'config_value' => json_encode(50),
            'config_category' => 'global'
        ]);


        \App\Models\Configuration::factory()->create([
            'config_type' => 'ScoreToCoins',
            'config_value' => json_encode(10),
            'config_category' => 'global'
        ]);
    }
}
