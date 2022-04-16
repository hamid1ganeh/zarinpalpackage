<html>
<title>payment title</title>
<body>
    <p>you'r merchant ID is :<span style="color:red;">{{ $merchantID }}</span></p>
    @foreach ($value as $item)
        <h1>{{ $item }}</h1>

    @endforeach
    <h1>test package</h1>
</body>
</html>
