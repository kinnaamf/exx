<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="bg-[#0a0a0a] min-h-screen min-w-screen">
        <img src="{{ asset('images/background.png') }}" alt="" class="opacity-5 h-screen w-full absolute">
        @foreach($items as $item)
            <div class="text-white">
                <p>{{ $item->name }}</p>
                <p>{{$item->price}}</p>
                <img src="{{asset($item->imageUrl)}}" alt="">
            </div>
        @endforeach
    </div>
    @foreach($sliderImages as $image)
        <img src="{{$image}}" alt="">
    @endforeach
</body>
</html>
