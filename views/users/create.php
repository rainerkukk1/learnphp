<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input 
                class="input"
                type="email"
                placeholder="Email"
                id="email"
                name="email"
                autocomplete="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input 
                class="input"
                type="password"
                id="password"
                name="password"
                autocomplete="new-password">
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Create" class="button is-primary">
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>