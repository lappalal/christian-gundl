<header>
  <nav>
    <div class="nav-wrapper">
      <a href="{{ base_url }}" class="brand-logo center"><img alt="Logo" src="{{theme_url}}/img/logo.jpg"></a>
      <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        {% for page in pages %}
        <li><a href="{{ page.url }}">{{ page.title }}</a></li>
        {% endfor %}
      </ul>
      <ul class="side-nav" id="mobile">
        {% for page in pages %}
        <li><a href="{{ page.url }}">{{ page.title }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </nav>
</header>
