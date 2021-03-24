@extends('app/app')
@section('webTitle', 'Grow Jobs - Apply Internship')
@section('webContent')
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="{{asset('images/loading.gif')}}" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content passion passion-var" id="main-wrap">
      <div class="form-page">
        <div class="page-wrap">
          <div class="hidden-md-up">
            <div class="logo logo-header">
              <a href="register">
            <img src="{{ asset('images/movie-logo.svg') }}" alt="logo">
                <p class="use-text-subtitle2">Movie</p>
              </a>
            </div>
          </div>
          <div class="container max-lg inner-wrap">
            <div class="decoration">
              <svg class="left-deco" width="1045px" height="1468px" viewBox="0 0 1045 1468" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="translate(-1030.000000, 0.000000)">
                  <g transform="translate(950.000000, 0.000000)">
                    <path d="M0,0 L805.395445,0 C731.131815,0 740.666667,76.9414646 834,230.824394 C915.57424,365.319569 1045,513.536468 1045,652.024982 C1045,806.30828 951.877684,902.632061 904.5,1091.56209 C874.07902,1212.87314 909.795583,1338.35244 1011.64969,1468 L0,1468 L0,0 Z"></path>
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
            <div class="card form-box fragment-fadeUp"></div>
              <div class="auth-frame">
                <div class="row">
                  <div class="col-md-4">
                    <div class="hidden-sm-down">
                      <div class="greeting">
                        <div class="logo"><img src="{{ asset('images/movie-logo.svg')}}" alt="logo">
                          <p class="use-text-subtitle2">Grow Jobs</p>
                        </div>
                        <h4 class="use-text-title2 pb-2">Welcome back!</h4>
                        <h6 class="use-text-subtitle2">Please login to continue</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-wrap">
                      <div>
                        <div class="alert alert-success alert-dismissible fade show d-none pesanNotifikasi" role="alert">
                          <strong>Terima Kasih! data anda berhasil dikirim!</strong> Mohon menunggu balasan melalui alamat email anda.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="title-main align-left">
                          <h4 class="primary-title">Melamar <span class="headingMagang">Magang</span></h4>
                        </div>
                        <form method="POST" action="{{ route('login') }}" name="data-pelamar-magang">
                          @csrf
                          
                          {{-- Error Alert --}}

                          @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                              <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          @enderror

                          <div class="row">
                            <div class="col-md-5">
                              <div class="input-field filled dark mq-md-up" data-class="me-2">
                                <input class="validate" id="name" type="text" name="nama_depan" autofocus required autocomplete="off">
                                <label for="name">Nama Depan</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="col-md-6 ml-3">
                              <div class="input-field filled dark mq-md-up" data-class="me-2">
                                <input class="validate" id="name" type="text" name="nama_belakang" required autocomplete="off">
                                <label for="namaBelakang">Nama Belakang</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="col-sm-5">
                              <div class="input-field filled dark">
                                <input class="validate @error('email') is-invalid @enderror" id="email" type="email" name="email" required autocomplete="off">
                                <label for="email">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="col-sm-6 ml-3">
                              <div class="input-field filled dark">
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="telepon"/>
                                <label for="nomor">No. Handphone</label>
                              </div>
                            </div>

                            <div class="col-sm-5">
                              <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01" name="pendidikan">
                                  <option selected>[ Pendidikan Terakhir ]</option>
                                  <option value="Sekolah Dasar">Sekolah Dasar</option>
                                  <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                                  <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                                  <option value="Sekolah Menengah Kejuruan">Sekolah Menengah Kejuruan</option>
                                  <option value="Diploma">Diploma</option>
                                  <option value="Sarjana">Sarjana</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-sm-6 ml-3">
                              <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01" name="jurusan">
                                  <option selected>[ Jurusan ]</option>
                                  <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                                  <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                                  <option value="Multimedia">Multimedia</option>
                                  <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                  <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                  <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-11 col-sm-10">
                              <div class="input-field filled dark">
                                <input class="validate" id="portfolio" type="text" name="url_portofolio" required autocomplete="off">
                                <label for="portfolio">Your Portfolio URL</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="col-md-11">
                              <div class="input-field filled dark mq-md-up" data-class="me-2">
                                <textarea name="pesan" id="pesanHarapan"></textarea>
                                <label for="pesanHarapan">Pesan Harapan Anda</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                          </div>
                          <div class="btn-area mt-10">
                            <button class="btn secondary btn-large block waves-effect btnKirim" type="submit">Continue</button>
                          </div>

                          <button class="btn btn-primary btnLoading d-none" type="button">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                          </button>
                        </form>
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
                                  <h6 class="title white-text">Grow Jobs</h6>
                                </div>
                                <p class="body-2 show-md-up text-center">&copy; Devlife Company 2021</p>
                              </div>
                              <div class="col-md-6 py-0 ps-6 pe-0">
                                <ul class="show-sm-down collapsible">
                                  <li class="accordion-content">
                                    <div class="collapsible-header">
                                      <h6 class="title mb-4 white-text">Company</h6>
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
                                      <h6 class="title mb-4 white-text">Resources</h6>
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
                                      <h6 class="title mb-4 white-text">Legal</h6>
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
                                    <h6 class="title-nav mb-4 white-text">Company</h6>
                                    <ul>
                                      <li><a href="#team">Team</a></li>
                                      <li><a href="#history">History</a></li>
                                      <li><a href="#contact-us">Contact us</a></li>
                                      <li><a href="#locations">Locations</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                                    <h6 class="title-nav mb-4 white-text">Resources</h6>
                                    <ul>
                                      <li><a href="#resource">Resource</a></li>
                                      <li><a href="#resource-name">Resource name</a></li>
                                      <li><a href="#another-resource">Another resource</a></li>
                                      <li><a href="#final-resource">Final resource</a></li>
                                    </ul>
                                  </div>
                                  <div class="col-sm-3 pa-4 px-md-0 site-map-item">
                                    <h6 class="title-nav mb-4 white-text">Legal</h6>
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
              </div>


              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbyE8AemHYqEv05cBgE4XwM6q_zOvBQ1BRgcRE_HqUUWYC8cozLiUTYGCBh-ZsFAV-i3PQ/exec'
    const form = document.forms['data-pelamar-magang']
  
    const buttonKirim = document.querySelector('.btnKirim');
    const buttonLoading = document.querySelector('.btnLoading');
    const msgAlert = document.querySelector('.pesanNotifikasi');


    form.addEventListener('submit', e => {
      e.preventDefault()

      // Ketika button submit di click
      // Tampilkan tombol loading, hilangkan tombol kirim
      buttonLoading.classList.toggle('d-none');
      buttonKirim.classList.toggle('d-none');
      

      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
          // Tampilkan tombol kirim, hilangkan tombol loading
          console.log('Success!', response)
          buttonLoading.classList.toggle('d-none');
          msgAlert.classList.toggle('d-none');
          buttonKirim.classList.toggle('d-none');

          // Reset Formnya
          form.reset();
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>
  @endsection