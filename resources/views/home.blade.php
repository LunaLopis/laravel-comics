{{-- estendo app.blade che contiene il layout di base header/footer, con yield al centro --}}
@extends('layouts.app')

@section('content')
    
    <section class="bg-black pt-5">
        <div class="container">
            <div class="row">
                @foreach ($comics as $id => $comic)
                    <div class="col col-lg-2 col-md-4 col-sm-12">
                        <a href="{{ route('comics.details', ['comic' => $id]) }}">
                            <div class="card mb-3 " >
                                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$comic['series']}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="bg-primary">

            <div class="row">
               
                <div class="col">
                    <div class="card d-flex justify-center bg-primary ">
                        <div class="card mb-3" style="max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-md-4 bg-primary">
                                    <img class="img-card height-100px bg-primary" style="max-width: 100px;"alt="" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                                </div>
                              <div class="col-md-8">
                                  <div class="card-body">
                                      <h6 class=" card-text">DIGITAL COMICS</h6>
                                   </div>
                              </div>
                            </div>
                        </div>
                    </div>                    
                </div>  

                <div class="col">
                    <div class="card d-flex justify-center bg-primary ">
                        <div class="card mb-3" style="max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-md-4 bg-primary">
                                    <img class="img-card height-100px bg-primary" style="max-width: 100px;"alt="" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                                </div>
                              <div class="col-md-8">
                                  <div class="card-body">
                                      <h6 class=" card-text">DIGITAL COMICS</h6>
                                   </div>
                              </div>
                            </div>
                        </div>
                    </div>                    
                </div> 

                <div class="col">
                    <div class="card d-flex justify-center bg-primary ">
                        <div class="card mb-3" style="max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-md-4 bg-primary">
                                    <img class="img-card height-100px bg-primary" style="max-width: 100px;"alt="" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                                </div>
                              <div class="col-md-8">
                                  <div class="card-body">
                                      <h6 class=" card-text">DIGITAL COMICS</h6>
                                   </div>
                              </div>
                            </div>
                        </div>
                    </div>                    
                </div> 

                <div class="col">
                    <div class="card d-flex justify-center bg-primary ">
                        <div class="card mb-3" style="max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-md-4 bg-primary">
                                    <img class="img-card height-100px bg-primary" style="max-width: 100px;"alt="" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                                </div>
                              <div class="col-md-8">
                                  <div class="card-body">
                                      <h6 class=" card-text">DIGITAL COMICS</h6>
                                   </div>
                              </div>
                            </div>
                        </div>
                    </div>                    
                </div> 

                <div class="col">
                    <div class="card d-flex justify-center bg-primary ">
                        <div class="card mb-3" style="max-width: 300px;">
                            <div class="row g-0">
                                <div class="col-md-4 bg-primary">
                                    <a href="{{ url('partials/info') }}">
                                        <img class="img-card height-100px bg-primary" style="max-width: 100px;"alt="" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                                    </a>                                   
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class=" card-text">DIGITAL COMICS</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>

            </div>

    </div> 
    </section>
    @endsection
