<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/update/{{ $Blog->id }}" method="POST">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{ $Blog->name }}">
  <br>
    <button type="submit">Edit</button>
</form> 


</body>
</html>