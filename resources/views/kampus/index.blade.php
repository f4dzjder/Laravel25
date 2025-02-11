<h1 align=center>Tabel kampus</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>

<table border='1'align=center>    
    <tr>
        <td>ID KAMPUS</td>
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>ID KATEGORI</td>
        <td>EDIT</td>
        <td>HAPUS</td>
    </tr>

    @foreach ($kampus as $a)
    
    <tr>
        <td>{{$a->idkampus}}</td>
        <td>{{$a->nama}}</td>
        <td>{{$a->alamat}}</td>
        <td>{{$a->idkategori}}</td>
        <td>
            <a href="/kampus/{{$a->idkampus}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/kampus/{{$a->idkampus}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>

    @endforeach

</table>

<a href="/kampus/tambah">tambah data coy</a>

{{$kampus->links()}}
