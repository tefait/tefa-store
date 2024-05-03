<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                @if ($user->userinfo_id != null)
                    <td>{{ $user->userinfo->alamat }}</td>
                    <td>{{ $user->userinfo->kota }}</td>
                    <td>{{ $user->userinfo->kecamatan }}</td>
                    <td>{{ $user->userinfo->kodepos }}</td>
                @endif
                <td>{{ $user->peran() }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
