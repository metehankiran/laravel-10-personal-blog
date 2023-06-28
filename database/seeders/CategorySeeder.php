<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rootCategory = Category::create(['title' => 'Root Category', 'slug' => 'root-category']);

        $mainCategory1 = Category::create(['title' => 'PHP', 'slug' => 'php', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis a earum fuga facere veniam, adipisci totam molestiae, explicabo praesentium, velit quidem in mollitia sed aliquam fugit reprehenderit debitis error maxime!', 'parent_id' => $rootCategory->id]);
        $mainCategory2 = Category::create(['title' => 'JavaScript', 'slug' => 'javascript', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis a earum fuga facere veniam, adipisci totam molestiae, explicabo praesentium, velit quidem in mollitia sed aliquam fugit reprehenderit debitis error maxime!', 'parent_id' => $rootCategory->id]);

        $childCategory1 = Category::create(['title' => 'Laravel', 'slug' => 'laravel', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis a earum fuga facere veniam, adipisci totam molestiae, explicabo praesentium, velit quidem in mollitia sed aliquam fugit reprehenderit debitis error maxime!', 'parent_id' => $mainCategory1->id]);
        $childCategory2 = Category::create(['title' => 'Symfony', 'slug' => 'symfony', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis a earum fuga facere veniam, adipisci totam molestiae, explicabo praesentium, velit quidem in mollitia sed aliquam fugit reprehenderit debitis error maxime!', 'parent_id' => $mainCategory1->id]);
        $childCategory3 = Category::create(['title' => 'Vue.js', 'slug' => 'vue-js', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis a earum fuga facere veniam, adipisci totam molestiae, explicabo praesentium, velit quidem in mollitia sed aliquam fugit reprehenderit debitis error maxime!', 'parent_id' => $mainCategory2->id]);
        $childCategory3 = Category::create(['title' => 'React.js', 'slug' => 'react-js', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis a earum fuga facere veniam, adipisci totam molestiae, explicabo praesentium, velit quidem in mollitia sed aliquam fugit reprehenderit debitis error maxime!', 'parent_id' => $mainCategory2->id]);
        $childCategory3 = Category::create(['title' => 'Quasar.js', 'slug' => 'quasar-js', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis a earum fuga facere veniam, adipisci totam molestiae, explicabo praesentium, velit quidem in mollitia sed aliquam fugit reprehenderit debitis error maxime!', 'parent_id' => $mainCategory2->id]);
    }
}
