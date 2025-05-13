@php use Illuminate\Support\Str; @endphp
<style>
  .produk-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    list-style: none;
    padding: 0;
  }

  .produk-item {
    width: 48%;
    border: 1px solid #ddd;
    padding: 10px;
    box-sizing: border-box;
    margin: 10px;
  }

  .media {
    display: flex;
    gap: 30px;
    height: 220px;
    padding: 10px;
  }

  .media-left img {
    width: 100px;
    height: auto;
  }

  .mu-menu-item-nav li {
    margin-bottom: 30px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
  }

  .mu-menu-item-nav .media {
    display: flex;
    gap: 15px;
  }

  .mu-menu-item-nav .media img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
  }

  .mu-menu-item-nav .media-body h4 {
    margin-top: 0;
    margin-bottom: 8px;
    font-weight: bold;
    font-size: 18px;
  }

  .mu-menu-price {
    display: inline-block;
    color: #a77b00;
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 16px;
  }

  .mu-menu-item-nav .media-body p {
    font-size: 14px;
    color: #555;
  }
</style>


<section id="mu-restaurant-menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-restaurant-menu-area">
          <div class="mu-title">
            <span class="mu-subtitle">Temukan</span>
            <h2>MENU KAMI</h2>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-restaurant-menu-content">
            <ul class="nav nav-tabs mu-restaurant-menu" role="tablist">
              <li class="active">
                <a href="#all" data-toggle="tab" role="tab">Semua Menu</a>
              </li>
              @foreach ($jenis as $j)
              <li>
                <a href="#{{ Str::slug($j->nama_jenisproduk) }}" data-toggle="tab" role="tab">{{ $j->nama_jenisproduk }}</a>
              </li>
              @endforeach
            </ul>


            <!-- Tab Content -->
            <div class="tab-content">
              <!-- Semua Produk -->
              <div class="tab-pane fade in active" id="all">
                <div class="row">
                  @foreach ($produk as $p)
                  <div class="col-md-6">
                    <div class="mu-tab-content-left">
                      <ul class="mu-menu-item-nav">
                        <li>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="{{ asset('gambar/produkpoto/'. $p->gambar) }}" alt="{{ $p->nama_produk }}">
                                <!-- <img class="media-object" src="assets/img/menu/item-1.jpg" alt="img"> -->
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#">{{ $p->nama_produk }}</a></h4>
                              <span class="mu-menu-price">Rp. {{ number_format($p->harga, 0, ',', '.') }} ({{ $p->status_pesan }})</span>
                              <p style="text-align: justify;">{{ $p->deskripsi }}</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>

              <!-- Produk per Jenis -->
              @foreach ($jenis as $j)
              <div class="tab-pane fade" id="{{ Str::slug($j->nama_jenisproduk) }}">
                <div class="row">
                  @foreach ($produk as $p)
                  @if ($p->id_jenis == $j->id)
                  <div class="col-md-6">
                    <div class="mu-tab-content-left">
                      <ul class="mu-menu-item-nav">
                        <li>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <!-- <img class="media-object" src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama_produk }}"> -->
                                <img class="media-object" src="{{ asset('gambar/produkpoto/'. $p->gambar) }}" alt="{{ $p->nama_produk }}">
                              </a>
                              <!-- <button class="btn btn-outline-warning"></button> -->
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#">{{ $p->nama_produk }}  </a> </h4>
                              <span class="mu-menu-price">Rp. {{ number_format($p->harga, 0, ',', '.') }} ({{ $p->status_pesan }})</span></span>
                              <p style="text-align: justify;">{{ $p->deskripsi }}</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <script>
        function setActive(clickedButton) {
          const buttons = document.querySelectorAll('.tab-btn');
          buttons.forEach(btn => {
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-secondary');
          });
          clickedButton.classList.remove('btn-secondary');
          clickedButton.classList.add('btn-primary');

          const targetId = clickedButton.dataset.target;

          const tabs = document.querySelectorAll('.tab-pane');
          tabs.forEach(tab => {
            tab.classList.remove('show', 'active');
          });

          const targetTab = document.getElementById(targetId);
          if (targetTab) {
            targetTab.classList.add('show', 'active');
          }
        }

        // Aktifkan tab pertama saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
          const firstButton = document.querySelector('.tab-btn');
          if (firstButton) {
            setActive(firstButton);
          }
        });
      </script>

</section>