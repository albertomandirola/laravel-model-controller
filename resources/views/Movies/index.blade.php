@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex w-100 flex-wrap gap-3">
                    @foreach ($movies as $movie)
                        <div class="card" style="width: calc(20% - 20px);">
                            <img src="https://lh3.googleusercontent.com/proxy/8ejz6FPlFYQJFaKfGfUq7ViLV2kTn6QmIA811VX1oZjgFCCdef1wK34FL4xIf_wIqxynET-E0VSN8VkAqgh3FxjqZwv3hc0zmOVmfl3mEEiSkHrWc4wxWpD8_W6n68m4vM6LnyoT22Q"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->original_title }}</h5>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Nazionalità produttore:
                                    </strong>{{ $movie->nationality }}</li>
                                <li class="list-group-item"><strong>Data di uscita: </strong>{{ $movie->date }}</li>
                                <li class="list-group-item"><strong>Voto: </strong>{{ $movie->vote }}</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Link allo streaming</a>
                                <a href="#" class="card-link">Maggiori info</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
