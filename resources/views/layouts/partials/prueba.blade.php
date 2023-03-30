<!--
@foreach ($data['services'] as $service)
-->
@foreach ($services as $service)
                <!--- Tarjeta 1 --->
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card text-bg-light" style="width: 17rem;">
                            <img class="card-img-top" src="{{ $service->url_image }}" width="50" height="140">
                            <div class="card-body text-white">
                                <h5 class="card-title">{{ $service->full_name }}</h5>
                                <div class="iconos">
                                    <ul class="action">
                                      
                                        <li><i class="bi bi-coin"> {{ $service->price }}</i></li>
                                        <li><i class="bi bi-telephone-fill"> {{ $service->phone }}</i></li>
                                        <li><i class="bi bi-envelope-fill"> {{ $service->email }}</i></li>
                                    </ul>
                                </div>
                                <h5 class="card-title">{{ $service->name }}</h5>
                                <div class="card-footer text-center">
                                    <p class="card-text">Reserva tu servicio dando click en reservar</p>
                                    <a href="#" class="btn mt-1 ">Reservar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach