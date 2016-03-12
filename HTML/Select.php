<?php

namespace HTML;

use PDO;
class Select
{
	private $name;
	private $options;
	private $db;
	public function __construct($name){
		$this->name = $name;
		$this->db = new PDO('mysql:host=localhost;dbname=cdcol','root','');
		$cds = $this->db->query("select id, titel from cds",PDO::FETCH_OBJ);
		
		foreach($cds as $cd){
			$option = new \Option($cd->id, $cd->titel);
			$this->options[$cd->id]= $option;
		}
	}
	
public function __get($atributo)
	{
		return $this->$atributo;
	}
	public function add($label)
	{
		$this->db->exec("INSERT INTO cds(titel) VALUES('$label')");
		$id = $this->db->lastInsertId();
		$option = new Option($id, $label);
		$this->options[$id] = $option;
	}
	public function remove($value)
	{
		unset($this->options[$value]);
		$this->db->exec("DELETE FROM cds WHERE id=$value");
	}
	public function toHtml()
	{
		$html = "<select name=\"$this->name\" id=\"$this->name\">\n";
		foreach ($this->options as $option) {
			$html .= $option->toHtml();
		}
		$html .= "</select>\n";
		return $html;
	}
	public function __toString()
	{
		return $this->toHtml();
	}
}