<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="/">Brownies Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="right navbar-right " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title === "best-sellers") ? 'active' : '' }}" href="/best-sellers">best-sellers</a>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>