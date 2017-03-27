<?php

class User {

	private $username;
	private $name;
	private $language;

	/**
	* Default constructor to set to ""
	*/
	public function __construct()
	{
		$this->username = "";
		$this->name = "";
		$this->language = "";
	}

	/**
	* Mutator for private variable username
	*/
	public function setUsername($username)
	{
		$this->username = $username;
	}

	/**
	* Accessor for private variable username
	*/
	public function getUsername()
	{
		return $this->username;
	}

	/**
	* Mutator for private variable name
	*/
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	* Accessor for private variable name
	*/
	public function getName()
	{
		return $this->name;
	}

	/**
	* Mutator for private variable language
	*/
	public function setLanguage($language)
	{
		$this->language = $language;
	}

	/**
	* Accessor for private variable language
	*/
	public function getLanguage()
	{
		return $this->language;
	}

}
