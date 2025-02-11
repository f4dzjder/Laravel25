<h1>edit data</h1>
<form action="/info/{{$info->idinfo}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="idinfo" placeholder="ID Info" value={{$info->idinfo}} disabled><br>
    <input type="text" name="judul" placeholder="Judul" value={{$info->judul}}><br>
    <input type="text" name="tanggal" placeholder="Tanggal" value={{$info->tanggal}}><br>
    <input type="text" name="idkampus" placeholder="ID Kampus" value={{$info->idkampus}}><br>
    <input type="submit" name="submit" value="update">
</form>