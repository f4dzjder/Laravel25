<h1 align=center>Tabel info</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>

<table border='1'align=center>    
    <tr>
        <td>ID INFO</td>
        <td>JUDUL</td>
        <td>TANGGAL</td>
        <td>ID KAMPUS</td>
        <td>EDIT</td>
        <td>HAPUS</td>
    </tr>

    @foreach ($info as $a)
    
    <tr>
        <td>{{$a->idinfo}}</td>
        <td>{{$a->judul}}</td>
        <td>{{$a->tanggal}}</td>
        <td>{{$a->idkampus}}</td>
        <td>
            <a href="/info/{{$a->idinfo}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/info/{{$a->idinfo}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>

    @endforeach

</table>

<a href="/info/tambah">tambah data coy</a>

{{$info->links()}}
