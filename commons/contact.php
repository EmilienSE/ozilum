  <section id="contact" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Contactez-moi</h2>

          <form id="contactForm" method="post">
            <div class="form-inline d-flex">
              <label for="inputPrenom" class="d-none" id="labelPrenom">Votre prénom</label>
              <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3" id="inputPrenom" name="inputPrenom" placeholder="Votre prénom" aria-labelledby="labelPrenom" required>
              <label for="inputNom" class="d-none" id="labelNom">Votre nom</label>
              <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3" id="inputNom" name="inputNom" placeholder="Votre nom" aria-labelledby="labelNom" required>
            </div>
            <div class="form-inline d-flex">
              <label for="inputEmail" class="d-none" id="labelEmail">Votre adresse mail</label>
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3" id="inputEmail" name="inputEmail" placeholder="Votre adresse mail" aria-labelledby="labelEmail" required>
              <label for="inputPhone" class="d-none" id="labelPhone">Votre numéro de téléphone</label>
              <input type="tel" class="form-control flex-fill mr-0 mr-sm-2 mb-3" id="inputPhone" name="inputPhone" placeholder="Votre numéro de téléphone" pattern="[0-9]{10}" aria-labelledby="labelPhone" required>
            </div>
            <div class="form-inline d-flex">
              <label for="inputMessage" class="d-none" id="labelMessage">Votre message</label>
              <textarea class="form-control flex-fill mr-0 mr-sm-2 mb-3" id="inputMessage" name="inputMessage" placeholder="Votre message" aria-labelledby="labelMessage" required></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary mx-auto mb-3">Envoyer</button>
          </form>
          <div id="form-message">
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <a href="https://goo.gl/maps/R2qZuzXJSVS2" target="_blank">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Adresse</h4>
                <hr class="my-4">
                <div class="small text-black-50">11bis rue de la Chapelle<br/>49140, Seiches-sur-le-Loir</div>
                <meta name="og:street-address" content="11bis rue de la Chapelle"/>
                <meta name="og:postal-code" content="49140"/>
                <meta name="og:locality" content="Seiches-sur-le-Loir"/>
                <meta name="og:country-name" content="France"/>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <a href="mailto:anne.charrier@ozilum.fr">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  anne.charrier@ozilum.fr
                  <meta name="og:email" content="anne.charrier@ozilum.fr"/>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <a href="tel:0631689606">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Téléphone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+33 6 31 68 96 06</div>
                <meta name="og:phone_number" content="+33-6-31-68-96-06"/>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>