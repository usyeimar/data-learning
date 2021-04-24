<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form a method="POST">
    <h1>FORM</h1>
    <table>
        <tr>
            <td>
            <label>Url</label><br>
            <input type="text" name="url" placeholder="ingrese la url del sitio" required>
            </td>
            
        </tr>
       
        <tr>
            <td>
            <label>Descrilpcion</label><br>
            <input type="text" name="descripcion" placeholder="ingrese una leve descripcion" required>
            </td>
        </tr>

        <tr>
            <td>
            <label>Contraseña</label><br>
            <input type="text" name="contraseña" placeholder="ingrese la contraseña del sitio" required>
            </td>
        </tr>
        <tr>
            <td>
            <label>Usuario</label><br>
            <input type="text" name="usuario" placeholder="ingrese el usuario" required>
            </td>
        </tr>
        <tr>
            <td>
            <label>Fecha</label><br>
            <input type="date" name="fecha" placeholder="seleccione la fecha" required>
            </td>
        </tr>
        <tr>
            <td>
            <label>Email</label><br>
            <input type="text" name="email" placeholder="ingrese un email de registro en el sitio" required>
            </td>
        </tr>
    </table>

    <button type="submit">Enviar</button>


    </form>
    
</body>
</html>
