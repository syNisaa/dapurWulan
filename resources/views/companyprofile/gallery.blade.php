<section id="mu-gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-gallery-area">
          <div class="mu-title">
            <span class="mu-subtitle">Telusuri</span>
            <h2>GALERI MEMASAK KAMI</h2>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-gallery-content">
            <div class="mu-gallery-top">
              <!-- Start gallery menu -->
              <ul>
                <li class="filter active" data-filter="all">SEMUA FOTO</li>
                @foreach ($jenis as $j)
                <li class="filter" data-filter=".{{ Str::slug($j->nama_jenisproduk) }}">{{ $j->nama_jenisproduk }}</li>
                @endforeach
              </ul>
            </div>
            <!-- Start gallery image -->
            <div class=" mu-gallery-body" id="mixit-container">
              <!-- start single gallery image -->
              @foreach ($galeri as $item)
              <div class="mu-single-gallery col-md-4 mix {{ Str::slug($item->jenisProduk->nama_jenisproduk) }}">
                <div class="mu-single-gallery-item">
                  <figure class="mu-single-gallery-img">
                    <a href="#"><img alt="img" src="{{ asset('gambar/galeripoto/' . $item->gambar) }}"></a>
                  </figure>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>