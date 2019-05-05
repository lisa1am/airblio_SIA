<h2>Créer une intervention</h2>
<a href="/airblio_SIA/">Menu</a><br><hr>
<form id='form_create_intervention' onsubmit="return form_action('form_create_intervention')" action="intervention.create" method="POST">
	<label>Client</label><br>
	<input type="text" name='client'><br>
	<label>Site d'intervention</label><br>
	<input type="number" name='site_intervention_id'><br>
	<input type="submit">
</form>
<script src="/airblio_SIA/common/js/main.js"></script>