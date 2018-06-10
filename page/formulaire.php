<div class="mdl-cell mdl-cell--8-col mdl-color--white mdl-shadow--4dp mdl-color-text--grey-800 index-content">

	<h3>Formulaire de Contact</h3>
	<p>
		Remplissez les champs du formulaire puis cliquer sur le bouton d'envoie pour effectuer votre demande de support visuel.<br />
		Les besoins de chaque projet étant différent, ce formulaire peut ne pas contenir certain champs vous concernant. Nous vous invitons donc à spécifier ces informations dans la catégorie.
	</p>

	<br />

	<form>
		<h5>Informations Principales</h5>
		<div class="mdl-cell mdl-cell--4-col">
			<!-- Titre -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="formulaire-title" required/>
				<label class="mdl-textfield__label" for="formulaire-title">Titre</label>
			</div>

			<br />

			<!-- Contact -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" id="formulaire-contacts"></textarea>
				<label class="mdl-textfield__label" for="formulaire-contacts">Contacts</label>
			</div>
		</div>

		<div class="mdl-cell mdl-cell--6-col">
			<fieldset>
      	<legend><b>Type de Support</b></legend>
        	<label>
          	<input type="checkbox" id="formulaire-type_support-affiche" checked />
          	<span>Affiche</span>
          </label>
          <label>
          	<input type="checkbox" id="formulaire-type_support-flyer" />
            <span>Flyer</span>
          </label>
					<label>
          	<input type="checkbox" id="formulaire-type_support-autre" />
						<div class="mdl-textfield mdl-js-textfield mdl-textfield">
							<input class="mdl-textfield__input" type="text" id="formulaire-type_support-autre-text"/>
							<label class="mdl-textfield__label" for="formulaire-type_support-autre-text">Autre</label>
						</div>
          </label>
    	</fieldset>
		</div>

		<br />

		<!-- Description -->
		<div class="mdl-cell mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-description" rows=20 required></textarea>
			<label class="mdl-textfield__label" for="formulaire-description">Description</label>
		</div>

		<br />

		<!-- Public visé -->
		<div class="mdl-cell mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-public_vise" rows=10></textarea>
			<label class="mdl-textfield__label" for="formulaire-public_vise">Public visé</label>
		</div>



		<h5>Informations (Evènements)</h5>
		<!-- Dates et Horraires -->
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-dates"></textarea>
			<label class="mdl-textfield__label" for="formulaire-dates">Dates</label>
		</div>

		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-horaires"></textarea>
			<label class="mdl-textfield__label" for="formulaire-horaires">Horaires</label>
		</div>

		<br />

		<!-- Lieux et Chemins -->
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-lieux"></textarea>
			<label class="mdl-textfield__label" for="formulaire-lieux">Lieux</label>
		</div>

		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-trajets"></textarea>
			<label class="mdl-textfield__label" for="formulaire-trajets">Trajets</label>
		</div>

		<br />

		<!-- Tarifs -->
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-tarifs"></textarea>
			<label class="mdl-textfield__label" for="formulaire-tarifs">Tarifs</label>
		</div>


		<h5>Informations Complémentaires</h5>
		<!-- Description -->
		<div class="mdl-cell mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-autre" rows=20 required></textarea>
			<label class="mdl-textfield__label" for="formulaire-autre">Autre</label>
		</div>

		<br />
		<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
	</form>
</div>
