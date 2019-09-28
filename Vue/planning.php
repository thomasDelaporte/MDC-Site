<section class="plan">
        <div class="row">
          <div class="col">
            <img src="./public/images/plan_mdc.png" alt="Plan" class="img-thumbnail"
              usemap="#plan" />

            <map name="plan">
              <area shape="rect" coords="13, 10, 125, 85" alt="Salle majorelle" onmouseover="message('salleMajorel')"/>
              <area shape="rect" coords="14, 85, 130, 118" alt="Cuisine" onmouseover="message('cuisine')"/>
              <area shape="rect" coords="424, 146 544, 208" alt="Multimedia" onmouseover="message('esport')"/>
              <area shape="rect" coords="16, 235, 150, 290" alt="Reprographie" onmouseover="message('reprographie')" />
              <area shape="rect" coords="100, 321, 290, 370" alt="Salle gruber" onmouseover="message('salle')" />
              <area shape="rect" coords="16, 290, 100, 370" alt="Administration" onmouseover="message('administration')" />
              <area shape="rect" coords="268, 10, 421, 60" alt="Salle Lamour" onmouseover="message('musculation')" />
              <area shape="rect" coords="268, 60, 424, 216" alt="Ampitheatre" onmouseover="message('amphitheatre')" />
              <area shape="rect" coords="439, 543, 516, 297" alt="Salle Daum" onmouseover="message('salleDaum')" />
              <area shape="rect" coords="516, 243, 621, 297" alt="Salle Gallé" onmouseover="message('sport')" />
            </map>
          </div>
          <div class="col-3">
            <h5>Plan</h5>

            <h6 id='room-name'></h6>
            <p id="room-presentation"></h5>
          </div>
        </div>

        <hr/>

        <h5 class="row section-subtitle">Planning des activités</h5>

        <div class="row">
          <table id="planning">
            <thead>
              <tr>
                <th></th>
                <th>
                  <span class="long">Lundi</span>
                  <span class="short">Lun</span>
                </th>
                <th>
                  <span class="long">Mardi</span>
                  <span class="short">Mar</span>
                </th>
                <th>
                  <span class="long">Mercredi</span>
                  <span class="short">Mer</span>
                </th>
                <th>
                  <span class="long">Jeudi</span>
                  <span class="short">Jeu</span>
                </th>
                <th>
                  <span class="long">Vendredi</span>
                  <span class="short">Ven</span>
                </th>
                <th>
                  <span class="long">Samedi</span>
                  <span class="short">Sam</span>
                </th>
                <th>
                  <span class="long">Dimanche</span>
                  <span class="short">Dim</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="hour" rowspan="1"><span>8h00</span></td>
                <td class="act-musculation">Musculation</td>
                <td></td>
                <td class="act-esport">Entrainement e-sport</td>
                <td></td>
                <td class="act-esport act-2">Entrainement e-sport</td>
                <td></td>
                <td></td>
              </tr>
              <tr></tr>
              <tr></tr>
              <tr></tr>
              <tr>
                <td class="hour" rowspan="1"><span>10h00</span></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="act-musculation act-2">Musculation</td>
                <td class="act-esport act-2">Entrainement e-sport</td>
                <td></td>
                <td></td>
              </tr>
              <tr></tr>
              <tr></tr>
              <tr></tr>
              <tr>
                <td class="hour" rowspan="1"><span>12h00</span></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="act-musculation">Musculation</td>
                <td class="act-esport">Entrainement e-sport</td>
                <td></td>
                <td class="act-musculation">Musculation</td>
              </tr>
              <tr></tr>
              <tr></tr>
              <tr></tr>
              <tr>
                <td class="hour" rowspan="1"><span>14h00</span></td>
                <td class="act-sport">Sportives</td>
                <td></td>
                <td class="act-sport">Sportives</td>
                <td></td>
                <td class="act-sport">Sportives</td>
                <td></td>
                <td class="act-sport">Sportives</td>
              </tr>
              <tr></tr>
              <tr></tr>
              <tr></tr>
              <tr>
                <td class="hour" rowspan="1"><span>16h00</span></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr></tr>
              <tr></tr>
              <tr></tr>
            </tbody>
          </table>
        </div>
      </section>
	  
 <script>

      // Variable
      var information = {
        salle: {name: "Salle d'animation", presentation: "Texte blabla..."},
        animation: {name: "Salle d'animation", presentation: "Texte blabla..."},
        restaurant: {name: "Restaurant", presentation: "Salle permetant la restauration des membres de l'association."},
        cuisine: {name: "Cuisine", presentation: "Salle permettant une activité de cuisine."},
        esport: {name: "Salle multimédia", presentation: "Cette salle possède des ordinateurs et permet le bon fonctionnement de l'activité 'entrainement e-sportif'.", activite: true},
        musculation: {name: "Salle de musculation", presentation: "la salle Lamour permettra une activité de musculation, avec un équipement adapté a celui-ci.", activite: true},
        reprographie: {name: "Reprographie", presentation: "Espace commun aux activités et à l'administration de la Maison de la Culture."},
        amphitheatre: {name: "Ampitheatre", prsentation: "Reservé au théatre et aux conférences."},
        salleMajorel: {name: "Salle Majorel", presentation: "Il s'agit pour l'instant d'une Bibliothéque."},
        salleDaum: {name: "Salle Daum", presentation: "Il s'agit pour l'instant d'une salle de réunion."},
        sport: {name: "Salle Gallé", presentation: "Il s'agit du point de raliement pour les membres du club sportif.", activite: true}}

      var nameDiv = $("#room-name");
      var presentationDiv = $("#room-presentation");
      var planningDiv = $("#planning");

      // Initialize
      message();

      // Function when mouseover.
      function message(type){

        if(information[type] != undefined){
          var data = information[type];

          nameDiv.text(data.name);
          presentationDiv.text(data.presentation);

          if(data.activite) updatePlanning(type);
        } else {

          nameDiv.text("Passez votre souris sur une salle.");
          presentationDiv.empty();
        }
      }

      // Function update the planning cell.
      function updatePlanning(type){

        // Delete all classes of last active
        $('td:not(.act-' + type + ')').each(function(i){
            $(this).removeClass('is-active');
        });

        // Set active planning cell
        $(".act-" + type).each(function(i){
          $(this).addClass("is-active");
        });
      }

    </script>


