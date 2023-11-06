<h1>Search Results</h1>
<ul>
    @foreach ($results as $result)
        <li>{{ $result->name }} (ISIN: {{ $result->isin }}, WKN: {{ $result->wkn }})</li>
    @endforeach
</ul>