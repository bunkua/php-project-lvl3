@extends('layouts.app')

@section('content')
    <div class="list-group">
        @foreach($domains as $domain)
            <a href="{{ route('domains.show', $domain->id) }}" type="button" class="list-group-item list-group-item-action">{{ $domain->name }}</a>
        @endforeach
    </div>
@endsection
