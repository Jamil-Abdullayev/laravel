@extends('layouts.app')

@section('title-block') Contact @endsection

@section('content')
    <h1>Contact </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur porro quam quia quod?
        Aperiam aut culpa dolores id itaqueLorem ipsum dolor sit amet, consectetur adipisicing elit.
        Assumenda consectetur porro quam quia quod? Aperiam aut culpa dolores id itaque, molestias necessitatibus nis
        i officiis omnis perspiciatis quis repellendus, sequi voluptate?
        , molestias necessitatibus nisi officiis omnis perspiciatis quis repellendus, sequi voluptate?</p>
@endsection

@section('dop_content')
    <div class="jumbotron" style="background: grey">
        <div class="container">
            <div class="row">
                <h4>On this page you can contact with me :)</h4>
            </div>
        </div>
    </div>

@endsection

@section('aside')
    @parent
    <p>Infa dlya show v contact</p>
@endsection
