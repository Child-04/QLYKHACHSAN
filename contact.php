<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N5 Hotel - Contact</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body class ="bg-light">
  <?php require('inc/header.php'); ?>
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
      Quos, quaerat? Impedit, amet et! Amet nobis,<br> eum temporibus expedita sunt porro? 
      Voluptatibus consectetur, incidunt reprehenderit excepturi suscipit consequatur eaque sequi? Dolor!
    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-44" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003454.8175597707!2d106.03575264850267!3d10.754096223002087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBI4buTIENow60gTWluaA!5e0!3m2!1svi!2s!4v1746790143294!5m2!1svi!2s" ></iframe>
            <h5>Address</h5>
            <a href="https://maps.app.goo.gl/RC2C6NuW1zEwzdnh7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
              <i class="bi bi-geo-alt-fill"></i> Ho Chi Min City
            </a>
            <h5 clas="mt-4">Call us</h5>
            <a href="tel: +84123456789" class="d-inline-block mb-2 tex-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +84123456789
            </a>
            <br>
            <a href="tel: +84123456789" class="d-inline-block tex-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +84123456789
            </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <span class="badge bg-light text-dark fs-6 p-2"> 
              <i class="bi bi-twitter me-1"></i>
            </span>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <span class="badge bg-light text-dark fs-6 p-2"> 
              <i class="bi bi-facebook me-1"></i>
            </span>
          </a>
          <a href="#" class="d-inline-block3 text-dark fs-5">
            <span class="badge bg-light text-dark fs-6 p-2"> 
              <i class="bi bi-instagram me-1"></i>
            </span>
          </a>
          <h5 class="mt-4">Email</h5>
          <a href="mailto: ask.abc@gmail.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> ask.abc@gmail.com
          </a>
          
         </div>
        </div>


        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <form>
              <h5>Send a message</h5>
              <div class="mb-3">
                <label class="form-label" style="font-weight:500;">Name</label>
                <input type="text" class="form-control shadow-none" >
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight:500;">Email</label>
                <input type="email" class="form-control shadow-none" >
              </div>
              <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Subject</label>
              <input type="text" class="form-control shadow-none" >
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight:500;">Message</label>
                <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
              </div>
              <button type="sumbit" class="btn text-white custom-bg mt-3">SEND</button>
            </form>
          </div>
        </div>
      


    </div>
  </div>
  <?php require('inc/footer.php'); ?>


</body>
</html>