@extends('layouts.homeMaster')
@section('title','Home')

<head>
    <link rel="stylesheet" href="css/home.css">
</head>

@section('content')
<div class="tulisanAkun">
    <span>Halo, </span>
    <span style="color:00A6A0;">Rafif!</span>
    <span class="kelolaAkun" style=" align:120px;float:right;font-size:15px;padding-top:2px;">
        <a href="#" class="btn btn-default btn-sm" style="background-color:#2A2E43;color:white;font-size:15px;border-radius: 10px;width:150px;height:35px" >
        Kelola Akun
        </a>
    </span>
</div>
<br>
<br>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <h4>Daftar Aset</h4>
      <br>
        <a href="#"><img src="https://i.ibb.co/r2CGdQR/screwdriver-and-wrench-crossed-1.png" alt="screwdriver-and-wrench-crossed-1" border="0"></a>
      <br>
      <p>
        <a href="#" class="btn btn-default btn-sm" style="background-color:#00A6A0;color:white;font-size:15px;border-radius: 25px;width:120px;  " >
           Lihat
        </a>
       </p>
    </div>
  </div>

 <div class="column">
    <div class="card">
      <h4>Daftar Vendor</h4>
      <br>
        <a href="#"><img src="https://i.ibb.co/kDh1v6h/market-store.png" alt="market-store" border="0"></a>
      <br>
      <p>
        <a href="#" class="btn btn-default btn-sm" style="background-color:#00A6A0;color:white;font-size:15px;border-radius: 25px;width:120px;  " >
           Lihat
        </a>
       </p>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <h4>Daftar Pegawai</h4>
      <br>
        <a href="#"><img src="https://i.ibb.co/yq1ZRf5/employee.png" alt="employee" border="0"></a>
      <br>
      <p>
        <a href="#" class="btn btn-default btn-sm" style="background-color:#00A6A0;color:white;font-size:15px;border-radius: 25px;width:120px;  " >
           Lihat
        </a>
       </p>
    </div>
  </div>

  <div class="column2">
    <div class="card">
      <h4>Daftar Paket Wedding</h4>
      <br>
      <a href="#"><img src="https://i.ibb.co/XDYTnRC/box.png" alt="box" border="0"></a>
      <br>
      <p>
        <a href="#" class="btn btn-default btn-sm" style="background-color:#00A6A0;color:white;font-size:15px;border-radius: 25px;width:120px;  " >
           Lihat
        </a>
       </p>
    </div>
  </div>

  <div class="column2">
    <div class="card">
      <h4>Daftar Pesanan</h4>
      <br>
      <a href="#"><img src="https://i.ibb.co/8M2vYFy/delivery-man.png" alt="delivery-man" border="0"></a>
      <br>
      <p>
        <a href="#" class="btn btn-default btn-sm" style="background-color:#00A6A0;color:white;font-size:15px;border-radius: 25px;width:120px;  " >
           Lihat
        </a>
       </p>
    </div>
  </div>

  <div class="column2">
    <div class="card">
      <h4>Daftar Aktivitas</h4>
      <br>
      <a href="#"><img src="https://i.ibb.co/sgwc6m1/list.png" alt="list" border="0"></a>
      <br>
      <p>
        <a href="#" class="btn btn-default btn-sm" style="background-color:#00A6A0;color:white;font-size:15px;border-radius: 25px;width:120px;  " >
           Lihat
        </a>
      </p>
    </div>
  </div>

</div>

@endsection

