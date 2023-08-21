<article class="blog_article">
    <a title="<?= $post->title; ?>" href="<?= url("/blog/{$post->uri}"); ?>">
        <img title="<?= $post->title; ?>" alt="<?= $post->title; ?>" src="<?= image($post->cover, 600, 340) ?>"/>
    </a>
    <header>
        <p class="meta">Blog &bull; Por Robson V. Leite &bull; 22/12/18 23h23</p>
        <h2><a title="Post" href="<?= url("/blog/titulo-post"); ?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
        <p><a title="Post" href="<?= url("/blog/titulo-post"); ?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet autem
                cumque dolores eos, illo magni minus nam nulla pariatur, rem rerum tempora velit veritatis.</a></p>
    </header>
</article>