<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista con Tailwind</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .bg-custom {
      background-color: #020617;
    }

    .barra-superior {
      background-color: #192231;
      color: #FFFFFF;
    }

    .recuadro-pequeno {
      background-color: #192231;
      color: #FFFFFF;
    }

    .recuadro-grande {
      background-color: #192231;
      color: #FFFFFF;
    }

    .btn-volver {
      background-color: #1E293B;
      color: #FFFFFF;
      padding: 0.5rem 1rem;
      text-decoration: none;
      border-radius: 0.25rem;
      transition: background-color 0.3s ease;
    }

    .btn-volver:hover {
      background-color:  #27364e;
    }
  </style>
</head>
<body class="bg-custom">
  <div class="barra-superior px-4 py-2">
    <h1 class="text-center text-xl font-bold">Plan de estudio 5°1°</h1>
  </div>

  <div class="container mx-auto px-4 py-2 mt-4">
    <div class="recuadro-pequeno p-4">
      <h2 class="text-center font-bold">Materias</h2>
    </div>

    <div class="recuadro-grande mt-4 p-4">
      <ul class="list-disc list-inside">
        @foreach($planDeEstudio as $materia)
        <li>{{ $materia->materias_5to }}</li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="container mx-auto px-4 py-2 text-center">
    <a href="{{ route('llano.index') }}" class="btn-volver">Volver a Index</a>
  </div>
</body>
</html>