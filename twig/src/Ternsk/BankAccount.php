<?php
namespace Ternsk;
class BankAccount {
	
	protected $balance = 0.00;
	
	/*
	* Accepts: Nothing
	* Returns: Nothing
	* Purpose: Initialize objects to safe stable state
	*/
	public function __construct()
	{
	}
	
	/*
	* Accepts: Amount to deposit, checked for positive numerical value
	* Returns: Nothing
	* Purpose: Deposits specified amount into this BankAccount
	*/
	public function deposit($amount)
	{
		if (is_numeric($amount) && $amount > 0)
		{
			$this->balance += $amount;
		}
	}
	
	/*
	* Accepts: Amount to withdraw, checked for positive numerical value
	* Returns: Nothing
	* Purpose: Withdraws specified amount out of this BankAccount
	*/
	public function withdrawal($amount)
	{
		if (is_numeric($amount) && $amount > 0)
		{
			$this->balance -= $amount;
		}
	}
	
	/*
	* Accepts: Nothing
	* Returns: The balance of this account
	* Purpose: Gets the balance of this account
	*/
	public function getBalance()
	{
		return $this->balance;
	}
}