<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(5)->create();
        post::factory(5)->create();
            // User::create(
            // [
            // 'name' => 'Fahri Dika',
            // 'email' => 'gunaon01@gail.com',
            // 'password' => bcrypt('1234')
            // ]);

            // User::create(
            //     [
            //     'name' => 'Fany',
            //     'email' => 'twinfa@gmail.com',
            //     'password' => bcrypt('1234')
            //     ]);

            Category::create(
            [
            'name' => 'Peradaban Islam',
            'slug' => 'Peradaban-islam'
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);

            // Post::create([
            // 'user_id' => 1,
            // 'title' => 'Judul Pertama',
            // 'category_id' => 1,
            // 'excerpt' => 'Lorem ipsum pertama',
            // 'slug' => 'judul-pertama',
            // 'body' =>  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quidem nostrum id perspiciatis doloribus officiis optio maxime dolorem eius debitis commodi incidunt accusantium quod repellat earum dolorum ab in provident impedit quasi, molestias vel. Sint pariatur sequi aliquid inventore excepturi? Ullam natus, soluta excepturi vero corrupti quisquam iste quas id, sequi quia nisi. Tenetur laudantium dicta cumque, molestias dolorum omnis. Quisquam voluptatem, ducimus cupiditate, sit repellendus sapiente rem labore voluptas sed optio eos molestias totam facere excepturi, alias itaque quaerat aperiam assumenda placeat dignissimos laboriosam laudantium. Quia nulla aliquam aperiam perspiciatis aut, asperiores quis incidunt autem iusto saepe. Harum, enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quidem nostrum id perspiciatis doloribus officiis optio maxime dolorem eius debitis commodi incidunt accusantium quod repellat earum dolorum ab in provident impedit quasi, molestias vel. Sint pariatur sequi aliquid inventore excepturi? Ullam natus, soluta excepturi vero corrupti quisquam iste quas id, sequi quia nisi. Tenetur laudantium dicta cumque, molestias dolorum omnis. Quisquam voluptatem, ducimus cupiditate, sit repellendus sapiente rem labore voluptas sed optio eos molestias totam facere excepturi, alias itaque quaerat aperiam assumenda placeat dignissimos laboriosam laudantium. Quia nulla aliquam aperiam perspiciatis aut, asperiores quis incidunt autem iusto saepe. Harum, enim.</p>'

            // ]);

            // Post::create([
            // 'user_id' => 2,
            // 'title' => 'Judul Kedua',
            // 'category_id' => 2,
            // 'excerpt' => 'Lorem ipsum Kedua',
            // 'slug' => 'judul-kedua',
            // 'body' =>  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quidem nostrum id perspiciatis doloribus officiis optio maxime dolorem eius debitis commodi incidunt accusantium quod repellat earum dolorum ab in provident impedit quasi, molestias vel. Sint pariatur sequi aliquid inventore excepturi? Ullam natus, soluta excepturi vero corrupti quisquam iste quas id, sequi quia nisi. Tenetur laudantium dicta cumque, molestias dolorum omnis. Quisquam voluptatem, ducimus cupiditate, sit repellendus sapiente rem labore voluptas sed optio eos molestias totam facere excepturi, alias itaque quaerat aperiam assumenda placeat dignissimos laboriosam laudantium. Quia nulla aliquam aperiam perspiciatis aut, asperiores quis incidunt autem iusto saepe. Harum, enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quidem nostrum id perspiciatis doloribus officiis optio maxime dolorem eius debitis commodi incidunt accusantium quod repellat earum dolorum ab in provident impedit quasi, molestias vel. Sint pariatur sequi aliquid inventore excepturi? Ullam natus, soluta excepturi vero corrupti quisquam iste quas id, sequi quia nisi. Tenetur laudantium dicta cumque, molestias dolorum omnis. Quisquam voluptatem, ducimus cupiditate, sit repellendus sapiente rem labore voluptas sed optio eos molestias totam facere excepturi, alias itaque quaerat aperiam assumenda placeat dignissimos laboriosam laudantium. Quia nulla aliquam aperiam perspiciatis aut, asperiores quis incidunt autem iusto saepe. Harum, enim.</p>'

            // ]);

    }
}
