    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function alert(type, msg) {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
        <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
    document.body.append(element);
    }
    
    function setActive() {
      let navbar = document.getElementById('dashboard-menu');
      let a_tag = navbar.getElementsByTagName('a');

      let currentFile = window.location.pathname.split('/').pop();

      for (let i = 0; i < a_tag.length; i++) {
        let linkFile = a_tag[i].href.split('/').pop();

        if (linkFile === currentFile) {
          a_tag[i].classList.add('active');
        } else {
          a_tag[i].classList.remove('active'); 
        }
      }
    }

    setActive();

    </script>