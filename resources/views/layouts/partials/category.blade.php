@foreach ($categories as $category)
                                    <div class="col">
                                        <div class="card h-90">
                                            <img src="{{asset('images')}}/{{$category->image}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title" style="color: black">{{ $category->name }}</h5>
                                                <p class="card-text"  style="color: black">{{ $category->description }}</p>
                                                <div class="card-footer text-center">
                                                    <p class="card-text"  style="color: black">Da click en el boton mostrar para ver los servicios que te ofrece esta sección</p>
                                                    <a style="color: black" href="/services/{{ $category->category_id }}"
                                                        class="btn mt-1"  style="color: black">Mostrar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach