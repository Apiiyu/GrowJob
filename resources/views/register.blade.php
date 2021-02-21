@extends('app/app')
@section('webTitle', 'Grow Jobs - Home')
@section('webContent')
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="{{ asset('images/loading.gif') }}" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content passion passion-var" id="main-wrap">
      <div class="form-page">
        <div class="page-wrap">
          <div class="hidden-md-up">
            <div class="logo logo-header">
              <a href="/">
                <img src="{{ asset('images/movie-logo.png')}}" alt="logo">
                <p class="use-text-subtitle2">GrowJob</p>
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
            <div class="card form-box fragment-fadeUp">
              <div class="hidden-sm-down">
                
              </div>
              <div class="auth-frame">
                <div class="row">
                  <div class="col-md-5">
                    <a class="waves-effect" href="/">
                      <img src="{{ asset('images/home.png') }}" class="iconHome" alt="icon">
                    </a>
                    <div class="hidden-sm-down">
                      <div class="greeting"> 
                        <div class="logo"><img src="{{ asset('images/movie-logo.png')}}" alt="logo">
                          <p class="use-text-subtitle2">GrowJob</p>
                        </div>
                        <h4 class="use-text-title2 pb-2">Selamat Datang !</h4>
                        <h6 class="use-text-subtitle2">Ayo segera registrasi untuk bergabung</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7 ">
                    <div class="form-wrap">
                      <div>
                        <div class="head">
                          <div class="title-secondary align-left">
                            <h3>Registrasi</h3>
                          </div>
                          <a class="btn btn-flat waves-effect button-link" href="/login">
                            <i class="material-icons icon left mr-1">arrow_forward</i>Sudah memiliki akun?
                          </a>
                        </div>
                        <div class="socmed-side-login">
                          <button class="btn navi-btn waves-effect"><i class="ion-social-facebook mr-3"></i><a class="text-light" href="https://m.facebook.com">Facebook</a></button>
                          <button class="btn blue-btn waves-effect"><i class="ion-social-twitter mr-3"></i><a class="text-light" href="https://twitter.com/twitter">Twitter</a></button>
                          <button class="btn red-btn waves-effect"><i class="ion-social-google mr-3"></i><a class="text-light" href="https://www.google.com/">Google</a></button>
                        </div>
                        <div class="separator">
                          <p>Atau registrasi dengan email</p>
                        </div>
                        <form id="register_form" method="POST">
                          <div class="row spacing3">
                            <div class="col-sm-6">
                              <div class="input-field filled dark">
                                <input class="validate" id="name1" type="text" name="name" required>
                                <label for="name1">Nama Depan</label>
                              </div>
                            </div>
                            <div class="col-sm-5 ml-5">
                              <div class="input-field filled dark">
                                <input class="validate" id="name2"  type="text" name="name" required>
                                <label for="name2">Nama Belakang</label>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="input-field filled dark">
                                <input class="validate" id="username" type="text" name="username" required>
                                <label for="username">Username</label>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="input-field filled dark">
                                <input class="validate" id="email" type="email" name="email" required>
                                <label for="email">Email</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-field filled dark mq-md-up" data-class="me-2">
                                <input class="validate" id="password" type="password" name="password" required>
                                <label for="password">Kata Sandi</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-field filled dark mq-md-up" data-class="ms-2">
                                <input class="validate" id="confirm" type="password" name="confirm" data-validation="confirmation" data-validation-confirm="password" required>
                                <label for="confirm">Konfirmasi Kata Sandi</label>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="input-field filled dark">
                                <input type="text" id="nomor" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                <label for="nomor">No. Handphone</label>
                              </div>
                            </div>
                          </div>
                          <div class="btn-area">
                            <div class="form-helper">
                              <div class="form-control-label">
                                <label>
                                  <input class="filled-in secondary" type="checkbox" required>
                                  <span>Saya telah membaca dan menerima Persyaratan <a class="link" href="#">Service &amp; Privacy Policy *</a></span>
                                </label>
                              </div>
                            </div>
                            <button class="btn secondary btn-large waves-effect" type="submit">Selanjutnya</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection