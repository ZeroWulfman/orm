@extends('layout')

@section('title')
    Card
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>This is a card</h1>
            <h3>{{$card->title}}</h3>
            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">{{$note->body}}<a href="{{route('editor', $note->id)}}"><button class="btn btn-primary" type="button" style="float: right" name="button">Edit</button></a></li><br>
                @endforeach
            </ul>
            <hr>
            <form method="post" action="/cards/{{$card->id}}/notes">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a New Note</button>
                </div>
            </form>
        </div>
    </div>
@endsection
