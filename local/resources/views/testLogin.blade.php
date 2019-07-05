<form method="POST">
    {{ csrf_field() }}
    <input type="text" id="name" name="name">
    <input type="text" id="pass" name="pass">
    <input type="submit" name="submit">
</form>