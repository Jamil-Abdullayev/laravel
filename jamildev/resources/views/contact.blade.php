@extends('layouts.app')

@section('title-block') Contact @endsection

@section('content')
    <h1>Contact </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur porro quam quia quod?
        Aperiam aut culpa dolores id itaqueLorem ipsum dolor sit amet, consectetur adipisicing elit.
        Assumenda consectetur porro quam quia quod? Aperiam aut culpa dolores id itaque, molestias necessitatibus nis
        i officiis omnis perspiciatis quis repellendus, sequi voluptate?
        , molestias necessitatibus nisi officiis omnis perspiciatis quis repellendus, sequi voluptate?</p>

    <form action="{{route('contact-form')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" value="" placeholder="enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Email: </label>
            <input type="text" name="email" value="" placeholder="enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Subject: </label>
            <input type="text" name="subject" value="" placeholder="enter subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Message: </label>
            <textarea class="form-control" placeholder="Enter your Message" name="message" id="message" cols="20" rows="10"></textarea>
         </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
<br>
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
