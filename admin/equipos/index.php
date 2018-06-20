<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	thead tr{
		background: red;
	}
	td{
		border:1px solid blue;
	}
</style>
<body>
	<h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      	<td><a href="">Visualizar</a></td>
      	<td><a href="">Editar</a></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><a href="">Visualizar</a></td>
      	<td><a href="">Editar</a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><a href="">Visualizar</a></td>
      	<td><a href="">Editar</a></td>
      </tr>
      <tr>
      	<td>Alex</td>
        <td>Darmon</td>
        <td>alexdary@example.com</td>
        <td><a href="">Visualizar</a></td>
      	<td><a href="">Editar</a></td>
      </tr>
    </tbody>
  </table>
  <input type="submit" value="Nuevo">
</body>
</html>
