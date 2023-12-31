<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('show')}}">Mahasiswa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('create')}}">Create</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h1>Data Mahasiswa</h1>
      <div>
          @foreach($mahasiswa as $mhs)
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <img src="{{asset('/storage/image/' . $mhs->image)}}" class="card-img-top" alt="{{$mhs->nama . '-' . $mhs->nim}}">
          <h5 class="card-title">{{$mhs->nama}} ({{$mhs-> nim}})</h5>
          <p class="card-text">{{$mhs->fakultas->fakultas}}</p>
          <p class="card-text">{{$mhs->tgl_lahir}}</p>
          <p class="card-text">Semester: {{$mhs->semester}}</p>
          <p class="card-text">{{$mhs->alamat}}</p>
          <a href="{{route('update', $mhs->id)}}" class="btn btn-warning">Edit Data</a>
          <form action="{{route('delete', $mhs->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Data</button>
        </form>
        </div>
        @endforeach
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
