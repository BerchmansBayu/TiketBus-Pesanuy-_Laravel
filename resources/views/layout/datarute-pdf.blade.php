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

<h1>Data Rute</h1>

<table id="customers">
  <tr>
  <th>Nama Bus</th>
                            <th>Nama Terminal</th>
                            <th>Tanggal Berangkat</th>
                            <th>Tanggal Tiba</th>
                            <th>Waktu Berangkat</th>
                            <th>Waktu Tiba</th>
                            <th>Harga</th>
  </tr>
  @foreach($rute as $b)
  <tr>
                        <td>{{$b->Bus->nama_bus}}</td>
                        <td>{{$b->Terminal->nama_terminal}}</td>
                        <td>{{$b->tanggal_berangkat}}</td>
                        <td>{{$b->tanggal_tiba}}</td>
                        <td>{{$b->waktu_berangkat}}</td>
                        <td>{{$b->waktu_tiba}}</td>
                        <td>{{$b->harga}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
