<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
    <div style="text-align: center;">
      <h5 align="center" class="card-title" style="margin-top: 30px;">PT. Bali Internasional Teknologi <br><p style="font-size: 10px">Data Login Customer</p></h5>
      <hr>
      <br>
      <h1>{{$emailDataLogin['title']}}</h1>
      <p style="text-align: justify;"> Yang terhormat Bapak/Ibu {{$emailDataLogin['nama']}}, <br><br>Terima kasih telah menjadi customer kami, silahkan gunakan data login berikut untuk memantau progres aplikasi anda pada sistem, <br><br><br>
        username    : {{$emailDataLogin['username']}}<br>
    password    : {{$emailDataLogin['password']}}</p>
    <br>
    <p style="text-align: justify;"> Jangan berikan data login ini kepada siapapun <br><br>
        <hr>
        <h5 align="center" class="card-title" style="margin-top: 30px;">Copyright I Made Yoga Arimbawa | 2021 </h5>
    </div>
</body>
</html>