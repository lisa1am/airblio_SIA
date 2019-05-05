<?php namespace entity;

class Intervention
{
	// properties
	private $intervention_id;
	private $client;
	private $site_intervention_id;
	private $date_debut;


	// getters

	public function get_intervention_id(){ return $this->intervention_id; }
	public function get_client(){ return $this->client; }
	public function get_site_intervention_id(){ return $this->site_intervention_id; }
	public function get_date_debut(){ return $this->date_debut; }

	// setters

	public function set_intervention_id($value){ $this->intervention_id = $value; }
	public function set_client($value){ $this->client = $value; }
	public function set_site_intervention_id($value){ $this->site_intervention_id = $value; }
	public function set_date_debut($value){ $this->date_debut = $value; }

	// methods

	public function properties(){ return get_object_vars($this); }
	public function properties_names(){ return array_keys(get_object_vars($this)); }
	public function to_string() { return "Intervention : $this->intervention_id, client : $this->client, site_intervention_id : $this->site_intervention_id"; } 

}

?>