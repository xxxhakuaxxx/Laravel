<html>
<head>
   <title>Jissyu/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <ol>
    @foreach($data as $item)
    @isset($item)
    <p>データ一覧</p>
    @endisset
    <li>No,{{$loop->iteration}}.{{$item}}</li>
    @empty($item)
    <p>ここまで出力</p>
    @endempty
    @endforeach
 </body>
</html>
