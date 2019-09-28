 <div class="row section-title">Activité sport</div>

    <div class="row">

      <div class="col">
        <a class="twitter-timeline" data-width="250" data-height="777" href="https://twitter.com/lequipe?ref_src=twsrc%5Etfw"></a>
      </div>

      <div class="col-sm-7 ">
        <div class="row text">
          <a>Nous organisons des tournois sportifs !</a>
          <img src="images/tournoi-foot.jpg" class="img-thumbnail foot" />
          <a>de foot !!</a>
        </div>
        <div class="row text">
          <img src="images/tournoi-basket.jpg" class="img-thumbnail basket" />
          <a> De Basket !!</a>
        </div>

        <div class="row" contact>
          <div class="col-md-6 ">
            <div class="well well-sm">
              <form class="form-horizontal" onsubmit="return verifForm(this)" action="" method="post">
                <fieldset>
                  <legend class="text-center">Contactez nous !</legend>

                  <!-- Name input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Nom</label>
                    <div class="col-md-9">
                      <input id="name" name="name" type="text" placeholder="Votre nom" class="form-control" required>
                    </div>
                  </div>

                  <!-- Email input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Ton email</label>
                    <div class="col-md-9">
                      <input id="email" name="email" type="text" placeholder="Votre email" size="30" class="form-control" onblur="verifMail(this)" required>
                    </div>
                  </div>

                  <form method="post" action="traitement.php">
                   <p>
                     <label for="Region">A quel sexe appartient votre enfant ?</label><br />
                     <select name="sexe" id="sexe">
                       <option value="...">...</option>
                       <option value="Masculin">Masculin</option>
                       <option value="Féminin">Féminin</option>
                     </select>
                   </p>
                 </form>                  
                 <form method="post" action="traitement.php">
                   <p>
                    <label>Cochez le sport qui vous interesse :</label><br />

                    <div class="row bouton">
                     <input type="checkbox" name="Foot" id="Foot" > <label for="Foot">Foot</label><br />
                     <input type="checkbox" name="Basket" id="Basket" /> <label for="Basket">Basket </label><br />

                     <input type="checkbox" name="Volley" id="Volley" /> <label for="Volley">Volley </label><br />
                     <input type="checkbox" name="Hand" id="Hand" /> <label for="Hand">Hand </label></div>
                   </p>
                 </form>

                 <!-- Message body -->
                 <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Ton message</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message" placeholder="Entrez votre message" rows="5" required></textarea>
                  </div>
                </div>

                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Soumettre</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <a class="twitter-timeline rmc" data-width="250" data-height="777" href="https://twitter.com/RMCsport?lang=fr"></a>
    </div>
	
	
  <script src="./public/js/contact-sport.js"></script>
