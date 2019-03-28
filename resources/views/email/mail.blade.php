<body style='font-size: 14px; color:black;'>
    <p>Hello!</p>
    <p>The reason i'm writing to you is {{$data['reason']}}.</p>
    <p>{{$data['message']}}</p>
    <p>Best regards,<br>{{$data['name']}}.</p>
    <br>
    <p>From: {{$data['name']}}, {{$data['email']}}.</p>
</body>
