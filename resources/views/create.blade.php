<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/store" method="POST">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
    <button type="submit">Post</button>
</form> 


</body>
</html>