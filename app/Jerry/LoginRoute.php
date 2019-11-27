<?php 

namespace App\Jerry;

class LoginRoute {

	private $user_level;
	private $login;
	private $route;

	public function __construct($user_level)
	{	
		$this->user_level = $user_level;
	}

	public function setRoute()
	{

		if($this->user_level === 1)
		{
			$this->route = "welcome_public"; //Users
		}
		else
		{
			$this->route = "welcome"; //Adminsitrator|Support
		}

	}

	public function setProfileRoute()
	{

		if($this->user_level === 1)
		{
			$this->route = "user.user"; //Users
		}
		else
		{
			$this->route = "dashboard.index"; //Adminsitrator|Support
		}

	}

	public function setUsersRoute()
	{

		$this->route = "dashboard.users"; //Adminsitrator|Support

	}

	public function setWelcomeRoute()
	{

		if($this->user_level === 1)
		{
			$this->route = "welcome_public"; //Users
		}
		else
		{
			$this->route = "welcome"; //Adminsitrator|Support
		}

	}

	public function getRoute()
	{
		return $this->route;
	}

}

?>