<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Pesanan</h1>

<table id="customers">
  <tr>
  <th>Nama Pengguna</th>
                            <th>Waktu Pesanan</th>
                            <th>Harga</th>
                            <th>Status</th>
  </tr>
  @foreach($pesanan as $b)
  <tr>
                        <td>{{$b->Pengguna->nama_pengguna}}</td>
                        <td>{{$b->waktu_pesanan}}</td>
                        <td>{{$b->Rute->harga}}</td>
                        <td>{{$b->status}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
