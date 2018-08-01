<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(contentSeeder::class);
        $this->call(subCategorySeeder::class);
        $this->call(categorySeeder::class);
    }


}


class contentSeeder extends Seeder{
  public function run(){
    DB::table('content') -> insert([
      ['title' => 'Chú Bé Chăn Cừu','content' => 'jk just du it','is_trend' => '1','content_date'=>'1998-01-02','img' => 'images/anh1','alias' => 'chubechancuu','views'=>'200','user_id' => '1','sub_category_id'=>'1'],
      ['title' => 'Bác Tài Xế','content' => 'awwwwwwwwwwwwww','is_trend' => '0','content_date'=>'1998-01-02','img' => 'images/anh2','alias' => 'bactaixe','views'=>'2','user_id' => '2','sub_category_id'=>'1'],
      ['title' => 'Bác Tài Xế','content' => 'awwwwwwwwwwwwww','is_trend' => '0','content_date'=>'1998-01-02','img' => 'images/anh2','alias' => 'bactaixe','views'=>'2','user_id' => '2','sub_category_id'=>'2'],
      ['title' => 'Bác Tài Xế','content' => 'awwwwwwwwwwwwww','is_trend' => '0','content_date'=>'1998-01-02','img' => 'images/anh2','alias' => 'bactaixe','views'=>'2','user_id' => '2','sub_category_id'=>'3'],
    ]);
  }
}

class subCategorySeeder extends Seeder{
  public function run(){
    DB::table('sub_content_category') -> insert([
      ['name'=>'Báo Hành Động','alias'=>'bao_hanh_dong','category_id'=>'1'],
      ['name'=>'Báo Porn ?? :D ??','alias'=>'bao_porn','category_id'=>'2'],
      ['name'=>'Báo Ge','alias'=>'bao_ge','category_id'=>'3'],
    ]);
  }
}

class categorySeeder extends Seeder{
  public function run(){
    DB::table('content_category') -> insert([
      ['name'=>'Báo','alias'=>'bao'],
      ['name'=>'Tap Chi','alias'=>'tap_chi'],
      ['name'=>'Pim','alias'=>'pim'],
    ]);
  }
}
