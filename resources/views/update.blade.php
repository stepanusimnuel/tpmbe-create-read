<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TPM</title>
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

      <form action="{{route('edit', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="" class="form-label">Nama</label>
          <input value="{{$data->nama}}" type="text" class="form-control" id="" aria-describedby="emailHelp" name="nama">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">NIM</label>
          <input value="{{$data->nim}}" type="text" class="form-control" id="exampleInputPassword1" name="nim">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fakultas</label>
            <select class="form-select" aria-label="Default select example" name="fakultas">
              @foreach ($fakultas as $f)
                <option value="{{$f->id}}" {{$data->id_fakultas == $f->id ? 'selected' : ''}}>{{$f->fakultas}}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Semester</label>
            <input value="{{$data->semester}}" type="number" class="form-control" id="" name="semester">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tanggal Lahir</label>
            <input value="{{$data->tgl_lahir}}" type="date" class="form-control" id="" name="tgl_lahir">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <input value="{{$data->alamat}}" type="text" class="form-control" id="" name="alamat">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" id="" name="image">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
