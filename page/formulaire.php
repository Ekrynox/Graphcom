<div class="mdl-cell mdl-cell--8-col mdl-color--white mdl-shadow--4dp mdl-color-text--grey-800 index-content">

	<h3>Formulaire de Contact</h3>
	<p>
		Remplissez les champs du formulaire puis cliquer sur le bouton d'envoie pour effectuer votre demande de support visuel.<br />
		Les besoins de chaque projet étant différent, ce formulaire peut ne pas contenir certain champs vous concernant. Nous vous invitons donc à spécifier ces informations dans la catégorie.
	</p>

	<br />

	<form method="post" action="index.php?page=formulairepost">
		<h5>Informations Pour Nous</h5>
		<div class="mdl-cell mdl-cell--4-col">
			<!-- email -->
			<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
				<input class="mdl-textfield__input" type="text" id="formulaire-us-email" name="us-email" required/>
				<label class="mdl-textfield__label" for="formulaire-us-email">Email</label>
			</div>

			<br />

			<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--5-col">
				<input class="mdl-textfield__input" type="text" id="formulaire-us-name" name="us-name" required/>
				<label class="mdl-textfield__label" for="formulaire-us-name">Nom</label>
			</div>

			<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--5-col">
				<input class="mdl-textfield__input" type="text" id="formulaire-us-firstname" name="us-firstname" required/>
				<label class="mdl-textfield__label" for="formulaire-us-firstname">Prénom</label>
			</div>

		</div>



		<h5>Informations Principales</h5>
		<div class="mdl-cell mdl-cell--4-col">
			<!-- Titre -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="formulaire-title" name="title" required/>
				<label class="mdl-textfield__label" for="formulaire-title">Titre</label>
			</div>

			<br />

			<!-- Contact -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" id="formulaire-contacts" name="contacts"></textarea>
				<label class="mdl-textfield__label" for="formulaire-contacts">Contacts</label>
			</div>
		</div>

		<div class="mdl-cell mdl-cell--6-col">
			<fieldset>
      	<legend><b>Type de Support</b></legend>
        	<label>
          	<input type="checkbox" id="formulaire-type_support-affiche" name="support-affiche" checked />
          	<span>Affiche</span>
          </label>
          <label>
          	<input type="checkbox" id="formulaire-type_support-flyer" name="support-flyer"/>
            <span>Flyer</span>
          </label>
					<label>
          	<input type="checkbox" id="formulaire-type_support-autre" name="support-autre"/>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield">
							<input class="mdl-textfield__input" type="text" id="formulaire-type_support-autre-text" name="support-autre-text"/>
							<label class="mdl-textfield__label" for="formulaire-type_support-autre-text">Autre</label>
						</div>
          </label>
    	</fieldset>
		</div>

		<br />

		<!-- Description -->
		<div class="mdl-cell mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-description" name="description" rows=20 required></textarea>
			<label class="mdl-textfield__label" for="formulaire-description">Description</label>
		</div>

		<br />

		<!-- Public visé -->
		<div class="mdl-cell mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-public_vise" name="public_vise" rows=10></textarea>
			<label class="mdl-textfield__label" for="formulaire-public_vise">Public visé</label>
		</div>



		<h5>Informations (Evènements)</h5>
		<!-- Dates et Horraires -->
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-dates" name="dates"></textarea>
			<label class="mdl-textfield__label" for="formulaire-dates">Dates</label>
		</div>

		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-horaires" name="horaires"></textarea>
			<label class="mdl-textfield__label" for="formulaire-horaires">Horaires</label>
		</div>

		<br />

		<!-- Lieux et Chemins -->
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-lieux" name="lieux"></textarea>
			<label class="mdl-textfield__label" for="formulaire-lieux">Lieux</label>
		</div>

		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-trajets" name="trajets"></textarea>
			<label class="mdl-textfield__label" for="formulaire-trajets">Trajets</label>
		</div>

		<br />

		<!-- Tarifs -->
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-tarifs" name="tarifs"></textarea>
			<label class="mdl-textfield__label" for="formulaire-tarifs">Tarifs</label>
		</div>


		<h5>Informations Complémentaires</h5>
		<!-- Description -->
		<div class="mdl-cell mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<textarea class="mdl-textfield__input" type="text" id="formulaire-autre" name="autre" rows=20 required></textarea>
			<label class="mdl-textfield__label" for="formulaire-autre">Autre</label>
		</div>

		<br />
		<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
	</form>
</div>
