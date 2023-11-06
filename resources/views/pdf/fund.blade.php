<!DOCTYPE html>
<html>
<head>
    <title>Fund Report</title>
</head>
<body>
    <h1>Fund Report</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>fund_category_id</th>
                <th>fund_sub_category_id</th>
                <th>ISIN</th>
                <th>WKN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $fund)
            <tr>
                <td>{{ $fund->id }}</td>
                <td>{{ $fund->name }}</td>
                <td>{{ $fund->fund_category_id }}</td>
                <td>{{ $fund->fund_sub_category_id }}</td>
                <td>{{ $fund->isin }}</td>
                <td>{{ $fund->wkn }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>