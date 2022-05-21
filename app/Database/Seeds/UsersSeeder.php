<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;

class UsersSeeder extends Seeder
{
    public function run()
    {
		// 1 Simple Queries
		$data = [
			'name'     => 'admin',
			'email'    => 'admin@gmail.com',
			'password' => password_hash('admin123', PASSWORD_DEFAULT),
		];
		$this->db->query("INSERT INTO users (name, email, password) VALUES(:name:, :email:, :password:)", $data);

		// 2 Using Query Builder
		$this->db->table('users')->insert([
			'name'  => 'rene',
			'email' => 'rene@gmail.com',
			'password' => password_hash('rene123', PASSWORD_DEFAULT),
		]);

		// 3 Whit Models and Fakers
		$user_fabricator = new Fabricator(UserModel::class);
		$user_fabricator->make();
    }
}
