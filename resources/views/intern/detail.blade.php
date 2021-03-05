@extends('app/app')
@section('webTitle', 'Grow Jobs - Detail Magang')
@section('webContent')
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="{{ asset('images/loading.gif')}}" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content passion passion-var" id="main-wrap">
      <div class="main-wrap" id="detail-movie">
        <div class="sidenav mobile-nav" id="slide-menu">
          <div class="menu">
            <ul class="collection">
              <li class="collection-item" style="animation-duration: 0.25s"><a class="sidenav-close waves-effect menu-list" href="#promotions">promotions</a></li>
              <li class="collection-item" style="animation-duration: 0.5s"><a class="sidenav-close waves-effect menu-list" href="#featured">featured</a></li>
              <li class="collection-item" style="animation-duration: 0.75s"><a class="sidenav-close waves-effect menu-list" href="#top">top categories</a></li>
              <li class="collection-item" style="animation-duration: 1s"><a class="sidenav-close waves-effect menu-list" href="#all">all categories</a></li>
              <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="#pricing">pricing</a></li>
            </ul>
            <hr class="divider-sidebar">
            <ul class="collection">
              <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="login.html">login</a></li>
              <li class="collection-item" style="animation-duration: 1.25s"><a class="sidenav-close waves-effect menu-list" href="register.html">register</a></li>
            </ul>
          </div>
        </div>
        <header class="app-bar header invert" id="header">
          <div class="container fixed-width-lg-up">
            <div class="header-content">
              <nav class="nav-logo nav-menu invert">
                <button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-md-down" id="mobile_menu" type="button">
                  <span class="hamburger-box"><span class="bar hamburger-inner"></span></span>
                </button>
                <div class="logo">
                  <a href="index.html"><img src="{{ asset('images/movie-logo.png')}}" alt="logo" /></a>
                </div>
                <div>
                  <div class="scrollactive-nav show-lg-up">
                    <ul>
                      <li class="d-none"><a href="#banner"></a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="/">Home</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="##promotions">Internship</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="index.html#top">Job Vacancies</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="index.html#all">all categories</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="index.html#pricing">pricing</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
              <a class="mr-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
              <div class="hidden-md-down"><span class="divider"></span></div>
              <nav class="nav-menu nav-auth">
                <div class="hidden-xs-down">
                  <p class="namaUser mt-3">Selamat Datang, {{ Auth::user()->name }}</p>
              </div>
                <div class="menu-setting">
                  <div class="setting">
                    <button class="btn-icon waves-effect btn-small m-2 dropdown-trigger" data-target="dropdown_config" type="button" data-align="left">
                      <i class="icon material-icons invert" id="setting_icon">settings</i>
                    </button>
                    <div class="dropdown-content" id="dropdown_config">
                      <ul class="collection with-header">
                        <li class="collection-header">theme mode</li>
                        <li class="collection-item no-hover pl-4">
                          <div class="flex-menu">
                            <div class="switch">
                              <label>light<input id="theme_switcher" type="checkbox"><span class="lever"></span>dark</label>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="dropdown-divider"></div>
                      <ul class="collection with-header lang-menu" id="lang_menu">
                        <li class="collection-header">language</li>
                        <li class="collection-item lang-list waves-effect avatar">
                          <a data-lang="ar" href="#">
                            <div class="flag circle"><i class="ar"></i></div>
                            <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿العربيّة</span>
                          </a>
                        </li>
                        <li class="collection-item lang-list waves-effect avatar">
                          <a data-lang="de" href="#">
                            <div class="flag circle"><i class="de"></i></div>
                            <span class="content lang-opt text-truncate">Deutsch</span>
                          </a>
                        </li>
                        <li class="collection-item lang-list waves-effect avatar">
                          <a data-lang="en" href="#">
                            <div class="flag circle"><i class="en"></i></div>
                            <span class="content lang-opt text-truncate">English</span>
                          </a>
                        </li>
                        <li class="collection-item lang-list waves-effect avatar">
                          <a data-lang="id" href="#">
                            <div class="flag circle"><i class="id"></i></div>
                            <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿Bahasa Indonesia</span>
                          </a>
                        </li>
                        <li class="collection-item lang-list waves-effect avatar">
                          <a data-lang="pt" href="#">
                            <div class="flag circle"><i class="pt"></i></div>
                            <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿Português</span>
                          </a>
                        </li>
                        <li class="collection-item lang-list waves-effect avatar">
                          <a data-lang="zh" href="#">
                            <div class="flag circle"><i class="zh"></i></div>
                            <span class="content lang-opt text-truncate">简体中文</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </header>
        <div class="bg-movie"><img src="{{ asset('images/intern/videographer.jfif' )}}" alt="poster" /></div>
        <main class="container-wrap">
          <div class="row justify-content-center">
            <div class="col-sm-5 col-lg-5 pa-6 order-sm-last">
              <div class="image ml-5">
                <div class="imgShadow ml-3"></div>
                <img src="{{ asset('images/intern/videographer.jfif')}}" alt="movie" class="imgDetailIntern"/>
                </a>
              </div>
            </div>
            <div class="col-lg-5 col-sm-7 pa-6 order-sm-first">
              <div class="text"><span class="use-text-subtitle2">Lowongan Magang</span>
                <h4 class="use-text-title2"> Full-stack Developer</h4>
                <div class="property">
                  <div class="star">
                    <i class="material-icons star-icon" title="1">star</i>

                    <i class="material-icons star-icon" title="2">star</i>

                    <i class="material-icons star-icon" title="3">star</i>

                    <i class="material-icons star-icon" title="4">star</i>

                    <i class="material-icons star-icon" title="5">star</i>
                  </div><p class="ml-3">5.0</p><span class="divider"></span>Stars Group
                </div>
                <article class="desc">
                  <p class="use-text-paragraph text-justify">PT Stars Group, which is located in the center of Jakarta, 
                    is here to provide online sales services consisting of 
                    well-known brands such as Gucci, Rolex, Hermes. etc.
                    
                    The company certainly has many active users who 
                    frequently use PT Stars Group's application services. 
                    Then the company provides satisfying service to its 
                    employees. </p>
                </article>
                <div class="btn-area">
                  <a class="btn-flat secondary waves-effect mr-3" href="#">Profile Company</a>
                  <a class="btn primary waves-effect" href="#">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="3000">
          <div class="row justify-content-center mt-5">
            <div class="col-lg-10 col-md-12 mt-5">
              <div class="card about">
                <div class="row">
                  <div class="col-md-7">
                    <h4 class="use-text-subtitle mb-3">Requirements</h4>
                    <p class="use-text-paragraph">1. Age maximum 35 years old</p>
                    <p class="use-text-paragraph text-justify">2. Proficient in using front-end frameworks such as javascript frameworks and proficient at using back-end frameworks</p>
                    <p class="use-text-paragraph">3. Able to work as a team</p>
                    <p class="use-text-paragraph">4. Graduates of S1 information systems or informatics systems</p>
                    <p class="use-text-paragraph">5. Have at least one year experience in this field</p>
                    <p class="use-text-paragraph">6. Willing to work full time</p>

                    <div class="btn-area-detail mt-10">
                      <a class="btn-flat secondary waves-effect"><i class="ion-android-share-alt"> </i>share</a>
                      <a class="btn-flat secondary waves-effect"><i class="ion-ios-star"> </i>rate this</a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="person">
                      <h4 class="use-text-subtitle mb-3">Job Details</h4>
                      <h6 class="title-person"> Industry </h5>
                        <p>Information technology and services</p>
                      <h6 class="title-person">Type of Work</h6>
                      <p>Full Time</p>
                      <h6 class="title-person">Job Function</h6>
                      <p>Business Development and Information Technology</p>
                      <h6 class="title-person">Salary</h6>
                      <p>Rp.-</p>
                      <h6 class="title-person">Length of Internship</h6>
                      <p>3 Months</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </main>
        <footer class="footer invert">
          <div class="container">
            <div class="row">
              <div class="col-md-3 pa-4">
                <div class="logo">
                  <img src="{{ asset('images/movie-logo.png')}}" alt="logo" />
                  <h6 class="title">Grow Jobs</h6>
                </div>
                <p class="body-2 show-md-up text-center">&copy; Devlife Company 2021</p>
              </div>
              <div class="col-md-6 py-0 ps-6 pe-0">
                <ul class="show-sm-down collapsible">
                  <li class="accordion-content">
                    <div class="collapsible-header">
                      <h6 class="title mb-4">Company</h6>
                      <i class="material-icons right arrow">expand_more</i>
                    </div>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#history">History</a></li>
                        <li><a href="#contact-us">Contact us</a></li>
                        <li><a href="#locations">Locations</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="accordion-content">
                    <div class="collapsible-header">
                      <h6 class="title mb-4">Resources</h6>
                      <i class="material-icons right arrow">expand_more</i>
                    </div>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#resource">Resource</a></li>
                        <li><a href="#resource-name">Resource name</a></li>
                        <li><a href="#another-resource">Another resource</a></li>
                        <li><a href="#final-resource">Final resource</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="accordion-content">
                    <div class="collapsible-header">
                      <h6 class="title mb-4">Legal</h6>
                      <i class="material-icons right arrow">expand_more</i>
                    </div>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#privacy-policy">Privacy policy</a></li>
                        <li><a href="#terms-of-use">Terms of use</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
                <div class="row show-md-up justify-content-evenly">
                  <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                    <h6 class="title-nav mb-4">Company</h6>
                    <ul>
                      <li><a href="#team">Team</a></li>
                      <li><a href="#history">History</a></li>
                      <li><a href="#contact-us">Contact us</a></li>
                      <li><a href="#locations">Locations</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                    <h6 class="title-nav mb-4">Resources</h6>
                    <ul>
                      <li><a href="#resource">Resource</a></li>
                      <li><a href="#resource-name">Resource name</a></li>
                      <li><a href="#another-resource">Another resource</a></li>
                      <li><a href="#final-resource">Final resource</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                    <h6 class="title-nav mb-4">Legal</h6>
                    <ul>
                      <li><a href="#privacy-policy">Privacy policy</a></li>
                      <li><a href="#terms-of-use">Terms of use</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pe-4 ps-0">
                <div class="socmed">
                  <a class="btn-icon waves-effect"><span class="ion-social-facebook icon"></span></a>
                  <a class="btn-icon waves-effect"><span class="ion-social-twitter icon"></span></a>
                  <a class="btn-icon waves-effect"><span class="ion-social-instagram icon"></span></a>
                  <a class="btn-icon waves-effect"><span class="ion-social-linkedin icon"></span></a>
                </div>
                <div class="select-lang select-outlined">
                  <select class="select" id="lang_select">
                    <option value="ar">󠁥󠁮󠁧󠁿العربيّة</option>
                    <option value="de">Deutsch</option>
                    <option value="en" selected>English</option>
                    <option value="id">󠁥󠁮󠁧󠁿Bahasa Indonesia</option>
                    <option value="pt">󠁥󠁮󠁧󠁿Português</option>
                    <option value="zh">简体中文</option>
                  </select>
                </div>
              </div>
            </div>
            <p class="body-2 text-center show-sm-down">&copy; Devlife Company 2021</p>
          </div>
        </footer>
      </div>
    </div>
  </div>
  @endsection