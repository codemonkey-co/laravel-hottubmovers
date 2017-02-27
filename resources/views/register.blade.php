<form method="POST" action="register">
{{ csrf_field() }}
<input name="name" placeholder="name">
<input name="username" placeholder="username">
<input name="email" placeholder="email">
<input type="password" name="password" placeholder="password">
<button type="submit">Submit</button>
</form>