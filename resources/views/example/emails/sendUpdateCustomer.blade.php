<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
    <div style="text-align: center;">
      <h5 align="center" class="card-title" style="margin-top: 30px;">PT. Bali Internasional Teknologi <br><p style="font-size: 10px">{{$emailUpdateItem['title']}}</p></h5>
      <hr>
      <br>
      <h1>Halo {{$emailUpdateItem['nama_programmer']}}</h1>
      <p style="text-align: justify;"> Yang terhormat Bapak/Ibu programmer {{$emailUpdateItem['nama_programmer']}}, <br><br>Terima kasih atas kerjasamanya pada project {{$emailUpdateItem['project_name']}}, saya sebagai customer {{$emailUpdateItem['nama_customer']}}, {{$emailUpdateItem['title']}} sebesar {{$emailUpdateItem['presentase']}}% yaitu pada:<br><br><br>
        Project    : {{$emailUpdateItem['project_name']}}<br>
        Item       : {{$emailUpdateItem['item_name']}}<br>
    Alasan     : {{$emailUpdateItem['alasan']}}</p>
    <br>
    <p style="text-align: justify;"> Silahkan cek pada sistem untuk lebih jelas, terimakasih<br><br>
        <p style="text-align: justify;"> Salam hormat, <br><br>
            <p style="text-align: justify;"> {{$emailUpdateItem['nama_customer']}} <br><br>
                <hr>
                <h5 align="center" class="card-title" style="margin-top: 30px;">Copyright I Made Yoga Arimbawa | 2021 </h5>
            </div>
        </body>
        </html>