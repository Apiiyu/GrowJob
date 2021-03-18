@extends('app.app')
@section('webTitle', 'Grow Jobs - Internship')
@section('webContent')  
<div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="{{ asset('images/loading.gif')}}" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
      <ol class="breadcrumb secMenu">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Internship</li>
      </ol>

      
    <div class="container ">
      <div class="row justify-content-between">
        <div>
          <h4 class="secondary-title headingMagang"><span class="lowongan">Lowongan</span> Magang</h4>
        </div>

        <div>
          <a href="/magang/create" class="btnNew">New Post</a>
        </div>
      </div>
    <hr class="divider-sidebar ">

    @if($dataMagang->count())
      @foreach($dataMagang as $Magang)
        <div data-aos="fade-up" data-aos-duration="3000">
          <div class="card mt-5">
            <div class="card-header"><b>{{ $Magang->title }}</b></div>
        
          <div class="card-body">
            <div class="imgMagang">
            <img src="{{ asset('images/intern/videographer.jfif') }}" class="gambarMagang justify-content-lg-start" alt="imgMagang" >
          </div>

          <div class="textMagang">
            <h6 class="use-text-paragraph text-justify ml-4">{{ Str::limit($Magang->body, 300) }}</h6>
              
            <a class="btn btn-infoMagang selengkapnya ml-4 mt-4" href="/magang/{{ $Magang->slug }}">Selengkapnya</a>
          </div>
        </div>
                      
          <div class="card-footer">Published on {{ $Magang->created_at->diffForHumans() }}</div>
        </div>
      </div>
      @endforeach
      @else
        <div class="alert alert-info-danger">
          There are no posts.
        </div>
      @endif
      <div data-aos="fade-up" data-aos-duration="3000">
        <div class="d-flex justify-content-center">
          <div>
            {{ $dataMagang->links() }}
          </div>
        </div>
      </div>
    </div>
    
    <div data-aos="fade-up" data-aos-duration="3000">
      <section class="space-top space-magang" id="footer">
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
                      <a class="btn-icon waves-effect"><span class="ion-social-facebook icon mt-2"></span></a>
                      <a class="btn-icon waves-effect"><span class="ion-social-twitter icon mt-2"></span></a>
                      <a class="btn-icon waves-effect"><span class="ion-social-instagram icon mt-2"></span></a>
                      <a class="btn-icon waves-effect"><span class="ion-social-linkedin icon mt-2"></span></a>
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
          </section>
    </div>