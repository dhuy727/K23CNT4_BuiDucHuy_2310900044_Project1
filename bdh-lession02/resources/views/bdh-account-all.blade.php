<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bdh - danh sách tài khoản</title>
</head>
<body>
    <section>
        <h1>Bdh - Danh sách tài khoản</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>FullName</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0
                @endphp
                    
                @endphp
                @foreach ($model as $item)
                @php
                    $stt++
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item["bdh_id"]}}</td>
                        <td>{{$item["bdh_username"]}}</td>
                        <td>{{$item["bdh_password"]}}</td>
                        <td>{{$item["bdh_fullname"]}}</td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </section>
</body>
</html>