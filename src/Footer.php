  <div class="footer-clean">
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-6 col-md-8 item">
            <h4>Contact</h4>
            <ul>
              <br>
              <li><a href="https://mail.google.com/mail" target="_blank" id="emailLink1">Database Developer</a></li>
              <li><a href="https://mail.google.com/mail" target="_blank" id="emailLink2">Backend Developer</a></li>
              <li><a href="https://mail.google.com/mail" target="_blank" id="emailLink3">Frontend Developer</a></li>
              <li><a href="https://mail.google.com/mail" target="_blank" id="emailLink4">Content Searcher</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <h4>Project</h4>
            <ul>
              <br>
              <li><a href="https://github.com/MilitarySite/ArsenalFront" target="_blank">GitHub</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Altri script o elementi HTML -->

  <script>
    document.getElementById('emailLink1').addEventListener('click', function() {
      showAlert1();
    });
    document.getElementById('emailLink2').addEventListener('click', function() {
      showAlert2();
    });
    document.getElementById('emailLink3').addEventListener('click', function() {
      showAlert3();
    });
    document.getElementById('emailLink4').addEventListener('click', function() {
      showAlert4();
    });

    function showAlert1() {
      alert("Copia l'email: sappia.fulvio@polotecnologicoimperiese.it");
    }
    function showAlert2() {
      alert("Copia l'email: heinrich.kevin@polotecnologicoimperiese.it");
    }
    function showAlert3() {
      alert("Copia l'email: porro.matteo@polotecnologicoimperiese.it");
    }
    function showAlert4() {
      alert("Copia l'email: contri.marco@polotecnologicoimperiese.it");
    }
  </script>
</body>
</html>