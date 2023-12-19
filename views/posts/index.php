<?php include __DIR__ . '/../partials/header.php' ?> 
<div class="container">
    <a href="/admin/posts/create" class="button is-primary">Add Post</a>
    <table class="table is-fullwidth is-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <td><?=$post->id?></td>
                    <td><?=$post->title?></td>
                    <td>
                        <div class="buttons has-addons">
                            <a href="/admin/posts/show?id=<?=$post->id?>" class="button is-info">View</a>
                            <a href="/admin/posts/edit?id=<?=$post->id?>" class="button is-warning">Edit</a>
                            <a href="/admin/posts/delete?id=<?=$post->id?>" class="button is-danger" href="/admin/posts/delete?id=<?=$post->id?>">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?> 