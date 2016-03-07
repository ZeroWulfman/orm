@extends('layout')

@section('content')
    <h1>Edit the Note</h1>
    <form method="post" action="{{route('notesedit', $note)}}">
        {{method_field('PATCH')}}
        <div class="form-group">
            <textarea name="body" class="form-control">{{$note->body}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Note</button>
            <a class="btn btn-primary" href="{{route('show',$note->card_id)}}">Cancel</a>
        </div>
    </form>
@endsection
