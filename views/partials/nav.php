<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="/" class="navbar-item">
        Home
      </a>

      <a href="/about" class="navbar-item">
        About
      </a>
      <a href="/form" class="navbar-item">
        Form
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Admin
        </a>

        <div class="navbar-dropdown">
          <a href="/admin/posts" class="navbar-item">
            Posts
          </a>
          <a href="/admin/users" class="navbar-item">
            Users
          </a>

        </div>
      </div>
    </div>

    <div class="navbar-end">
      <?php if (auth()) : ?>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            <?= auth()->email ?>
          </a>

          <div class="navbar-dropdown">
            <a href="/logout" class="navbar-item">
              Logout
            </a>
          </div>
        </div>
      <?php else : ?>
        <div class="navbar-item">
          <div class="buttons">
            <a href="/register" class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a href="/login" class="button is-light">
              Log in
            </a>
          </div>
        </div>
      <?php endif ?>
    </div>
  </div>
</nav>