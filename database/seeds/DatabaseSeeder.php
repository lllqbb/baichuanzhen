<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //用于取消批量赋值白名单、黑名单属性校验

        Model::unguard();
        $this->call('TagsTableSeeder');
        $this->call('PostsTableSeeder');
//Model::reguard() 用于恢复校验
        Model::reguard();
    }
}
