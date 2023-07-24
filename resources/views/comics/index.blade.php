@extends('layouts.app')

@section('content')   
    <section class=" pt-5">
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
@endsection