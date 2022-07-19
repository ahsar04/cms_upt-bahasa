<!DOCTYPE html>
<html>
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/img/logo_polije.png')}}">

  <head>
    <title>Bukti Pendaftaran | UPT - Bahasa Polije</title>
  </head>
  <style>
    .size {
        font-size: 24px;
    }
  </style>
  <body>
    <h2 align="center"></h1>
        @foreach ($registraining as $item)
            
    <table align="center" border="1">
        <tr>
            <td>
                <table align="center">
        <tr>
            <td width="120" align="center"> <img style="width: 80px; height: 80px;" src="{{url('frontend/img/logo_polije.png')}}" alt=""></td>
        <td >
            <p><strong class="size">Bukti Pendaftaran</strong><br>
                UPT - Bahasa Politeknik Negeri Jember <br>
            2022</p>
        </td>
            <td width="120" align="center">{!!QrCode::size(80)->generate($item->id_training_registration)!!}</td>
        </tr>
        <tr>
            <td colspan="5"><hr></td>
        </tr>
        <tr>
            <td colspan="3">
            <table>
                <tr height="35">
                <td>Nama</td>
                <td>:</td>
                <td>{{$item->name}}</td>
                <td rowspan="6" align="center" width="100">
                    <img src="{{url('img/users/'.$item->pas_photo)}}" width="150px" height="200px" />
                </td>
                </tr>
                <tr height="35">
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>@if ($item->gender=='M')Laki-laki
                        
                    @elseif($item->gender=='F')Perempuan
                        
                    @endif
                </td>
                </tr>
                <tr height="35">
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>{{$item->place_of_birth}}, {{$item->date_of_birth}}</td>
                </tr>
                <tr height="35">
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>{{$item->last_education}}</td>
                </tr>
                <tr height="35">
                <td>No Telephone</td>
                <td>:</td>
                <td>{{$item->phone}}</td>
                </tr>
                <tr height="35">
                <td>Email</td>
                <td>:</td>
                <td>{{$item->email}}</td>
                </tr>
                <tr height="35">
                <td>Alamat</td>
                <td>:</td>
                <td rowspan="4" width="400">
                    {{$item->address}}
                </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                <td colspan="5"><hr></td>
                </tr>
                <tr height="35">
                <td>Layanan</td>
                <td>:</td>
                <td>{{$item->service_type}}</td>
                <td><strong>Tanggal Kegiatan : {{$item->excercise_date}}</strong></td>
                </tr>
                <tr height="35">
                <td>Pelatihan</td>
                <td>:</td>
                <td>{{$item->training}}</td>
                </tr>
                <tr height="35">
                <td>Tempat Pelaksanaan</td>
                <td>:</td>
                <td>Gedung UPT-Bahasa POLIJE</td>
                </tr>
                <tr height="35">
                <td colspan="5"><hr></td>
                </tr>
                <tr height="35">
                <td colspan="5">
                    <strong>PERLENGKAPAN YANG HARUS DIBAWA PADA SAAT UJIAN</strong>
                    <ul>
                        <li>Niat dan keteguhan hati yang kuat</li>
                        <li>Kartu bukti pendaftaran ini</li>
                        <li>Foto copy ijazan yang sudah dilegalisir</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, placeat?</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid magnam debitis, nulla nihil deserunt fugit facilis. Iure quia ducimus suscipit!</li>
                    </ul>
                </td>
                </tr>
            </table>
            </td>
        </tr>
        </table>
            </td>
        </tr>
    </table>
    @endforeach
  </body>
  <script>
    window.print();
  </script>
</html>
