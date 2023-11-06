@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('User') }}</div>
    
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">{{ __('id') }}</th> 
                <th scope="col">{{ __('name') }}</th>
                <th scope="col">{{ __('email') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data as $g)
                <tr>
                    <td>{{ $g->id}}</td>
                    <td>{{ $g->name }}</td>
                    <td>{{ $g->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection