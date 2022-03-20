<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomersTableseeder::class);
        DB::table('customers')->delete();

        $data = [
            [
                'name' => 'ユーザー１',
                'birthday' => '2000-04-17',
                'gender'=> 0,
                'height'=> 163.2
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],

/*                 'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
 */            ]
        ];

        DB::table('customers')->insert($data);













        // ここから追加
/*         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // テーブルのクリア
        DB::table('customers')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // 初期データ用意（列名をキーとする連想配列）
        $customers=[
            ['id'=>1,
            'name'=>'白石信治	',
            'birtday'=> '1954-04-17',
            'gender'=> 0,
            'height'=> 150.2],
            ['id'=>2,
            'name'=>'坂上幸二',
            'birthday'=> '1954-07-02',
            'gender'=> 1,
            'height'=> 175.4],
            ['id'=>3,
            'name'=>'細井眞幸',
            'birthday'=> '1950-09-27',
            'gender'=> 0,
            'height'=> 153],
            ['id'=>4,
            'name'=>'平井明美',
            'birthday'=> '1951-02-20',
            'gender'=> 0,
            'height'=> 168.2],
            ['id'=>5,
            'name'=>'竹下白亜	',
            'birthday'=> '1953-09-13',
            'gender'=> 1,
            'height'=> 167.4],
            ['id'=>6,
            'name'=>'立川信治	',
            'birthday'=> '1944-10-12',
            'gender'=> 0,
            'height'=> 151.2],
            ['id'=>7,
            'name'=>'石橋真由子	',
            'birthday'=> '1944-01-02',
            'gender'=> 1,
            'height'=> 170.2],
            ['id'=>8,
            'name'=>'澤田栄太郎	',
            'birthday'=> '1955-03-03',
            'gender'=> 0,
            'height'=> 155.9],
            ['id'=>9,
            'name'=>'内海昌子	',
            'birtday'=> '1954-10-14',
            'gender'=> 1,
            'height'=> 155],
            ['id'=>10,
            'name'=>'三田章夫	',
            'birtday'=> '1955-04-18',
            'gender'=> 0,
            'height'=> 150.1],
            ['id'=>11,
            'name'=>'矢口伍朗	',
            'birtday'=> '1963-07-25',
            'gender'=> 0,
            'height'=> 170.2],
            ['id'=>12,
            'name'=>'河本春吉	',
            'birtday'=> '1971-01-03',
            'gender'=> 1,
            'height'=> 151],
            ['id'=>13,
            'name'=>'大熊弓子	',
            'birtday'=> '1955-06-04',
            'gender'=> 0,
            'height'=> 167.3],
            ['id'=>14,
            'name'=>'永井正勝	',
            'birtday'=> '1962-10-20',
            'gender'=> 1,
            'height'=> 150.2],


            ];

            foreach($customers as $customer) {
                \App\Models\Customer::create($customer);

    }
 */
}
