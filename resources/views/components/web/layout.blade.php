<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <style>
      :root {
          --primary-color: #F97330;
          --shadow-primary-color: #db6530;
          --secondary-color: #FEF1EA;
          --green-color: #81BF52;
          --grey-color: #666666;
          --lightgrey-color: #FAFAFA;
      }
      
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    
    .btn-primary:hover {
      background-color: var(--shadow-primary-color);
      border-color: var(--shadow-primary-color);
    }
    
    .btn-secondary {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
        color: var(--primary-color);
    }

    .btn-secondary:hover {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      color: var(--secondary-color);
    }

    .text-primary {
      color: var(--primary-color) !important;
    }
    
    a.text-primary:hover {
      color: var(--shadow-primary-color) !important;
    }
    
    .text-green {
      color: var(--green-color) !important;
    }

    .text-grey {
      color: var(--grey-color) !important;
    }

    .bg-primary {
      background-color: var(--primary-color) !important;
      color: var(--secondary-color) !important;
    }

    .bg-lightgrey {
      background-color: var(--lightgrey-color) !important;
    }

    .font-nunito {
      font-family: Nunito;
    }
  </style>
  </head>
  <body>

    <x-web.header/>
    {{$slot}}
    <x-web.footer/>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>