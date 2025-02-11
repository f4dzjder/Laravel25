<h1>edit data</h1>
<form action="/kampus/{{$kampus->idkampus}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="idkampus" placeholder="ID kampus" value={{$kampus->idkampus}} disabled><br>
    <input type="text" name="nama" placeholder="Nama" value={{$kampus->nama}}><br>
    <input type="text" name="alamat" placeholder="Alamat" value={{$kampus->alamat}}><br>
    <input type="text" name="idkategori" placeholder="ID Kategori" value={{$kampus->idkategori}}><br>
    <input type="submit" name="submit" value="update">
</form>
