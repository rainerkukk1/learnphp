<?php include __DIR__ . '/partials/header.php' ?>
<div class="container">
    <div class="columns">
        <?php foreach ($posts as $post) : ?>
            <div class="column is-3">
                <div class="card mb-3">
                    <header class="card-header">
                        <p class="card-header-title">
                            <?= $post->title ?>
                        </p>

                    </header>
                    <div class="card-content">
                        <div class="content">
                            <?= $post->body ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include __DIR__ . '/partials/footer.php' ?>