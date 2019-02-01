<?php


use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Quan dep trai',
                'username' => 'quanhd',
                'password' => (new DefaultPasswordHasher)->hash('123456'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $users = $this->table('users');
        $users->insert($data)
            ->save();
    }
}
