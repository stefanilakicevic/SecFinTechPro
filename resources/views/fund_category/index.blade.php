@extends('layouts.app')
@section('content')

<form action="{{ route('fund.export.pdf') }}" method="get">
    <button type="submit" class="btn btn-primary">Download PDF</button>
</form>

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Fund categories') }}</div>
    
        <div class="card-body">
                <table class="table table-striped table-bordered"> 
                    <thead>
                        <tr>
                            <th scope="col">{{ __('ID') }}</th> 
                            <th scope="col">{{ __('Name') }}</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $g)
                            <tr>
                                <td>{{ $g->id }}</td>
                                <td>{{ $g->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>

@endsection
