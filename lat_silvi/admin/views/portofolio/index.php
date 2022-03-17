<?php
require 'functions.php';
$user = mysqli_fetch_assoc($a);
$about = mysqli_fetch_assoc($b);

$project = data("SELECT * FROM project");

if(isset($_POST["submit"])){
    
   if(tambah($_POST) > 0){
        echo "
        <script>
        alert('Data berhasil dikirim');
        </script>
        ";
    } 
    else{
        echo "gagal terkirim";
    }
}
        
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="home">
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Ristianaa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#projects">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!--jumbotron-->
    <div class="jumbotron text-center">
      <img src="img/<?= $user["foto"];?>" alt="" width="250" height="250" class="rounded-circle img-thumbnail"./>
      <h1 class="display-4"><?= $user["nama"];?></h1>
      <p class="lead"><?= $user["jabatan"];?> | <?= $user["perusahaan"];?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,128L30,149.3C60,171,120,213,180,197.3C240,181,300,107,360,96C420,85,480,139,540,144C600,149,660,107,720,90.7C780,75,840,85,900,117.3C960,149,1020,203,1080,224C1140,245,1200,235,1260,218.7C1320,203,1380,181,1410,170.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
  </div>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="About">
      <div class="row text-center mb-3">
        <div class="col">
        <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p><?= $about["column1"];?></p>
          </div>
          <div class="col-md-4">
            <p><?= $about["column2"];?></p>
          </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="lightgreen" fill-opacity="1" d="M0,64L30,101.3C60,139,120,213,180,224C240,235,300,181,360,149.3C420,117,480,107,540,117.3C600,128,660,160,720,186.7C780,213,840,235,900,245.3C960,256,1020,256,1080,224C1140,192,1200,128,1260,106.7C1320,85,1380,107,1410,117.3L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg> 
    </section>
    <!-- Akhir About -->
    <!-- projects -->
         <section id="projects">
    <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2> My projects </h2>
           </div>
          </div>
        </div>
    <div class="container">
        <div class="row justify-content-center">
          <?php foreach( $project as $pro){ ?>


          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/<?= $pro["foto"];?>" class="card-img-top" alt="projects 1">
               <div class="card-body">
                <h2 class="display6"><?= $pro["nama_p"];?></h2>
                <p class="card-text"><?= $pro["ket"];?></p>
               </div>
            </div>
          </div>
       <?php } ?>
  </div>
   
     </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="lightgreen" fill-opacity="1" d="M0,128L24,122.7C48,117,96,107,144,101.3C192,96,240,96,288,122.7C336,149,384,203,432,197.3C480,192,528,128,576,128C624,128,672,192,720,208C768,224,816,192,864,186.7C912,181,960,203,1008,202.7C1056,203,1104,181,1152,165.3C1200,149,1248,139,1296,133.3C1344,128,1392,128,1416,128L1440,128L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
     <!-- akhir projects -->
     
     <!-- contact-->
     <section id="contact">
       <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Contact Me</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div id="col-md-6">
             <form action="" method="POST">
                <div class="mb-3">
                 <label for="email" class="form-label">Email address</label>
                 <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required/>
                 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
                <div class="mb-3">
                 <label for="nama" class="form-label">Nama Lengkap</label>
                 <input type="text" name="nama_k" class="form-control" id="nama" required/>
                </div>
               <div class="mb-3">
                <label for="pesan">Pesan</label>
               <textarea name="pesan" class="form-control" placeholder="Leave a comment here" id="pesan" style="height: 100px" required></textarea>
             </div>
                <button type="submit" name="submit" class="btn btn-success">Kirim</button>
            </form>
            </div>
          </div>
       </div>
      
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#198754" fill-opacity="1" d="M0,224L48,229.3C96,235,192,245,288,234.7C384,224,480,192,576,165.3C672,139,768,117,864,112C960,107,1056,117,1152,128C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
     </section>
     <!-- akhir contact>
     
     <!-- footer -->
      <footer class="bg-success text-white text-center pb-4">
        <p>Create With <i class="bi bi-heart-fill text-danger"></i> By <a href="https://www.instagram.com/rstna269" class="text-white fw-bold">rstna269</a></p>
      </footer>
     <!-- akhir footer -->
    
    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>