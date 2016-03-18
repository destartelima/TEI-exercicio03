<?php

class Option
{
	private $value;
	private $label;
	
	
	public function __construct($value,$label){
		$this->value = $value;
		$this->label = $label;
	}
	
	public function toHtml(){
		return "<option value='$this->value'>$this->label</option>";
	}
	
	public function __toString(){
		return $this->toHtml();
	}
}