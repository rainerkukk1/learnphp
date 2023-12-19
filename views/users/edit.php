<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="text" placeholder="Email" id="email" name="email" value="<?=$user->email?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input class="input" type="text" placeholder="Password" id="password" name="password" value="<?=$user->password?>">
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Edit" class="button is-primary">
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>
