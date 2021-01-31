

    <section class="page-section cta">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 mx-auto">
              <div class="cta-inner text-center rounded">
                <h2 class="section-heading mb-5">
                  <span class="section-heading-upper">{{$liste[0]->titre1}}</span>
                  <span class="section-heading-lower">{{$liste[0]->titre2}}</span>
                </h2>

                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

                    {{-- boucel for each --}}
                    @foreach ($liste[1] as $day => $horaire )

                    <li class="list-unstyled-item list-hours-item d-flex">
                      {{$day}}
                      <span class="ml-auto">{{$horaire}}</span>
                    </li>
                    @endforeach
                  
                </ul>

                
                <p class="address mb-5">
                  <em>
                    <strong>{{$liste[0]->adresse1}}</strong>
                    <br>
                    {{$liste[0]->adresse2}}
                  </em>
                </p>
                <p class="mb-0">
                  <small>
                    <em>{{$liste[0]->tel1}}</em>
                  </small>
                  <br>
                  {{$liste[0]->tel2}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>