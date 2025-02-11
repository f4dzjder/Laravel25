<h1>edit data</h1>
<form action="/kategori/{{$kategori->idkategori}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="idkategori" placeholder="idkategori" value={{$kategori->idkategori}} disabled><br>
    <input type="text" name="nama" placeholder="nama" value={{$kategori->nama}}><br>
    <input type="submit" name="submit" value="update">
</form>