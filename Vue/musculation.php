<section class="page-section cta">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">notre engagement</span>
                <span class="section-heading-lower">envers vous</span>
				
              </h2>
              <p class="mb-0">Venez decouvrir notre large gamme de produit divers et varié</p>
            </div>
          </div>
        </div>
    </section>
	
	<a class="twitter-timeline" data-width="100%" data-height="777" href="https://twitter.com/myproteinfr?lang=fr"></a>
	
	<section class="row">
		<img src="./public/images/intro.jpg" style=" height: 400px; width: 100%; object-fit: cover;"/>
	</section>
	
	
	 <section class="page-section cta">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Venez</span>
                <span class="section-heading-lower">nous sommes ouvert</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Dimanche
                  <span class="ml-auto">fermé</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Lundi
                  <span class="ml-auto">7:00h to 20:00h </span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  mardi
                  <span class="ml-auto">7:00h to 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  mercredi
                  <span class="ml-auto">7:00h to 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  jeudi
                  <span class="ml-auto">7:00h to 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  vendredi
                  <span class="ml-auto">7:00h to 20:00h</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  samedi
                  <span class="ml-auto">9:00h to 17:00h</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>1 avenue du general Leclerc</strong>
                  <br>
                 Nimes,30000
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>appellez nous</em>
                </small>
                <br>
               07 86 41 42 61
              </p>
            </div>
          </div>
        </div>
    </section>
	
	<form class="row" style="margin: 0 5px;" action="#" onsubmit="return verifForm(this)">
		 <fieldset>
       
       <p>
		   <label for="pays">Civilité</label><br />
		   <select name="pays" id="pays">
			   <option value="france">Monsieur</option>
			   <option value="espagne">Madame</option>
			   
		   </select>
      </p>
       
       <legend>Vos coordonnées</legend> <!-- Titre du fieldset --> 

       <label for="nom">Quel est votre nom ?</label>
       <input type="text" name="nom" id="nom" required />

       <label for="prenom">Quel est votre prénom ?</label>
       <input type="text" name="prenom" id="prenom" />
 
       <label for="email">Quel est votre e-mail ?</label>
       <input type="email" name="email" />

		</fieldset>
 
		<fieldset>
		   <legend>Votre souhait</legend> <!-- Titre du fieldset -->
	 
		   <p>
			   Voulez vous être recontacté ? :

			   <input type="radio" name="souhait" value="riche" id="riche" /> <label for="riche">Oui</label>
			   <input type="radio" name="souhait" value="celebre" id="celebre" /> <label for="celebre">Non</label>
			  
		   </p>
	 
		   <p>
			   <label for="precisions">Si "Autre", veuillez préciser :</label>
			   <textarea name="precisions" id="precisions" cols="40" rows="4"></textarea>
			   
		   </p>
		   <input type="submit" value="Envoyer" />
	   </fieldset>
	</form>

		<hr/>