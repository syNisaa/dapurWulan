<section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">
              <div class="mu-title">
                <span class="mu-subtitle">Testimoni Pelanggan</span>
                <h2>KENALI LEBIH DEKAT</h2>
                <i class="fa fa-spoon"></i>
                <span class="mu-title-bar"></span>
              </div>
              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  @foreach ($testimoniacc as $nt => $testi)
                  <li>
                    <div class="mu-testimonial-single">
                      <div class="mu-testimonial-info">
                        <p>{{$testi->deskripsi}}</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- {{$testi->nama}} - "{{$testi->nama_makanan}}"</p>
                      </div>
                    </div>
                  </li>
                  @endforeach

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>