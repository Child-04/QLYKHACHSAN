<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">N5 HOTEL</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Natus accusamus quos eum quod, deserunt dolorem delectus modi, 
        libero nihil ipsum maiores odio culpa consequuntur aut dolores? 
        A voluptatem ratione blanditiis.
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark tex-decoration-none">Home</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark tex-decoration-none">Rooms</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark tex-decoration-none">Facilities</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark tex-decoration-none">Contact us</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark tex-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block text-dark tex-decoration-none mb-2">
          <i class="bi bi-twitter me-1"></i>Twitter
      </a><br>
      <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark tex-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i>Facebook
      </a><br>
      <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark tex-decoration-none mb-2">
        <i class="bi bi-instagram me-1"></i>Instagram
      </a><br>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  function setActive()
  {
    let navbar = document.getElementById('nav-bar');
    let a_tag = navbar.getElementsByTagName('a');

    for(i=0; i<a_tag.length; i++)
    {

      let file = a_tag[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if(document.location.href.indexOf(file_name) >= 0){
        a_tag[i].classList.add('active');
      }

    }
  }

  setActive();
</script>