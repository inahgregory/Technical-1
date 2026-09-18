<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '0917-245-8891',
            ],
            [
                'full_name' => 'Joshua Reyes',
                'email' => 'joshua.reyes@example.com',
                'phone' => '0928-614-3302',
            ],
            [
                'full_name' => 'Angela Cruz',
                'email' => 'angela.cruz@example.com',
                'phone' => '0915-771-2044',
            ],
            [
                'full_name' => 'Daniel Lim',
                'email' => 'daniel.lim@example.com',
                'phone' => '0999-482-1168',
            ],
            [
                'full_name' => 'Sophia Garcia',
                'email' => 'sophia.garcia@example.com',
                'phone' => '0906-335-9172',
            ],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}
