<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <title>Thi Trắc Nghiệm</title>
</head>
<body >
<div class="container-fluid w-75 mt-2">
    <nav>
        <ul class="nav nav-underline justify-content-end">
        <li class="nav-item">
            <a class="nav-link " href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="#">Bài Thi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Đề Thi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Hồ Sơ</a>
        </li>
        </ul>
    </nav>
 <header>
    <div id="carouselExampleIndicators" class="carousel slide mt-3">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://caodang.fpt.edu.vn/wp-content/uploads/Banner1-1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://caodang.fpt.edu.vn/wp-content/uploads/Banner-web-Chuyen-truong-Chuyen-hoc-phi-11.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-jOpy-CeNPrr2rEn1GMbPhqL5JgTnPsZE35SyqJQWpg&s" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
 </header>
<article>
<select class="form-select form-select-lg mb-3 mt-2" aria-label="Large select example">
  <option selected>Khoá</option>
  <option value="1">SP2024</option>
  <option value="2">SMALL2024</option>
  <option value="3">NEW2025</option>
  <option value="3">MALL2025</option>
  <option value="4">SP2025</option>
</select>

<select class="form-select form-select-sm" aria-label="Small select example">
  <option selected>Tiến độ bài</option>
  <option value="1">Sắp hết hạn</option>
  <option value="2">Gần hết hạn</option>
  <option value="3">Bài mới</option>
</select>

<select class="form-select form-select-sm mt-2" aria-label="Small select example">
  <option selected>Bài đang làm</option>
  <option value="1">SP2024</option>
  <option value="2">NEW2024</option>
  <option value="3">MG2024</option>
</select>

<div class="row d-flex">
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 20-04-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 90%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 25-04-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 70%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 30-04-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 60%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 10-05-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 35%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
</div>
<div class="row d-flex">
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 25-05-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 25%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 20-06-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 15%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 25-06-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 13%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
<div class="card col mt-4 justify-content-between" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">SP24_Hà Nội</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
    <p class="card-text">Thời gian kết thúc: 30-06-2024</p>
    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 10%"></div>
</div>
    <p class="d-inline-flex gap-1 mt-3">
     <button type="button" class="btn text-warning" disabled data-bs-toggle="button">Vào kì thi</button>
    </p>
  </div>
</div>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mt-3">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</article>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
</html>