<?php

namespace User\Model;

/**
* 
*/
class User
{
	
	private $id;
	private $name;
	private $last_name;
	private $address;
	private $telephone;
	private $cellphone;
	private $avatar;

	private $db;

	function __construct($db)
	{
		$this->db = $db;
	}

    public function saveUser(User $User)
    {
        $data = [
            'name'  => $User->name,
            'last_name'  => $User->last_name,
            'address'  => $User->address,
            'telephone'  => $User->telephone,
            'cellphone'  => $User->cellphone,
            'avatar'  => $User->avatar
        ];

		$statement = $link->prepare("INSERT INTO users(name, last_name, address, telephone, cellphone, avatar)
		    VALUES(:name :last_name :address :telephone :cellphone :avatar)");
		$statement->execute($data);
    }
}