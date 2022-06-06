<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Users</title>
        <style>
            #user {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #user td, #emp th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #user tr:nth-child(even) {
                background-color: #8F9AA5;
            }
            #user th {
                padding-top: 12px;
                padding-botton: 12px;
                text-align: left;
                background-color: #8F9AA5;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <table id="user">
            <thead>
                <tr>
                    <th scope="col">
                        Id
                    </th>
                    <th scope="col">
                        Name
                    </th>
                    <th scope="col">
                        Email
                    </th>
                    <th scope="col">
                        Access level
                    </th>
                    <th scope="col">
                        Account creation
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        @if ($user->access_level == 1)
                            Administrator
                        @else
                            User
                        @endif
                    </td>
                    <td>
                        {{ $user->created_at }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
