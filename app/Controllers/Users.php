<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Carlo Mendoza',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Liza Navarro',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Villanueva',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Bea Aquino',
                'role' => 'Store Manager',
            ],
            [
                'username' => 'inventory01',
                'full_name' => 'Nico Dela Cruz',
                'role' => 'Inventory Staff',
            ],
        ];

        return view('users/index', ['users' => $users]);
    }
}
