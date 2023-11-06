@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Funds to Favorites</h1>
        @foreach ($funds as $fund)
            <div class="fund-item">
                <h3>{{ $fund->name }}</h3>
                @if (!$user->hasFavorite($fund))
                    <form method="POST" action="{{ route('favorites.add', $fund->id) }}">
                        @csrf
                        <button type="submit">Add to Favorites</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
@endsection