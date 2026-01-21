<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="padding: 40px; font-family: sans-serif;">
    <h1 style="color: #333;">Registrar Nuevo Estudiante</h1>
    
    <form action="{{ route('estudiantes.store') }}" method="POST" ... >
        @csrf <div style="margin-bottom: 15px;">
            <label>Nombre del Estudiante:</label><br>
            <input type="text" name="nombre" placeholder="Ej: Juan Pérez" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label>Código:</label><br>
            <input type="text" name="codigo" placeholder="Ej: 2024001" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label>Carrera:</label><br>
            <input type="text" name="carrera" placeholder="Ej: Ingeniería" required style="width: 100%; padding: 8px;">
        </div>

        <button type="submit" style="background: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
            Guardar Estudiante
        </button>
    </form>
    <form action="{{ route('estudiantes.store') }}" method="POST">
    @csrf
    <button type="submit" ...>Guardar Estudiante</button>
</form>

<hr style="margin: 40px 0; border: 1px solid #ddd;">

<h2 style="text-align: center; color: #333;">Estudiantes Registrados</h2>

<table style="width: 100%; border-collapse: collapse; margin-top: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <thead>
        <tr style="background-color: #4CAF50; color: white; text-align: left;">
            <th style="padding: 12px; border: 1px solid #ddd;">Nombre</th>
            <th style="padding: 12px; border: 1px solid #ddd;">Código</th>
            <th style="padding: 12px; border: 1px solid #ddd;">Carrera</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
            <tr style="background-color: #fff;">
                <td style="padding: 12px; border: 1px solid #ddd;">{{ $estudiante->nombre }}</td>
                <td style="padding: 12px; border: 1px solid #ddd;">{{ $estudiante->codigo }}</td>
                <td style="padding: 12px; border: 1px solid #ddd;">{{ $estudiante->carrera }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<hr style="margin: 40px 0;">

<h2>Estudiantes Registrados</h2>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 10px;">Nombre</th>
            <th style="padding: 10px;">Código</th>
            <th style="padding: 10px;">Carrera</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
            <tr>
                <td style="padding: 10px;">{{ $estudiante->nombre }}</td>
                <td style="padding: 10px;">{{ $estudiante->codigo }}</td>
                <td style="padding: 10px;">{{ $estudiante->carrera }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>