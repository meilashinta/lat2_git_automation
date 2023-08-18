<div class="section" id="koleksi">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            Koleksi Museum 
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider" style="max-height: 100rem">
                @foreach ($koleksi as $item)
                    <div class="property-item">
                        <a href="#" class="img">
                            <img src="{{ Storage::url($item->gambar) }}" alt="Image" class="img-fluid" style="min-height: 100" />

                        </a>
                        <div class="property-content">
                          <div class="d-flex flex-column justify-content-between">
                              <div class="mb-3  ">
                                <h5 class="city d-block {{ str_word_count($item->nama_koleksi) <= 5 ? 'mb-4' : 'mb-2' }}">
                                  {{ $item->nama_koleksi }}
                              </h5>
                              </div>
                              <div class="mb-2 description">
                                  <span class="text-black-50">{{ $item->deskripsi }}</span>
                              </div>
                              <div>
                                  <a href="{{ route('koleksi.detail', ['id' => $item->id]) }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                              </div>
                          </div>
                      </div>
                      
                      
                    </div>
                @endforeach
            </div>

            <div
              id="property-nav"
              class="controls"
              tabindex="0"
              aria-label="Carousel Navigation"
            >
              <span
                class="prev"
                data-controls="prev"
                aria-controls="property"
                tabindex="-1"
                >Prev</span
              >
              <span
                class="next"
                data-controls="next"
                aria-controls="property"
                tabindex="-1"
                >Next</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
        
            <img src="{{ asset('frontend') }}/images/galeri/gal1.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="box-feature">
            <img src="{{ asset('frontend') }}/images/galeri/gal2.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="box-feature">
            <img src="{{ asset('frontend') }}/images/galeri/gal3.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="box-feature">
            <img src="{{ asset('frontend') }}/images/galeri/gal3.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section section-5 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-6 mb-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Our Team
          </h2>
          <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            enim pariatur similique debitis vel nisi qui reprehenderit totam?
            Quod maiores.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{ asset('frontend') }}/images/person_1-min.jpg"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Revan Devri, S.Pd</a></h2>
              <span class="meta d-block mb-3">Pemandu Museum</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere officiis inventore cumque tenetur laboriosam, minus
                culpa doloremque odio, neque molestias?
              </p>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{ asset('frontend') }}/images/person_2-min.jpg"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Mulia Chandri Aniskha, S.Hum</a></h2>
              <span class="meta d-block mb-3">Pemandu Museum</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere officiis inventore cumque tenetur laboriosam, minus
                culpa doloremque odio, neque molestias?
              </p>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{ asset('frontend') }}/images/person_3-min.jpg"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Romi Purnama, S.Pd</a></h2>
              <span class="meta d-block mb-3">Tenaga Kebersihan</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere officiis inventore cumque tenetur laboriosam, minus
                culpa doloremque odio, neque molestias?
              </p>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>