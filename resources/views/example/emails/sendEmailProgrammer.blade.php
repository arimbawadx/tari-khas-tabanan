<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
    <!-- https://www.mynotescode.com/mengirim-email-localhost-atau-server-php/ -->
    <!-- <div style="float: left;margin-right: 10px;">
        <img src="cid:logo_mynotescode" alt="Logo" style="height: 50px">
    </div>
    <h2 style="margin-bottom: 0;">My Notes Code</h2>
    https://www.mynotescode.com
    <div style="clear: both"></div>
    <hr /> -->
    <div style="text-align: center;">
      <h5 align="center" class="card-title" style="margin-top: 30px;">PT. Bali Internasional Teknologi <br><p style="font-size: 10px">Data Login Programmer</p></h5>
      <hr>
      <br>
      <h1>{{$emailDataLogin['title']}}</h1>
      <p style="text-align: justify;"> Yang terhormat Kakak {{$emailDataLogin['nama']}}, <br><br>Silahkan gunakan data login berikut untuk memantau dan update progres pengerjaan aplikasi anda pada sistem, <br><br><br>
        username    : {{$emailDataLogin['username']}}<br>
    password    : {{$emailDataLogin['password']}}</p>
    <br>
    <p style="text-align: justify;"> Jangan berikan data login ini kepada siapapun <br><br>
        <hr>
        <h5 align="center" class="card-title" style="margin-top: 30px;">Copyright I Made Yoga Arimbawa | 2021 </h5>
    </div>
</body>
</html>