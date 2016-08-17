<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password 
{
    public function create($senha)
    {
    	return password_hash($senha, PASSWORD_BCRYPT);
    }

    public function compare($senha, $senhaDB)
    {
		if (password_verify($senha, $senhaDB))
			return true;
		else
			return false;
	}
}