<section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Sampaikan Disini</span>
              <h2>KONTAK KAMI</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form" action="{{ route('store.testimoni') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama"  placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="email">Nama Makanan</label>
                        <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" placeholder="exp : Nastar ">
                      </div>
                      <div class="form-group">
                        <label for="message">Testimoni</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"
                          placeholder="Apa yang ingin kamu bagikan"></textarea>
                      </div>
                      <button type="submit" class="mu-send-btn">Kirim Testimoni</button>
                    </form>
                    @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <p>{{$info->deskripsi_toko}}</p>
                      <h3>Alamat Toko</h3>
                      <address>
                        <p><i class="fa fa-phone"></i>{{$info->nomer_telepon}}</p>
                        <p><i class="fa fa-envelope-o"></i>{{$info->email}}</p>
                        <p><i class="fa fa-map-marker"></i>{{$info->alamat}}</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>
                      <address>
                        <p><span>{{$info->jam_buka}}</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>