@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('User fund') }}</div>
    
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">{{ __('id') }}</th> 
                <th scope="col">{{ __('user_id') }}</th>
                <th scope="col">{{ __('fund_id') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data as $g)
                <tr>
                    <td>{{ $g->id}}</td>
                    <td>{{ $g->user_id }}</td>
                    <td>{{ $g->fund_id }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection