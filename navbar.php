<header>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="{{ base_url }}" class="brand-logo center"><img alt="Logo" src="{{theme_url}}/img/logo.jpg"></a>
        <ul class="right hide-on-med-and-down">
          {% for page in pages %}
          <li><a href="{{ page.url }}">{{ page.title }}</a></li>
          {% endfor %}
        </ul>
      </div>
    </nav>
  </div>
</header>
