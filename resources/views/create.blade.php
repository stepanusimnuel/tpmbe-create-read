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
            </ul>
          </div>
        </div>
      </nav>

      <form action="{{route('store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Nama</label>
          <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="nama">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">NIM</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="nim">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Semester</label>
            <input type="number" class="form-control" id="" name="semester">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="" name="tgl_lahir">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="" name="alamat">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
