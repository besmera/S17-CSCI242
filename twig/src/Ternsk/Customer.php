<?php
namespace Ternsk;

class Customer {
	
	protected $accounts = array();
	
	/*
	* Accepts: object of, extended from, or implements type BankAccount
	* Returns: Nothing
	* Purpose: Adds BankAccount to this instance of the Customer class
	*/
	public function addAccount(BankAccount $account)
	{
		$this->accounts[] = $account;
	}
	
	/*
	* Accepts: object of, extended from, or implements type BankAccount
	* Returns: Nothing or null
	* Purpose: Removes BankAccount from this instance of the Customer class
	*/
	public function removeAccount(BankAccount $account)
	{
		foreach($this->accounts as $pos => $acct)
		{
			if($acct === $account)
			{
				unset($this->accounts[$pos]);
				return null;
			}
		}
	}
	
	/*
	* Accepts: Nothing
	* Returns: This Customer's accounts
	* Purpose: Gets this Customer's accounts
	*/
	public function getAccounts()
	{
		return $this->accounts;
	}
	
	/*
	* Accepts: Nothing
	* Returns: The balance of all this Customer's accounts
	* Purpose: Gets the balance of this Customer's accounts
	*/
	public function getBalanceOfAllAccounts()
	{
		$total = 0.00;
		foreach($this->getAccounts() as $acct)
		{
			$total += $acct->getBalance();
		}
		
		return $total;
	}
}