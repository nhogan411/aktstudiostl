<header data-block-type="headers" class="banner mb-3">
  <div class="container">
    <a class="navbar-brand text-center w-100" href="{{ home_url('/') }}">
      {{ bloginfo('name') }}
    </a>

    <nav id="primary-nav" class="primary-nav navbar navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div id="navbarPrimary" class="navbar-collapse collapse">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location'  => 'primary_navigation', 
            'menu_class'      => 'nav mx-auto justify-content-end', 
            'container'       => 'false', 
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()]) !!}
        @endif
      </div>
    </nav>
  </div>
</header>

<section id="jumbotron" class="fdb-block fp-active" style="background-image: url(http://www.aktstudiostl.com/wp-content/uploads/2016/12/akt-header-1920x532.jpg);" data-block-type="contents" data-id="1">
  <div class="container">
    <div class="row text-left">
      <div class="col-12 col-sm-10 m-auto m-md-0 col-md-8 col-lg-6">
        <div class="fdb-box">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-8 text-center">
              <h1>Design. Build. Enjoy</h1>
              <p class="text-h3">AKT is a St. Louis based design studio, specializing in custom furniture and architectural precast concrete.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>