<!DOCTYPE html>
<html>

<head>
    <title>Form Ubah User</title>
</head>

<body>
    <h1>Form Ubah User</h1>
    <form method="POST" action="{{ route('ubah_simpan', ['id' => $data->user_id ]) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
        <br>

        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama}}">
        <br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" value="{{ $data->password }}">
        <br>

        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->level_id }}">
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Ubah">

    </form>
</body>

</html>
