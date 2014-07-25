<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

//		$this->call('CategoryTableSeeder');
		$this->call('NewsTableSeeder');
	}
}


class CategoryTableSeeder extends Seeder {
    public function run()
    {
        DB::table('categories')->delete();
		NewsCategory::create(array(
    		'name'			=> 'Production',
    		'description'	=> 'Comment produire de l hydrogene',
    	));	
    }
}


class NewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('news')->delete();

        News::create(array(
        	'title'       => 'Mon premier article',
        	'description' => 'Lorem ipsum Dolor reprehenderit officia in deserunt deserunt aliquip id pariatur dolore esse aute est et reprehenderit veniam esse consequat ut dolor incididunt amet consectetur ut cillum minim sit adipisicing officia do mollit veniam id occaecat.',
        	'content'     => 'Lorem ipsum Nulla nostrud culpa amet quis in pariatur esse ad qui cupidatat dolore nostrud magna laborum enim culpa qui esse dolor voluptate enim reprehenderit amet fugiat aliqua consequat sed consectetur Duis nulla occaecat elit irure et nisi esse in amet officia minim dolore aute id magna esse eiusmod ad nostrud proident consequat aliqua exercitation nisi Ut Duis in quis ut mollit ad mollit sunt amet proident fugiat sed aute in dolor aliqua deserunt in reprehenderit dolor ut ut dolore consequat in anim dolor veniam irure est anim ea aliqua Excepteur sit enim in mollit dolor velit velit proident velit ad eiusmod dolor ullamco adipisicing tempor qui veniam velit exercitation sunt ea culpa consectetur mollit incididunt aute quis do eiusmod tempor aute elit amet in aliquip commodo quis sint adipisicing consectetur consectetur laborum ea exercitation proident cupidatat tempor elit cupidatat ullamco quis Excepteur nisi ea est deserunt sit non eiusmod esse irure in eiusmod Duis veniam dolore deserunt ut ut cillum do dolor esse ut ullamco aute sint in est quis.',
        	'seen'        => 0,
    		'category_id'   => 4
        ));

		for ( $i=0; $i<100; $i++ ) {

	        News::create(array(
	        	'title'       => 'Mon article #' . $i,
	        	'description' => str_random(20),
	        	'content'     => 'Lorem ipsum Nulla nostrud culpa amet quis in pariatur esse ad qui cupidatat dolore nostrud magna laborum enim culpa qui esse dolor voluptate enim reprehenderit amet fugiat aliqua consequat sed consectetur Duis nulla occaecat elit irure et nisi esse in amet officia minim dolore aute id magna esse eiusmod ad nostrud proident consequat aliqua exercitation nisi Ut Duis in quis ut mollit ad mollit sunt amet proident fugiat sed aute in dolor aliqua deserunt in reprehenderit dolor ut ut dolore consequat in anim dolor veniam irure est anim ea aliqua Excepteur sit enim in mollit dolor velit velit proident velit ad eiusmod dolor ullamco adipisicing tempor qui veniam velit exercitation sunt ea culpa consectetur mollit incididunt aute quis do eiusmod tempor aute elit amet in aliquip commodo quis sint adipisicing consectetur consectetur laborum ea exercitation proident cupidatat tempor elit cupidatat ullamco quis Excepteur nisi ea est deserunt sit non eiusmod esse irure in eiusmod Duis veniam dolore deserunt ut ut cillum do dolor esse ut ullamco aute sint in est quis.',
	        	'seen'        => 0,
    		'category_id'   => 4
	        ));

		}

    }

}