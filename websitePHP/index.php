<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap  -->

  <!-- localcss -->
  <link rel="stylesheet" type="text/css" href="./style.css">
  <!-- localcss -->
  <title>website</title>

</head>

<body>
<nav class="navbar navbar-expand-lg  sticky-top bg-info  navbar-light bg-nav" aria-label="Tenth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <p class="m-auto px-2">Sarfaraz Deshwali.</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
    </svg>
    <div class="collapse navbar-collapse justify-content-end " id="navbarsExample08">
      <ul class="navbar-nav mx-md-auto me-5">

        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link "  href="#">Contact</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link "  href="#">About</a>
        </li> 
        <li class="nav-item mx-3">
          <a class="nav-link "  href="#">Skill</a>
        </li>
      </ul>
      <div class="text-end">
        <button type="button" class="btn btn-outline-dark me-3">Login</button>
        <button type="button" class="btn btn-warning me-1">Sign-up</button>
      </div>
    </div>
  </div>
 </nav>


<div class=" mainbg position-relative overflow-hidden border-bottom shadow-sm  p-3 p-md-5 m-md-3 text-start">
  <div class="col-md-5 p-lg-5 me-auto my-5">
    <h1 class="display-4 fw-normal">Punny headline</h1>
    <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
    <a class="btn btn btn-outline-dark text-scondary" href="#">Coming soon</a>
  </div>
</div>


<div class="container px-4 py-5" id=" custom-cards">
  <h2 class=" fw-bold pb-2 ">About.</h2>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3"style="height: 450px;">
    <div class="col">
      <div class="card1 card-cover h-100 overflow-hidden  bg-dark rounded-5 shadow-lg">
        <div class="d-flex border border-5 border border-secondary flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-3 mt-5 mb-4 display-6 lh-1 text-light fw-bold">Journey of Goles</h2>
          <ul class="d-flex list-unstyled fw-bold mt-auto">
           <!--  <li class="me-auto">
              <img src="https://github.com/twbs.png" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
           </li>-->
           <li class="d-flex align-items-center me-3">
             <!--  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>-->
             <button type="button" class="btn btn-light opacity-75 fw-bold text-dark">Info</button>
           </li>
             <!-- <li class="d-flex align-items-center">
                <small>3d</small>
              </li>-->
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card2 card-cover h-100 overflow-hidden  bg-dark rounded-5 shadow-lg">
          <div class="d-flex border border-5 border border-secondary flex-column h-100 p-5 pb-3  text-shadow-1">
            <h2 class="pt-5 mt-4 mb-4 display-6 lh-1 text-light fw-bold">Hobies</h2>
            <ul class="d-flex list-unstyled mt-auto">
             <!--  <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
              </li> -->
              <li class="d-flex align-items-center me-3">
               <!--<svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>  -->
               <button type="button" class="btn btn-light opacity-75 fw-bold text-dark">Info</button>
             </li>
              <!--<li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>-->
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card3 card-cover h-100 overflow-hidden bg-dark rounded-5 shadow-lg">
          <div class="d-flex border border-5 border border-secondary flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-4 mb-4 display-6 lh-1 text-light fw-bold">Blogs</h2>
            <ul class="d-flex list-unstyled mt-auto">
             <!-- <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32"> 
              </li>-->
              <li class="d-flex align-items-center me-3">
                <!--<svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg> -->
                <button type="button" class="btn btn-light opacity-75 fw-bold text-dark">Info</button>
              </li>
              <!--<li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




</body>
</html>
