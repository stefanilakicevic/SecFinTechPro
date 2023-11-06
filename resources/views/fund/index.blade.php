@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('fund.search') }}" method="GET" class="form-inline">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Pretraži po imenu, ISIN-u ili WKN-u">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
        <form action="{{ route('fund.export.pdf') }}" method="get">
            <button type="submit" class="btn btn-primary">Download PDF</button>
        </form>


    <div class="card">
        <div class="card-header">{{ __('Fund') }}</div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">{{ __('ID') }}</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('fund_category_id') }}</th>
                        <th scope="col">{{ __('fund_sub_category_id') }}</th>
                        <th scope="col">{{ __('ISIN') }}</th>
                        <th scope="col">{{ __('WKN') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $g)
                        <tr>
                            <td>{{ $g->id }}</td>
                            <td>{{ $g->name }}</td>
                            <td>{{ $g->fund_category_id }}</td>
                            <td>{{ $g->fund_sub_category_id }}</td>
                            <td>{{ $g->isin }}</td>
                            <td>{{ $g->wkn }}</td>
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