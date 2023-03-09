<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>學生部</title>
</head>
<style>
    a {
        text-decoration: none;
        color: #00e;
    }
    a:hover{
        font-weight: bold;
        color: #e00;
    }
</style>
<body>
    <div style="text-align:center">
        {{-- <h1>Hello, {{ $name }}</h1> --}}
        {{-- <h1>Hello, {{ $data['name'] }}</h1> --}}
       {{-- <?= dd($data);?> --}}
    </div>
    
    <div style="text-align:center">
        <h2>這裡是學生部</h2>
        <a href="{{route('excel')}}">我是excel</a>
        <div>1231</div>
    </div>
    <div style="text-align:center">
        @foreach ($data as $item)
        <p>{{$item['name']}} - {{$item['age']}} - {{$item['mobile']}}</p>
        @endforeach

    </div>
    <div style="text-align:center">
        <a href="{{route('childPage')}}">child</a>
    </div>
    <div style="text-align:center">
        <a href="{{route('layput_p1')}}">layput_p1</a>
    </div>
    {{-- {{dd($data)}} --}}
</body>
</html>