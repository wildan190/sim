@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Jadwal Mata Kuliah Prodi Sistem Informasi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Tambah Jadwal</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>Kode Dosen</th>
            <th>Jam</th>
            <th>Ruang Kelas</th>
            <th>Jumlah Mahasiswa</th>
            <th>Tanggal Mulai</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->kd_mkul }}</td>
            <td>{{ $post->nama_mkul }}</td>
            <td>{{ $post->kd_dosen }}</td>
            <td>{{ $post->jam }}</td>
            <td>{{ $post->ruang_kelas }}</td>
            <td>{{ $post->jumlah_mhs }}</td>
            <td>{{ $post->tanggal_mulai }}</td>
            <td class="text-center">
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $posts->links() !!}

    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

    
 
@endsection

