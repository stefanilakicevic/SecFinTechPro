@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My Favorite Funds</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($favorites as $favorite)
                    <tr>
                        <td>{{ $favorite->id }}</td>
                        <td>{{ $favorite->name }}</td>
                        <td>
                            <form action="{{ route('favorites.remove', $favorite) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">You have no favorite Funds.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection