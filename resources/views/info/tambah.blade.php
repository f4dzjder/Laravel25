<form action="/info/masukan" method="POST">
    @csrf
    <input type="text" name="idinfo" placeholder="idinfo"><br>
    <input type="text" name="judul" placeholder="judul"><br>
    <input type="text" name="tanggal" placeholder="tanggal"><br>
    <input type="text" name="idkampus" placeholder="idkampus"><br>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>