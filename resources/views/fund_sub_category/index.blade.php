@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Fund sub categories') }}</div>
    
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">{{ __('id') }}</th>
                <th scope="col">{{ __('category_id') }}</th> 
                <th scope="col">{{ __('name') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data as $g)
                <tr>
                    <td>{{ $g->id}}</td>
                    <td>{{ $g->category_id}}</td>
                    <td>{{ $g->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $data->links() }} <!-- Prikazivanje linkova za paginaciju -->
        </div>
        </div>
    </div>
</div>

@endsection