@extends('app/app')
@section('webTitle', 'Grow Jobs - Home')
@section('webContent')
<div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="{{ asset('images/loading.gif')}}" alt="loading"></div>
<div class="m-application theme--light transition-page" id="app">
  <div class="loading"></div>
  <div class="m-content passion passion-var" id="main-wrap">
    <div>
      <div id="home"></div>
      <div class="main-wrap">
        <div class="sidenav mobile-nav" id="slide-menu">
          <div class="menu">
            <ul class="collection">
              <li class="collection-item" style="animation-duration: 0.25s"><a class="sidenav-close waves-effect menu-list" href="#promotions">Home</a></li>
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
        </div><!-- ##### HEADER #####-->
        <header class="app-bar header" id="header">
          <div class="container fixed-width-lg-up">
            <div class="header-content">
              <nav class="nav-logo nav-menu">
                <button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-md-down" id="mobile_menu" type="button">
                  <span class="hamburger-box"><span class="bar hamburger-inner"></span></span>
                </button>
                <div class="logo scrollnav">
                  <a href="#banner"><img src="{{ asset('images/movie-logo.png')}}" alt="logo" /></a>
                </div>
                <div>
                  <div class="scrollactive-nav show-lg-up scrollnav">
                    <ul>
                      <li class="d-none"><a href="#banner"></a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="#banner">Home</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="#magang">Internship</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="#loker">Job Vacancies</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="#all">Contact Us</a></li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="#pricing">News</a></li>
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
                      <i class="icon material-icons" id="setting_icon">settings</i>
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
        <!-- ##### END HEADER #####-->
        <main class="container-wrap">
          <!-- ##### BANNER #####-->
          <section id="banner">
            <div class="root">
              <div class="video">
                <div class="overlay"></div>
                <img class="show-md-down" src="{{ asset('images/banner.jfif')}}" alt="cover" />
                <img id="banner_cover" src="{{ asset('images/banner.jfif')}}" alt="cover" />
                <div class="show-lg-up" id="youtube"></div>
                <div class="caption">
                  <div class="container">
                    <div class="hidden-sm-down">
                      <button class="btn-icon btn-play waves-effect hide" id="btn_play">
                        <span class="hidden">watch</span>
                        <span class="hidden">trailer</span>
                        <i class="ion-ios-pause-outline pause"></i>
                        <i class="ion-arrow-right-b play"></i>
                      </button>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <p class="use-text-subtitle2">Created by Devlife Company</p>
                        <h2 class="use-text-title">Grow Jobs</h2>
                        <p class="use-text-subtitle2">Layanan Informasi Lowongan Kerja & Magang</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- ##### END BANNER #####-->
          <!-- ##### PROMOTION #####-->
          <section id="promotions">
            <section id="magang">
            <div class="root">
              <div class="slider-wrap">
                <div class="anim-slider">
                  <div class="slide slider-content anim-slide">
                    <section class="inner item">
                      <div class="inner-bg">
                        <div class="background">
                          <figure>
                            <img src="{{ asset('images/intern/intern.jpg')}}" alt="promotion" />
                          </figure>
                        </div>
                        <div class="row">
                          <div class="col-sm-7 pa-0">
                            <div class="text">
                              <h4><span class="use-text-subtitle2">Lowongan Magang</span>Full-stack Developer</h4>
                              <div class="property">
                                <div class="star">
                                  <i class="material-icons star-icon" title="1">star</i>

                                  <i class="material-icons star-icon" title="2">star</i>

                                  <i class="material-icons star-icon" title="3">star</i>

                                  <i class="material-icons star-icon" title="4">star</i>

                                  <i class="material-icons star-icon" title="5">star</i>
                                </div>

                                <p class="ml-3">5.0</p><span class="divider"></span> Stars Company 
                              </div>
                              <article class="desc">
                                <h6 class="use-text-paragraph">Kami menyediakan lowongan magang untuk posisi Full-stack Developer dengan sistem Work From Home.</h6>
                              </article>
                              <div class="btn-area">
                                <a class="btn-flat secondary waves-effect btnView" href="#">View Profile Company</a>
                                <a class="btn btn-Apply" href="#">Apply Now</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5 pa-0">
                            <div class="hidden-xs-down">
                              <div class="image">
                                <figure>
                                  <img src="{{ asset('images/intern/intern.jpg')}}" width="330px" height="440px" alt="promotion" />
                                </figure>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>

                  <div class="slide slider-content anim-slide">
                    <section class="inner item">
                      <div class="inner-bg">
                        <div class="background">
                          <figure>
                            <img src="{{ asset('images/intern/intern1.jpg')}}" height="360px" alt="promotion" />
                          </figure>
                        </div>
                        <div class="row">
                          <div class="col-sm-7 pa-0">
                            <div class="text">
                              <h4><span class="use-text-subtitle2">Lowongan Magang</span>Business Analysts</h4>
                              <div class="property">
                                <div class="star">
                                  <i class="material-icons star-icon" title="1">star</i>

                                  <i class="material-icons star-icon" title="2">star</i>

                                  <i class="material-icons star-icon" title="3">star</i>

                                  <i class="material-icons star-icon" title="4">star</i>

                                  <i class="material-icons star-icon" title="5">star</i>
                                </div>

                                <p class="ml-3">5.0</p><span class="divider"></span>Moon Coorporation
                              </div>
                              <article class="desc">
                                <h6 class="use-text-paragraph">Kami Moon Coorporation menyediakan lowongan magang untuk para siswa/mahasiswa untuk menjadi Business Analysts pada perusahaan kami. Jika kalian tertarik untuk menjadi bagian dari perusahaan kami, Silahkan kirimkan CV kalian</h6>
                              </article>
                              <div class="btn-area">
                                <a class="btn-flat secondary waves-effect btnView" href="#">View Profile Company</a>
                                <a class="btn btn-Apply" href="#">Apply Now</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5 pa-0">
                            <div class="hidden-xs-down">
                              <div class="image">
                                <figure>
                                  <img src="{{ asset('images/intern/intern1.jpg')}}" height="360px" alt="promotion" />
                                </figure>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="slide slider-content anim-slide">
                    <section class="inner item">
                      <div class="inner-bg">
                        <div class="background">
                          <figure>
                            <img src="{{ asset('images/intern/intern3.jpg')}}" height="360px" alt="promotion" />
                          </figure>
                        </div>
                        <div class="row">
                          <div class="col-sm-7 pa-0">
                            <div class="text">
                              <h4><span class="use-text-subtitle2">Lowongan Magang</span>UI UX Designer</h4>
                              <div class="property">
                                <div class="star">
                                  <i class="material-icons star-icon" title="1">star</i>

                                  <i class="material-icons star-icon" title="2">star</i>

                                  <i class="material-icons star-icon" title="3">star</i>

                                  <i class="material-icons star-icon" title="4">star</i>

                                  <i class="material-icons star-icon" title="5">star</i>
                                </div>

                                <p class="ml-3">5.0</p><span class="divider"></span>Dream Company
                              </div>
                              <article class="desc">
                                <h6 class="use-text-paragraph">Kami Moon Coorporation menyediakan lowongan magang untuk para siswa/mahasiswa untuk menjadi UI UX Designer pada perusahaan kami. Jika kalian tertarik untuk menjadi bagian dari perusahaan kami, Silahkan kirimkan CV kalian</h6>
                              </article>
                              <div class="btn-area">
                                <a class="btn-flat secondary waves-effect btnView" href="#">View Profile Company</a>
                                <a class="btn btn-Apply" href="#">Apply Now</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5 pa-0">
                            <div class="hidden-xs-down">
                              <div class="image">
                                <figure>
                                  <img src="{{ asset('images/intern/intern3.jpg')}}" height="360px" alt="promotion" />
                                </figure>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="slide slider-content anim-slide">
                    <section class="inner item">
                      <div class="inner-bg">
                        <div class="background">
                          <figure>
                            <img src="{{ asset('images/intern/intern4.jpg')}}" height="360px" alt="promotion" />
                          </figure>
                        </div>
                        <div class="row">
                          <div class="col-sm-7 pa-0">
                            <div class="text">
                              <h4><span class="use-text-subtitle2">Lowongan Magang</span>Waiters</h4>
                              <div class="property">
                                <div class="star">
                                  <i class="material-icons star-icon" title="1">star</i>

                                  <i class="material-icons star-icon" title="2">star</i>

                                  <i class="material-icons star-icon" title="3">star</i>

                                  <i class="material-icons star-icon" title="4">star</i>

                                  <i class="material-icons star-icon" title="5">star</i>
                                </div>

                                <p class="ml-3">5.0</p><span class="divider"></span>Up Normal
                              </div>
                              <article class="desc">
                                <h6 class="use-text-paragraph">Kami Moon Coorporation menyediakan lowongan magang untuk para siswa/mahasiswa untuk menjadi UI UX Designer pada perusahaan kami. Jika kalian tertarik untuk menjadi bagian dari perusahaan kami, Silahkan kirimkan CV kalian</h6>
                              </article>
                              <div class="btn-area">
                                <a class="btn-flat secondary waves-effect btnView" href="#">View Profile Company</a>
                                <a class="btn btn-Apply" href="#">Apply Now</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5 pa-0">
                            <div class="hidden-xs-down">
                              <div class="image">
                                <figure>
                                  <img src="{{ asset('images/intern/intern4.jpg')}}" height="360px" alt="promotion" />
                                </figure>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="anim-arrows">
                    <a class="anim-arrows-prev prev" href="#">
                      <i class="ion-ios-arrow-thin-left arrow-icon"></i>
                    </a>
                    <a class="anim-arrows-next next" href="#">
                      <i class="ion-ios-arrow-thin-right arrow-icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </section><!-- ##### END PROMOTION #####-->
          <!-- ##### FEATURED #####-->
          <section class="space-top" id="magang">
            <div data-aos="fade-up" data-aos="fade-up" data-aos-duration="3000">
            <div class="root">
              <div class="decoration">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px">
                  <g>
                    <path d="M1280,925c-133.8-192.4-264-288.5-390.5-288.5c-189.8,0-387.2,389.8-606.5,268C136.8,823.2,42.5,750.6,0,686.5V81c114.5,99.3,229.7,148.9,345.8,148.9c174.1,0,228.2-332.1,454.9-198C951.8,121.3,1118.6,137.7,1301,81L1280,925z"></path>
                  </g>
                </svg>
              </div>
              <div class="container fixed width-md-up">
                <div class="row spacing3">
                  <div class="col-md-3 py-10">
                    <div class="title-main align-left">
                      <h4 class="primary-title">Lowongan</h4>
                      <h4 class="secondary-title">Magang</h4>
                    </div>
                    <p class="use-text-paragrpah text-justify">Kami menyediakan berbagai informasi lowongan kerja dan magang untuk berbagai siswa/mahasiswa. Silahkan kalian tentukan lowongan magang yang anda inginkan. </p>
                    <a href="/interns" class="btn btn-infoMagang">Info Magang</a>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="card movie-thumb">
                      <a class="btn-wrap waves-effect" href="detail-movie.html">
                        <span class="figure sectionMagang">
                          <i class="ion-arrow-right-b play"></i>
                          <img src="{{ asset('images/intern/intern5.jpg')}}" alt="Cras convallis lacus"/>
                          <span class="figcaption ml-2">new</span>
                        </span>
                        <span class="text">Quality Assurance</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="card movie-thumb">
                      <a class="btn-wrap waves-effect" href="detail-movie.html">
                        <span class="figure sectionMagang">
                          <i class="ion-arrow-right-b play"></i>
                          <img src="{{ asset('images/intern/intern6.jpg')}}" height="420px" alt="Cras convallis lacus"/>
                          <span class="figcaption ml-2">new</span>
                        </span>
                        <span class="text">Project Manager</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="card movie-thumb">
                      <a class="btn-wrap waves-effect" href="detail-movie.html">
                        <span class="figure sectionMagang">
                          <i class="ion-arrow-right-b play"></i>
                          <img src="{{ asset('images/intern/intern7.jpg')}}" alt="Cras convallis lacus"/>
                          <span class="figcaption ml-3">new</span>
                        </span>
                        <span class="text">Chief Manager Officer</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section><!-- ##### END FEATURED #####-->

          <section class="space-top" id="loker">
            <div data-aos="fade-up" data-aos="fade-up" data-aos-duration="3000">
            <div class="root">
              <div class="decoration">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px">
                  <g>
                    <path d="M1280,925c-133.8-192.4-264-288.5-390.5-288.5c-189.8,0-387.2,389.8-606.5,268C136.8,823.2,42.5,750.6,0,686.5V81c114.5,99.3,229.7,148.9,345.8,148.9c174.1,0,228.2-332.1,454.9-198C951.8,121.3,1118.6,137.7,1301,81L1280,925z"></path>
                  </g>
                </svg>
              </div>
              <div class="container fixed width-md-up">
                <div class="row spacing3">
                  <div class="col-md-3 py-10">
                    <div class="title-main align-left">
                      <h4 class="primary-title">Lowongan</h4>
                      <h4 class="secondary-title">Pekerjaan</h4>
                    </div>
                    <p class="use-text-paragrpah text-justify">Kami menyediakan berbagai informasi lowongan kerja yang valid bagi seluruh masyarakat indonesia. Silahkan kalian pilih pekerjaan yang anda inginkan. </p>
                    <a href="/interns" class="btn btn-infoMagang">Info Loker</a>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="card movie-thumb">
                      <a class="btn-wrap waves-effect" href="detail-movie.html">
                        <span class="figure sectionMagang">
                          <i class="ion-arrow-right-b play"></i>
                          <img src="{{ asset('images/intern/marketing.jfif')}}" alt="Cras convallis lacus"/>
                          <span class="figcaption ml-2">new</span>
                        </span>
                        <span class="text">Marketing</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="card movie-thumb">
                      <a class="btn-wrap waves-effect" href="detail-movie.html">
                        <span class="figure sectionMagang">
                          <i class="ion-arrow-right-b play"></i>
                          <img src="{{ asset('images/intern/analis.jfif') }}" height="420px" alt="Cras convallis lacus"/>
                          <span class="figcaption ml-2">new</span>
                        </span>
                        <span class="text">System Analysts</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="card movie-thumb">
                      <a class="btn-wrap waves-effect" href="detail-movie.html">
                        <span class="figure sectionMagang">
                          <i class="ion-arrow-right-b play"></i>
                          <img src="{{ asset('images/intern/videographer.jfif') }}" alt="Cras convallis lacus"/>
                          <span class="figcaption ml-3">new</span>
                        </span>
                        <span class="text">Videographer</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>
          <!-- ##### TRENDING #####-->
          <!-- ##### END PRICING #####-->
          <!-- ##### FAQ #####-->
          <section class="space-top" id="faq">
            <div class="root">
              <div class="container fixed-width">
                <div class="row spacing6">
                  <div class="col-md-6 pa-6">
                    <div class="title-main align-left">
                      <h4 class="primary-title">Frequently</h4>
                      <h4 class="secondary-title">Answered Questions</h4>
                    </div>
                    <p class="text use-text-subtitle2 text-md-start text-center">Have a question? Check out our frequently asked questions to find your answer.</p>
                    <div class="hidden-sm-down">
                      <div class="illustration">
                        <img src="{{ asset('images/movie/faq.png')}}" alt="illustration" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 pa-6">
                    <div class="accordion">
                      <ul class="collapsible">
                        <li class="accordion-content paper active">
                          <div class="collapsible-header content">
                            <p class="heading">Pellentesque ac bibendum tortor?</p><i class="material-icons right arrow">expand_more</i>
                          </div>
                          <div class="collapsible-body detail">
                            <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor.</p>
                          </div>
                        </li>
                        <li class="accordion-content paper">
                          <div class="collapsible-header content">
                            <p class="heading">In mi nulla, fringilla vestibulum?</p><i class="material-icons down arrow">expand_more</i>
                          </div>
                          <div class="collapsible-body detail">
                            <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                          </div>
                        </li>
                        <li class="accordion-content paper">
                          <div class="collapsible-header content">
                            <p class="heading">Quisque lacinia purus ut libero?</p><i class="material-icons right arrow">expand_more</i>
                          </div>
                          <div class="collapsible-body detail">
                            <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                          </div>
                        </li>
                        <li class="accordion-content paper">
                          <div class="collapsible-header content">
                            <p class="heading">Quisque ut metus sit amet augue?</p><i class="material-icons right arrow">expand_more</i>
                          </div>
                          <div class="collapsible-body detail">
                            <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                          </div>
                        </li>
                        <li class="accordion-content paper">
                          <div class="collapsible-header content">
                            <p class="heading">Pellentesque ac bibendum tortor?</p><i class="material-icons right arrow">expand_more</i>
                          </div>
                          <div class="collapsible-body detail">
                            <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- ##### END FAQ #####-->
          <!-- ##### NEWS EVENT #####-->
          <section class="space-top-short" id="news">
            <div class="root">
              <div class="carousel">
                <div class="slick-carousel" id="news_carousel">
                  <div>
                    <div class="item">
                      <div class="news-card">
                        <figure>
                          <img src="{{ asset('images/')}}" alt="thumb" />
                        </figure>
                        <div class="desc">
                          <div class="text">
                            <p class="type caption">news</p>
                            <p>Sed imperdiet enim ligula, vitae viverra justo porta vel. Duis eget felis bibendum, pretium mi sed, placerat ante.</p>
                          </div>
                          <a class="btn btn-small btn-flat waves-effect">read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="item">
                      <div class="news-card">
                        <figure>
                          <img src="https://via.placeholder.com/1280x849/ea6db7/fff" alt="thumb" />
                        </figure>
                        <div class="desc">
                          <div class="text">
                            <p class="type caption">news</p>
                            <p>Sed imperdiet enim ligula, vitae viverra justo porta vel. Duis eget felis bibendum, pretium mi sed, placerat ante.</p>
                          </div>
                          <a class="btn btn-small btn-flat waves-effect">read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="item">
                      <div class="news-card">
                        <figure>
                          <img src="https://via.placeholder.com/967x725/bb6dea/fff" alt="thumb" />
                        </figure>
                        <div class="desc">
                          <div class="text">
                            <p class="type caption">event</p>
                            <p>Sed imperdiet enim ligula, vitae viverra justo porta vel. Duis eget felis bibendum, pretium mi sed, placerat ante.</p>
                          </div>
                          <a class="btn btn-small btn-flat waves-effect">read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="item">
                      <div class="news-card">
                        <figure>
                          <img src="https://via.placeholder.com/1048x701/6d6fea/fff" alt="thumb" />
                        </figure>
                        <div class="desc">
                          <div class="text">
                            <p class="type caption">news</p>
                            <p>Sed imperdiet enim ligula, vitae viverra justo porta vel. Duis eget felis bibendum, pretium mi sed, placerat ante.</p>
                          </div>
                          <a class="btn btn-small btn-flat waves-effect">read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="item">
                      <div class="news-card">
                        <figure>
                          <img src="https://via.placeholder.com/1050x700/6dc0ea/fff" alt="thumb" />
                        </figure>
                        <div class="desc">
                          <div class="text">
                            <p class="type caption">event</p>
                            <p>Sed imperdiet enim ligula, vitae viverra justo porta vel. Duis eget felis bibendum, pretium mi sed, placerat ante.</p>
                          </div>
                          <a class="btn btn-small btn-flat waves-effect">read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="item">
                      <div class="news-card">
                        <figure>
                          <img src="https://via.placeholder.com/970x725/6deaa6/fff" alt="thumb" />
                        </figure>
                        <div class="desc">
                          <div class="text">
                            <p class="type caption">news</p>
                            <p>Sed imperdiet enim ligula, vitae viverra justo porta vel. Duis eget felis bibendum, pretium mi sed, placerat ante.</p>
                          </div>
                          <a class="btn btn-small btn-flat waves-effect">read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- ##### NEWS EVENT #####-->
        </main><!-- ##### fOOTER #####-->
        <div id="footer">
          <div class="footer-deco">
            <div class="decoration">
              <svg class="left-deco" width="1045px" height="1468px" viewBox="0 0 1045 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-1030.000000, 0.000000)">
                  <g transform="translate(950.000000, 0.000000)">
                    <path d="M0,0 L805.395445,0 C731.131815,0 740.666667,76.9414646 834,230.824394 C915.57424,365.319569 1045,513.536468 1045,652.024982 C1045,806.30828 951.877684,902.632061 904.5,1091.56209 C874.07902,1212.87314 909.795583,1338.35244 1011.64969,1468 L0,1468 L0,0 Z"></path>
                  </g>
                </g>
              </svg>
              <div class="line-deco">
                <svg class="right-deco-before" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g transform="translate(-2171.000000, 0.000000)">
                    <g transform="translate(-950.000000, 0.000000)">
                      <g transform="translate(950.000000, 0.000000)">
                        <path d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z" transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) "></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <svg class="right-deco" width="389px" height="1468px" viewBox="0 0 389 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g transform="translate(-2171.000000, 0.000000)">
                    <g transform="translate(-950.000000, 0.000000)">
                      <g transform="translate(950.000000, 0.000000)">
                        <path d="M2329.58044,-732.909805 L3294.66463,-608.836163 C3018.10652,-208.944402 2934.07929,71.8618948 3042.58292,233.582726 C3136.98689,374.288498 3255.13325,471.945016 3255.13325,636.668858 C3255.13325,820.179655 3107.51302,903.798038 3059.64228,1128.51906 C3028.9047,1272.81133 3063.63816,1429.66837 3163.84265,1599.0902 L2141.66463,1599.0902 L2329.58044,-732.909805 Z" transform="translate(2718.164626, 433.090195) rotate(179.000000) translate(-2718.164626, -433.090195) "></path>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
            </div>
            <div class="action">
              <h4 class="use-text-title2">What are you waiting for?</h4>
              <a class="btn secondary btn-large waves-effect" href="#">Get Started</a>
            </div>
            <footer class="footer">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 pa-4">
                    <div class="logo">
                      <img src="{{ asset('images/movie-logo.png')}}" alt="logo" />
                      <h6 class="title">Movie</h6>
                    </div>
                    <p class="body-2 show-md-up text-center">&copy; Alexstrap Movie 2020</p>
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
                <p class="body-2 text-center show-sm-down">&copy; Alexstrap Movie 2020</p>
              </div>
            </footer>
          </div>
        </div><!-- ##### END fOOTER #####-->
        <!-- ##### PAGE-NAV #####-->
        <div class="hidden-sm-down">
          <div class="page-nav" id="page_nav">
            <nav class="section-nav">
              <div class="scrollnav">
                <ul>
                  <li style="top: 150px"><a class="tooltipped" href="#promotions" data-position="left" data-tooltip="promotions"></a></li>
                  <li style="top: 120px"><a class="tooltipped" href="#featured" data-position="left" data-tooltip="featured"></a></li>
                  <li style="top: 90px"><a class="tooltipped" href="#top" data-position="left" data-tooltip="top categories"></a></li>
                  <li style="top: 60px"><a class="tooltipped" href="#all" data-position="left" data-tooltip="all categories"></a></li>
                  <li style="top: 30px"><a class="tooltipped" href="#pricing" data-position="left" data-tooltip="pricing"></a></li>
                </ul>
              </div>
            </nav>
            <div class="scrollnav">
              <a class="btn-floating btn-large primary tooltipped waves-effect waves-light" href="#home" data-position="left" data-tooltip="To Top">
                <div class="icon material-icons">arrow_upward</div>
              </a>
            </div>
          </div>
        </div><!-- ##### END PAGE-NAV #####-->
        <!-- ##### NOTIFICATION #####-->
        <div class="hidden-sm-down">
          <div class="alert full alert-dismissible fade show notification" role="alert">
            <div class="wrapper">
              <div class="content">
                <div class="action">Mohon untuk login ke akun anda terlebih dahulu. Agar kalian bisa melihat semua informasi tanpa harus login kembali.</div>
                <a class="btn btn-outline-success info" href="/login">login</a>
              </div>
            </div>
          </div>
        </div><!-- ##### END NOTIFICATION #####-->
      </div>
    </div>
  </div>
</div><!-- Scripts-->
@endsection