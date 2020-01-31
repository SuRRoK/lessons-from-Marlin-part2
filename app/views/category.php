<?php
//d($posts);
$title = $posts[0]['category'];
$this->layout('default', ['title' => "Blog4all - $title"]) ?>

<h1 class="text-center"><?= $title ?></h1>
<div class="content">


    <div class="newposts">
        <?php foreach ($posts as $p) { ?>

            <hr>
            <div class="posts__content">

                <?php if ($p['image'] != '') { ?>
                    <div class="posts__content__picture">
                        <img src="/images/<?php echo $p['image'] ?> "
                             alt="<?php echo html_entity_decode($p['title']) ?>"
                             class="img-fluid img-thumbnail">
                    </div>
                <?php } else { ?>
                    <div class="nopicture_">

                    </div>
                <?php } ?>

                <div class="posts__content__main">
                    <div class="posts__content__main__title">
                        <h3><a href="/post?id=<?php echo $p['ID'] ?>"><?php echo html_entity_decode($p['title']) ?></a>
                            <h3>
                    </div>
                    <div class="posts__content__main__text">
                        <?php echo html_entity_decode($p['content']) ?>
                    </div>

                </div>

            </div>
            <div class="posts__content__main__bottom">
                <div class="posts__author"><?php echo "Author: " . $p['username'] ?></div>
                <div><?php echo "Category: " . $p['category'] ?></div>
            </div>


        <?php } ?>

    </div>
</div>

