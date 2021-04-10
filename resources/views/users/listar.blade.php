<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>