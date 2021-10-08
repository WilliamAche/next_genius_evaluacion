  <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card bg-analytics text-white">
              <div class="card-content">
                  <div class="card-body text-center">
                      <img src="{{ asset('img/template/elements/decore-left.png') }}" class="img-left"
                          alt="card-img-left">
                      <img src="{{  asset('img/template/elements/decore-right.png') }}" class="img-right"
                          alt="card-img-right">
                      <div class="avatar avatar-xl bg-warning shadow mt-0">
                          <div class="avatar-content">
                              <i class="feather icon-award white font-large-1"></i>
                          </div>
                      </div>
                      <div class="text-center">
                          <h1 class="mb-2 text-white">Bienvenido {{ Auth::user()->name }}</h1>
                          <p class="m-auto w-75">Nos alegra mucho verte nuevamente por aqui, visita nuestros nuevos <a
                                  href="#" class="text-info">cursos</a> </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
              <div class="card-header d-flex flex-column align-items-start pb-0">
                  <div class="avatar bg-rgba-warning p-50 m-0">
                      <div class="avatar-content">
                          <i class="feather icon-users text-warning font-medium-5"></i>
                      </div>
                  </div>
                  <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                  <p class="mb-0">Cursos Comprados</p>
              </div>
              <div class="card-content">
                  <div id="subscribe-gain-chart"></div>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
              <div class="card-header d-flex flex-column align-items-start pb-0">
                  <div class="avatar bg-rgba-danger p-50 m-0">
                      <div class="avatar-content">
                          <i class="feather icon-package text-danger font-medium-5"></i>
                      </div>
                  </div>
                  <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                  <p class="mb-0">Ordenes canceladas</p>
              </div>
              <div class="card-content">
                  <div id="orders-received-chart"></div>
              </div>
          </div>
      </div>
  </div>












  {{-- 
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">128</h2>
                    <p class="mb-0">Cursos Comprados</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-credit-card text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">125</h2>
                    <p class="mb-0">Ordenes Completadas</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">30</h2>
                    <p class="mb-0">Cursos Pendientes</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">98</h2>
                    <p class="mb-0">Cursos culminados</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-4"></div>
                </div>
            </div>
        </div>
    </div> --}}