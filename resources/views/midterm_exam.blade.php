<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Laravel Features</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Feature Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->name }}</td>
                    <td>{{ $feature->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
