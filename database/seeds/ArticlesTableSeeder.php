<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Images are already in storage
         $author1 = User::where('email','adminAuthor@taskjfd.test')->first();
         $author2 = User::where('email','author1@taskjfd.test')->first();
         $author3 = User::where('email','author2@taskjfd.test')->first();

         Article::create([
             'title' => 'Lorem ipsum',
             'content' => '<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1><p><b>Vestibulum tempor</b> ac elit ut <u>fermentum</u>. Sed et arcu faucibus, convallis nisi tempus, efficitur ipsum. Ut mattis feugiat nisl eget venenatis. Aliquam eu ornare felis. In auctor eu justo et rhoncus. Donec risus enim, pretium quis maximus eget, pretium sed nisi. Vivamus iaculis lectus non dolor varius rutrum. Morbi bibendum cursus nisl in feugiat. Nulla id congue dui. Praesent ut lacus eu purus consectetur iaculis. Ut vitae condimentum nunc, sit amet porttitor lorem. Pellentesque luctus nibh sit amet leo interdum luctus. Proin quis feugiat augue. Sed massa augue, bibendum in aliquam in, condimentum et felis. Aenean in nisl feugiat arcu volutpat rhoncus ac et velit. Maecenas vehicula erat et ipsum consequat vestibulum.</p><p><br></p><h3>Etiam faucibus viverra dolor sed mollis. </h3><p>Phasellus et tellus vitae mauris mollis iaculis ut cursus magna. Duis eget convallis velit. Aenean feugiat tortor in nunc cursus, eu congue risus laoreet. Aliquam vitae mi eget enim consectetur feugiat in nec justo. Sed efficitur neque scelerisque risus lobortis, in faucibus turpis consequat. Suspendisse massa libero, finibus eget ipsum quis, vestibulum accumsan est. </p><ul><li>Nullam ac accumsan eros, vitae tempus ex. </li><li>Donec nec gravida turpis, nec consequat mauris. </li><li>Sed molestie ligula et ornare molestie. </li><li>Suspendisse eget arcu vitae tortor condimentum ultrices. </li><li>Fusce vel vehicula purus. In hac habitasse platea dictumst.</li></ul><p><br></p>',
             'user_id' => $author1->id,
             'image' => 'uploads/articles/article_1.png',
         ]);

         Article::create([
             'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
             'content' => '<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1><p><b>Vestibulum tempor</b> ac elit ut <u>fermentum</u>. Sed et arcu faucibus, convallis nisi tempus, efficitur ipsum. Ut mattis feugiat nisl eget venenatis. Aliquam eu ornare felis. In auctor eu justo et rhoncus. Donec risus enim, pretium quis maximus eget, pretium sed nisi. Vivamus iaculis lectus non dolor varius rutrum. Morbi bibendum cursus nisl in feugiat. Nulla id congue dui. Praesent ut lacus eu purus consectetur iaculis. Ut vitae condimentum nunc, sit amet porttitor lorem. Pellentesque luctus nibh sit amet leo interdum luctus. Proin quis feugiat augue. Sed massa augue, bibendum in aliquam in, condimentum et felis. Aenean in nisl feugiat arcu volutpat rhoncus ac et velit. Maecenas vehicula erat et ipsum consequat vestibulum.</p><p><br></p><h3>Etiam faucibus viverra dolor sed mollis. </h3><p>Phasellus et tellus vitae mauris mollis iaculis ut cursus magna. Duis eget convallis velit. Aenean feugiat tortor in nunc cursus, eu congue risus laoreet. Aliquam vitae mi eget enim consectetur feugiat in nec justo. Sed efficitur neque scelerisque risus lobortis, in faucibus turpis consequat. Suspendisse massa libero, finibus eget ipsum quis, vestibulum accumsan est. </p><ul><li>Nullam ac accumsan eros, vitae tempus ex. </li><li>Donec nec gravida turpis, nec consequat mauris. </li><li>Sed molestie ligula et ornare molestie. </li><li>Suspendisse eget arcu vitae tortor condimentum ultrices. </li><li>Fusce vel vehicula purus. In hac habitasse platea dictumst.</li></ul><p><br></p>',
             'user_id' => $author2->id,
             'image' => 'uploads/articles/article_1.png',
         ]);

         Article::create([
             'title' => 'Lorem ipsum',
             'content' => '<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1><p><b>Vestibulum tempor</b> ac elit ut <u>fermentum</u>. Sed et arcu faucibus, convallis nisi tempus, efficitur ipsum. Ut mattis feugiat nisl eget venenatis. Aliquam eu ornare felis. In auctor eu justo et rhoncus. Donec risus enim, pretium quis maximus eget, pretium sed nisi. Vivamus iaculis lectus non dolor varius rutrum. Morbi bibendum cursus nisl in feugiat. Nulla id congue dui. Praesent ut lacus eu purus consectetur iaculis. Ut vitae condimentum nunc, sit amet porttitor lorem. Pellentesque luctus nibh sit amet leo interdum luctus. Proin quis feugiat augue. Sed massa augue, bibendum in aliquam in, condimentum et felis. Aenean in nisl feugiat arcu volutpat rhoncus ac et velit. Maecenas vehicula erat et ipsum consequat vestibulum.</p><p><br></p><h3>Etiam faucibus viverra dolor sed mollis. </h3><p>Phasellus et tellus vitae mauris mollis iaculis ut cursus magna. Duis eget convallis velit. Aenean feugiat tortor in nunc cursus, eu congue risus laoreet. Aliquam vitae mi eget enim consectetur feugiat in nec justo. Sed efficitur neque scelerisque risus lobortis, in faucibus turpis consequat. Suspendisse massa libero, finibus eget ipsum quis, vestibulum accumsan est. </p><ul><li>Nullam ac accumsan eros, vitae tempus ex. </li><li>Donec nec gravida turpis, nec consequat mauris. </li><li>Sed molestie ligula et ornare molestie. </li><li>Suspendisse eget arcu vitae tortor condimentum ultrices. </li><li>Fusce vel vehicula purus. In hac habitasse platea dictumst.</li></ul><p><br></p>',
             'user_id' => $author3->id,
             'image' => 'uploads/articles/article_1.png',
         ]);

         Article::create([
             'title' => 'Lorem ipsum',
             'content' => '<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1><p><b>Vestibulum tempor</b> ac elit ut <u>fermentum</u>. Sed et arcu faucibus, convallis nisi tempus, efficitur ipsum. Ut mattis feugiat nisl eget venenatis. Aliquam eu ornare felis. In auctor eu justo et rhoncus. Donec risus enim, pretium quis maximus eget, pretium sed nisi. Vivamus iaculis lectus non dolor varius rutrum. Morbi bibendum cursus nisl in feugiat. Nulla id congue dui. Praesent ut lacus eu purus consectetur iaculis. Ut vitae condimentum nunc, sit amet porttitor lorem. Pellentesque luctus nibh sit amet leo interdum luctus. Proin quis feugiat augue. Sed massa augue, bibendum in aliquam in, condimentum et felis. Aenean in nisl feugiat arcu volutpat rhoncus ac et velit. Maecenas vehicula erat et ipsum consequat vestibulum.</p><p><br></p><h3>Etiam faucibus viverra dolor sed mollis. </h3><p>Phasellus et tellus vitae mauris mollis iaculis ut cursus magna. Duis eget convallis velit. Aenean feugiat tortor in nunc cursus, eu congue risus laoreet. Aliquam vitae mi eget enim consectetur feugiat in nec justo. Sed efficitur neque scelerisque risus lobortis, in faucibus turpis consequat. Suspendisse massa libero, finibus eget ipsum quis, vestibulum accumsan est. </p><ul><li>Nullam ac accumsan eros, vitae tempus ex. </li><li>Donec nec gravida turpis, nec consequat mauris. </li><li>Sed molestie ligula et ornare molestie. </li><li>Suspendisse eget arcu vitae tortor condimentum ultrices. </li><li>Fusce vel vehicula purus. In hac habitasse platea dictumst.</li></ul><p><br></p>',
             'user_id' => $author2->id,
             'image' => 'uploads/articles/article_1.png',
         ]);

         Article::create([
             'title' => 'Lorem ipsum',
             'content' => '<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1><p><b>Vestibulum tempor</b> ac elit ut <u>fermentum</u>. Sed et arcu faucibus, convallis nisi tempus, efficitur ipsum. Ut mattis feugiat nisl eget venenatis. Aliquam eu ornare felis. In auctor eu justo et rhoncus. Donec risus enim, pretium quis maximus eget, pretium sed nisi. Vivamus iaculis lectus non dolor varius rutrum. Morbi bibendum cursus nisl in feugiat. Nulla id congue dui. Praesent ut lacus eu purus consectetur iaculis. Ut vitae condimentum nunc, sit amet porttitor lorem. Pellentesque luctus nibh sit amet leo interdum luctus. Proin quis feugiat augue. Sed massa augue, bibendum in aliquam in, condimentum et felis. Aenean in nisl feugiat arcu volutpat rhoncus ac et velit. Maecenas vehicula erat et ipsum consequat vestibulum.</p><p><br></p><h3>Etiam faucibus viverra dolor sed mollis. </h3><p>Phasellus et tellus vitae mauris mollis iaculis ut cursus magna. Duis eget convallis velit. Aenean feugiat tortor in nunc cursus, eu congue risus laoreet. Aliquam vitae mi eget enim consectetur feugiat in nec justo. Sed efficitur neque scelerisque risus lobortis, in faucibus turpis consequat. Suspendisse massa libero, finibus eget ipsum quis, vestibulum accumsan est. </p><ul><li>Nullam ac accumsan eros, vitae tempus ex. </li><li>Donec nec gravida turpis, nec consequat mauris. </li><li>Sed molestie ligula et ornare molestie. </li><li>Suspendisse eget arcu vitae tortor condimentum ultrices. </li><li>Fusce vel vehicula purus. In hac habitasse platea dictumst.</li></ul><p><br></p>',
             'user_id' => $author3->id,
             'image' => 'uploads/articles/article_1.png',
         ]);
    }
}
