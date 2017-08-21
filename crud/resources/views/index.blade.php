<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
    </head>

	<h1>All Users</h1>


@if ($users->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
          <td>{{ $user->password }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->name }}</td>                    
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no users
@endif
