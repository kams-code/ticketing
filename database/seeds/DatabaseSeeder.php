<?php
use Illuminate\Database\Seeder;
use App\Article;
use App\Comment;
use App\People;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creates Articles with an Author and Comment
        // through relations & attribute Closures
        factory(Article::class, 5)
           ->create()
           ->each(function ($u) {
                $u->comments()->save(factory(Comment::class)->create());
            }
        );

        // Creates authors with no articles
        factory(People::class, 2)->create();

        // Creates Articles without Comments
        factory(Article::class, 3)->create();
    }
}
