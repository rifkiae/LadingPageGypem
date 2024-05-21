<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Cards</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    .container {
      padding: 20px;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .card {
      border: 1px solid #ddd;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card img {
      width: 100%;
      height: auto;
      display: block;
    }

    .pembungkus-teks {
      padding: 15px;
    }

    .pembungkus-teks h2 {
      font-size: 1.5em;
      margin: 0 0 10px;
    }

    .pembungkus-teks p {
      margin: 0 0 15px;
      color: #666;
    }

    .tombol {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .tombol:hover {
      background-color: #0056b3;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="card-container">
      @for ($i = 1; $i <= 16; $i++)
        <div class="card">
          <img src="landing-page/assets/img/images (3).jpg" class="card-img-top" alt="Gambar Kartu">
          <div class="pembungkus-teks">
            <h2>Olimpiade Sains #{{ $i }}</h2>
            <p>IFSO - SD Universitas 24 September 2024</p>
            <a href="#" class="tombol">Selengkapnya</a>
          </div>
        </div>
      @endfor
    </div>
  </div>
</body>
</html>
