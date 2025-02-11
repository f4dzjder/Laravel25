<h1 align=center>Tabel kategori</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>

<table border='1'align=center>    
    <tr>
        <td>ID KATEGORI</td>
        <td>NAMA</td>
        <td>EDIT</td>
        <td>HAPUS</td>
    </tr>

    @foreach ($kategori as $a)
    
    <tr>
        <td>{{$a->idkategori}}</td>
        <td>{{$a->nama}}</td>
        <td>
            <a href="/kategori/{{$a->idkategori}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/kategori/{{$a->idkategori}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>

    @endforeach

</table>

<a href="/kategori/tambah">tambah data coy</a>

{{$kategori->links()}}
