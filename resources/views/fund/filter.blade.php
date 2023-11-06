@extends('layouts.app')
@section('content')

<h1>Filter Results</h1>

<form action="{{ route('fund.filter') }}" method="GET">
    <select name="category">
        <option value="">All Categories</option>
        @foreach ($categories as $category)
            <option value="{{ $category->name }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <select name="subcategory">
        <option value="">All Subcategories</option>
        @foreach ($subcategories as $subcategory)
            <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
        @endforeach
    </select>

    <button type="submit">Filter</button>
</form>

@if ($funds->count() > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">ISIN</th>
                <th scope="col">WKN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funds as $fund)
                <tr>
                    <td>{{ $fund->id }}</td>
                    <td>{{ $fund->name }}</td>
                    <td>{{ $fund->isin }}</td>
                    <td>{{ $fund->wkn }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No funds found.</p>
@endif
@endsection