<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('mails.userchk')}}" method="POST">
        @csrf
        <label for="mailAddress">email : </label>
        <input type="text" id="mailAddress" name="mailAddress">
        <br>
        <button type="submit">인증요청</button>
    </form>


</body>
</html>