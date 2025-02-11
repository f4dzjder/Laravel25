<form action="/kategori/masukan" method="POST">
    @csrf
    <input type="text" name="idkategori" placeholder="idkategori"><br>
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>