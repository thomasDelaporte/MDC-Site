<?php
	$photos = listPhotos();
	$evenements = listEvenements();
	$membres = listMembres();
	
	addContact();
?>

<section class="news">

        <div class="row">
          <div class="col carrousel">
            <img src="https://www.mc93.com/sites/default/files/styles/carousel/public/images/spectacles/et-dieu-ne-pesait-pas-lourd/photo.jpg?itok=Tr8k0kTB&c=bcb38337a18fe567dc97addcabcb1d1f" />

            <div class="carrousel-content text-center">
              <h4>Nouvelles activitées à la Maison de la Culture.</h4>
              <p>Musculation, entrainement e-sportif, ou encore ... dès à présent</p>
            </div>
          </div>
        </div>

        <section class="activities" id="activite">

          <div class="row">
            <div class="col activities-thumbnail">
              <img src="./public/images/musculation_thumbnail.jpg" />

              <div class="activities-content">
                <h5>Musculation</h5>
                <p>Venez à n'importe qu'elle heure de la journée nous vous accueillerons pour vous proposé le meilleur service.</p>

                <a href="index.php?page=p2" class="btn btn-outline-primary">Information sur l'activité</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col activities-thumbnail">
              <img src="./public/images/esport_thumbnail.jpg" />

              <div class="activities-content">
                <h5>E-sport</h5>
                <p>Eget sollicitudin purus libero et orci. Mauris vel arcu nec augue rutrum gravida.
                   Donec in dui tortor. Quisque elit mauris, posuere non orci non, euismod mollis tortor. Nulla facilisi. Etiam congue ex nec viverra fringilla.</p>

                <a href="index.php?page=p3" class="btn btn-outline-primary">Information sur l'activité</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col activities-thumbnail">
              <img src="./public/images/sport_thumbnail.jpg" />

              <div class="col-5 activities-content">
                <h5>Sport</h5>
                <p>Les activités sportives proposés sont à but non lucratif afin de permettre au plus jeune de découvrir les joies du sport et du travail d'equipe.</p>

                <a href="index.php?page=p4" class="btn btn-outline-primary">Information sur l'activité</a>
              </div>
            </div>
          </div>

        </section>
      </section>

      <hr />

      <section class="info">
        <div class="row">

          <div class="col">
            <h5>Bienvenue</h5>
            <p>La maison de la culture a pour missions de fournir des activités culturelles et sportives au public de tous âges. La Maison de la culturelles est
              un établissement de la Municipalité proposant diverses activités culturelles et sportives comme le thêatre, la musique, la danse, le cinéma, une bibliothéque, la gymnastique
              ainsi que le ping-pong et trois nouvelles activités.</p>

              <p>Actuellement, la municipalité compte <b>2</b> employés constant et l'intégralité des animateurs.
                <br/><br/><a href="index.php#activite">Découvrez nos activités</a></p>
          </div>

          <div class="col">
            <h5>Nos évenements</h5>
            <div class="list-group">
			<?php foreach($evenements as $event){ ?>
              <a class="list-group-item">
                <h6 class="list-group-item-heading"><?= $event['nomEvenement']; ?></h6>
                <p class="list-group-item-text"><?= $event['dateEvenement']; ?></p>
              </a>
			<?php }?>
            </div>
          </div>
        </div>
      </section>

      <hr/>

      <section class="screen">
        <div class="row screen-wrapper">
			<?php foreach($photos as $photo){ ?>
			  <div class="col-sm-3">
				<img src="<?= $photo['urlPhoto'] ?>" height="200" width="200" alt="Brahim photo" class="img-thumbnail" >
			  </div>
			<?php } ?>
        </div>
      </section>

      <section class="membres">
        <div class="row">
          <div class="col-md-6 membres-wrapper" id="equipe">

          </div>
          <div class="col membres-content" id="equipe-presentation">
            <h4>John Doe</h4>
            <p>Donec mollis consequat dolor et tristique. Aliquam blandit molestie nibh id congue. Suspendisse ac volutpat turpis. Pellentesque massa nisl, faucibus in venenatis eget, iaculis a quam. 
			Donec at commodo erat, a elementum nisi. Etiam eu leo non purus semper interdum.</p>
			<a href="#">Activité de l'animateur</a>
          </div>
        </div>
      </section>

      <hr/>

	      <div class="row">
        <form class="col-md-5" enctype="multipart/form-data" action='#' method='post' onsubmit="return contactSubmit(this)">
          <h5>Contactez-nous</h5>
          <ul class="form-group" id="error"></ul>

      		<div class="form-group">
  					<input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
  				</div>

  				<div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-text">@</div>
              <input type="text" class="form-control" id="inlineFormInputGroup" name="mail" placeholder="Email" required>
            </div>
  				</div>

  				<div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-text">+33</div>
              <input type="text" class="form-control" id="mobile" name="phone" placeholder="Numéro de téléphone" maxlength="9">
            </div>
  				</div>

  				<div class="form-group">
					<select id="inputState" placeholder="Sujet" name="type" class="form-control">
					  <option selected>Général</option>
					  <option>Gestion et administration</option>
					  <option>Problèmé lié au site</option>
					</select>
  				</div>
				
			<div class="form-group">
				<div class="input-group-text">Pièce jointe</div>
				<input type="file" name="fichier" id="icone" /><br />

			</div>

          <div class="form-group">
            <textarea class="form-control" type="textarea" name="content" id="message" placeholder="Message" maxlength="140" rows="7" required></textarea>
          </div>

          <div class="form-group">
            <label>Envoyez une copie</label>

            <div class="input-group">
              <input type="radio" name="sendCopy" value="true"> Oui
              <input type="radio" name="sendCopy" value="false" style="margin-left: 16px;"> Non
            </div>
          </div>

          <input type="submit" id="submit" name="submit" class="btn btn-primary pull-right" value="Envoyer" >
        </form>

        <div class="col-md-7">
          <h5>Map</h5>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.1074831186925!2d4.3666396159315894!3d43.83286927911558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42d103fb896a9%3A0x2d491738deb25561!2sPrivate+School+De+La+Cci+De+N%C3%AEmes!5e0!3m2!1sen!2sfr!4v1514987604657"
              frameborder="0" style="width: 100%; height: 400px; border:0 overflow: hidden;" allowfullscreen></iframe>
          </div>
      </div>

      <hr/>
	  
	   <script>

      var errorDiv = $('#error');
	  var equipeDiv = $('#equipe');
	  var presentationDiv = $('#equipe-presentation');
	  
		  var membreEquipe = [
			<?php foreach($membres as $membre){ ?>
			  {name: '<?= $membre["nomMembre"] ?>',  surname: '<?= $membre["prenomMembre"] ?>', staff: '<?= $membre["nomRole"]; ?>', image: '<?= $membre["photoMembre"] ?>'},
			<?php } ?>
		  ];

	  loadEquipe();
	  loadPresentationMembre(0);

      function contactSubmit(f) {
        var errors = [];

        var email = f.mail.value;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var phone = '+33' + f.phone.value;
        var phoneReg = /^((\+)33|0)[1-9](\d{2}){4}$/;

        // Email verification
        if(email == '') errors.push("L'emplacement pour écrire votre email est vide.");
        if(!email.match(emailReg)) errors.push("Votre email n'est pas valide.");

        // Phone verification
        if(phone == '') errors.push("L'emplacement pour écrire votre numéro de téléphone est vide.");
        if(!phone.match(phoneReg)) errors.push("Votre numéro de téléphone n'est pas valide.");

        errorDiv.empty();
        if(errors.length > 0){

          errors.forEach(function(e){
            errorDiv.append('<li>' + e + '</li>');
          });
        }
	
		return(errors.length == 0);
      }
	  
	  function loadEquipe(){
		
		membreEquipe.forEach(function(e, index){
			equipeDiv.append('<img src="' + e.image + '" alt="Profil" class="img-thumbnail w100 h100" onmouseover="loadPresentationMembre(' + index + ')" />');
		});
	  }
	
	  function loadPresentationMembre(index){
		var data = membreEquipe[index];
		
		
		presentationDiv.empty();
		presentationDiv.append('<h4><b>' + data.name + '</b> ' + data.surname + '</h4>');
		presentationDiv.append('<p>' + data.staff + '</p>');
	  }
	
    </script>
