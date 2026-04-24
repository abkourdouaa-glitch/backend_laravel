<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="my-3 d-flex justify-content-between">
            <h2>Lists des clients</h2>
            <a class="btn btn-primary" href="{{ route('client.create') }}">+ Ajouter client</a>
        </div>
        <table class="table m-3">
             <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Password</th>
                <th>Type</th>
                <th>Image</th>
                <th>Actions</th>
             </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="d-flex">
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success mx-2">Update</button>
                    <button class="btn btn-warning">Show</button>
                </td>
             </tr>
        </table>
    </div>

    
</body>
</html>