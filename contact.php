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
          <iframe class="w-100 rounded mb-44" height="320px" src="<?php echo $contact_r['iframe'] ?>" ></iframe>
            <h5>Address</h5>
            <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
              <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
            </a>

            <h5 clas="mt-4">Call us</h5>
            <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 tex-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
            </a>
            <br>
            <?php
              if ($contact_r['pn2'] !== '') {
                echo<<<data
                  <a href="tel: +$contact_r[pn2]" class="d-inline-block tex-decoration-none text-dark">
                  <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                  </a>
                data;
              }
            ?>
            
        </div>
        <div class="bg-white p-4 rounded mb-4">

          <h5>Follow us</h5>
          <?php 
            if ($contact_r['tw'] !== '') {
             echo<<<data
                  <a href="$contact_r[tw]" class="d-inline-block tex-decoration-none text-dark">
                  <i class="bi bi-twitter me-1"></i> 
                data;
              }
          ?>

          
          <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark fs-5 me-2">
            <span class="badge bg-light text-dark fs-6 p-2"> 
              <i class="bi bi-facebook me-1"></i> 
            </span>
          </a>
          <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block3 text-dark fs-5">
            <span class="badge bg-light text-dark fs-6 p-2"> 
              <i class="bi bi-instagram me-1"></i>
            </span>
          </a>
          <h5 class="mt-4">Email</h5>
          <a href="<?php echo $contact_r['email'] ?>" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?>
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
      

        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <form method="POST">
              <h5>Send a message</h5>
              <div class="mb-3">
                <label class="form-label" style="font-weight:500;">Name</label>
                <input name="name" required type="text" class="form-control shadow-none" >
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight:500;">Email</label>
                <input name="email" required type="email" class="form-control shadow-none" >
              </div>
              <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Subject</label>
              <input name="subject" required type="text" class="form-control shadow-none" >
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight:500;">Message</label>
                <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
              </div>
              <button type="submit" name="send" class="btn text-black custom-bg mt-3">SEND</button>
            </form>
          </div>
        </div>
      

      <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $conn = new mysqli("localhost", "root", "", "hotelwebsite");
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        function filteration($data) {
            foreach($data as $key => $val){
                $data[$key] = trim($val);
                $data[$key] = stripslashes($val);
                $data[$key] = htmlspecialchars($val);
            }
            return $data;
        }

        function insert($query, $values, $datatypes) {
            global $conn;
            $stmt = $conn->prepare($query);
            if ($stmt === false) return 0;

            $stmt->bind_param($datatypes, ...$values);
            return $stmt->execute() ? 1 : 0;
        }

        function alert($type, $msg) {
            $color = ($type == 'success') ? 'green' : 'red';
            echo "<script>alert('$msg');</script>";
        }

        if(isset($_POST['send']))
        {
            $frm_data = filteration($_POST);

            $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

            $res = insert($q, $values, 'ssss');
            if($res==1){
                alert('success', 'Mail sent!');
            }
            else{
                alert('error', 'Server Down! Try again later.');
            }
        }
    ?>



    </div>
  </div>
  <?php require('inc/footer.php'); ?>


</body>
</html>