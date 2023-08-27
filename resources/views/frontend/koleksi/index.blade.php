@extends('frontend.layouts.main')
{{-- @include('frontend.layouts.siteNav') --}}
<nav class="site-nav ">
  <div class="container">
    <div class="menu-bg-wrap">
      <div class="site-navigation">
        <a href="index.html" class="logo m-0 float-start">Simuseum</a>

        <ul
          class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
        >
          <li class="active"><a href="index.html">Home</a></li>
          <li class="has-children">
            <a href="properties.html">Tentang Kami</a>
            <ul class="dropdown">
              <li><a href="#">Profil</a></li>
              <li><a href="#">Visi Misi </a></li>
            </ul>
          </li>
          <li><a href="services.html">Koleksi</a></li>
          <li><a href="#sejarah">Sejarah</a></li>
          <li><a href="contact.html">Kontak</a></li>
        </ul>

        <a
          href="#"
          class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
          data-toggle="collapse"
          data-target="#main-navbar"
        >
          <span></span>
        </a>
      </div>
    </div>
  </div>
</nav>
<div class="hero page-inner overlay" style="background-image: url('{{ asset('frontend') }}/images/banner3.png')">
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-9 text-center mt-5">
      <h1 class="heading" data-aos="fade-up">Tentang Kami</h1>
      <nav aria-label="breadcrumb" data-aos="fade-up"data-aos-delay="200">
        <ol class="breadcrumb text-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active text-white-50"aria-current="page">
            Profile Museum
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="section section-properties">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_4.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_5.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_6.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_8.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="property-single.html" class="img">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <div class="price mb-2"><span>$1,291,000</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >5232 California Fake, Ave. 21BC</span
                >
                <span class="city d-block mb-3">California, USA</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">2 beds</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">2 baths</span>
                  </span>
                </div>

                <a
                  href="property-single.html"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
              </div>
            </div>
          </div>
          <!-- .item -->
        </div>
      </div>
      <div class="row align-items-center py-5">
        <div class="col-lg-3">Pagination (1 of 10)</div>
        <div class="col-lg-6 text-center">
          <div class="custom-pagination">
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('frontend.layouts.footer')