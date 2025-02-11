<form action="/kampus/masukan" method="POST">
    @csrf
    <input type="text" name="idkampus" placeholder="idkampus"><br>
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="alamat" placeholder="alamat"><br>
    <input type="text" name="idkategori" placeholder="idkategori"><br>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>