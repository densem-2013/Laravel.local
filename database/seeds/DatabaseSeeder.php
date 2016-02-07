<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('PostsSeeder');
	}

}

class PostsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('Posts')->delete();
		Post::create([
			'title'=>'First Post',
			'slug'=>'first-post',
			'excerpt'=>'<b>First Post body</b>',
			'content'=>'Content First Post Body',
			'published'=>true,
			//'published_at'=>DB::rav('NOW()'), // for datetime
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')
		]);

		Post::create([
			'title'=>'Second Post',
			'slug'=>'second-post',
			'excerpt'=>'<b>Second Post body</b>',
			'content'=>'Content Second Post Body',
			'published'=>false,
			//'published_at'=>DB::rav('NOW()'), // for datetime
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')
		]);

		Post::create([
			'title'=>'Third Post',
			'slug'=>'third-post',
			'excerpt'=>'<b>Third Post body</b>',
			'content'=>'Content Third Post Body',
			'published'=>false,
			//'published_at'=>DB::rav('NOW()'), // for datetime
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')
		]);
		Post::create([
			'title'=>'Forth Post',
			'slug'=>'forth-post',
			'excerpt'=>'<b>Forth Post body</b>',
			'content'=>'Content Forth Post Body',
			'published'=>false,
			//'published_at'=>DB::rav('NOW()'), // for datetime
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')
		]);
		Post::create([
			'title'=>'Fifth Post',
			'slug'=>'fifth-post',
			'excerpt'=>'<b>Fifth Post body</b>',
			'content'=>'Content Fifth Post Body',
			'published'=>false,
			//'published_at'=>DB::rav('NOW()'), // for datetime
			'published_at'=>DB::raw('CURRENT_TIMESTAMP')
		]);
	}

}
