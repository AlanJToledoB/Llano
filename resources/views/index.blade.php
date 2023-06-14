<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista con Tailwind</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    .bg-custom {
      background-color: #020617;
    }

    .btn-custom {
      background-color: #1E293B;
      color: #FFFFFF;
    }

    .dropdown-menu {
      background-color: #1E293B;
    }

    .dropdown-item {
      color: #ffffff;
    }

    .dropdown-item:hover {
      background-color: #2a3952;
      color: #ffffff
    }
  </style>
</head>
<body class="bg-custom flex justify-center items-center h-screen">
  <div>
    <img src="https://ia902601.us.archive.org/34/items/zyro-image_202306/zyro-image.png" alt="Imagen" class="mx-auto w-1 w-48 pb-24">

    <div class="flex justify-center pb-52">
        <div class="dropdown">
            <button class="btn-custom px-4 py-2 mx-2 dropdown-toggle flex justify-center" type="button" id="planDeEstudioDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Plan de Estudio
            </button>
            <ul class="dropdown-menu" aria-labelledby="planDeEstudioDropdown">
                <li><a class="dropdown-item" href="{{ route('planDeEstudio.4to') }}">4to</a></li>
                <li><a class="dropdown-item" href="{{ route('planDeEstudio.5to') }}">5to</a></li>
                {{-- <li><a class="dropdown-item" href="{{ route('planDeEstudio.6to') }}">6to</a></li> --}}
            </ul>
        </div>
      <a href="#" class="btn-custom px-4 py-2 mx-2">Ingresar a la Inscripción</a>
      <a href="#" class="btn-custom px-4 py-2 mx-2">Ingresar a la plan</a>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>