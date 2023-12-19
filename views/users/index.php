<?php include __DIR__ . '/../partials/header.php' ?> 
<div class="container">
    <a href="/admin/users/create" class="button is-primary">Add User</a>
    <table class="table is-fullwidth is-striped">
        <thead>
            <th>Id</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->email?></td>
                    <td>
                        <div class="buttons has-addons">
                            <a href="/admin/users/show?id=<?=$user->id?>" class="button is-info">View</a>
                            <a href="/admin/users/edit?id=<?=$user->id?>" class="button is-warning">Edit</a>
                            <a href="/admin/users/delete?id=<?=$user->id?>" class="button is-danger" href="/admin/users/delete?id=<?=$user->id?>">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?> 