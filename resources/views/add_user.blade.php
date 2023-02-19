<h1>Add User</h1>
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <input type="text" name="nama"><br>
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Simpan</button>
</form>