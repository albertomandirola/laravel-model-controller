@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    premere il pulsante per caricare la lista di film:
                    <a href="{{ Route('movies') }}" class="btn btn-success">cliccami</a>
                </div>
            </div>
        </div>
    </div>
@endsection
