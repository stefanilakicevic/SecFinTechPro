@extends('layouts.app')

@section('content')
foreach ($favorites as $favorite)
    <div class="favorite-item">
        <h3>{{ $favorite->fund->name }}</h3>
        <form method="POST" action="{{ route('favorites.remove', $favorite->fund->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Remove from Favorites</button>
        </form>
    </div>
@endforeach
@endsection