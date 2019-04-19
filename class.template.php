<?php

class myclass {


	const MAX 		= 10000; //constants
	private $var 	= 0; // private variable
	
	public function __construct($params = array()) 
	{ 
		$this->init($params);
	}
	
	public function __destruct()
	{
		$this->myarray = array();
	}
	
	public function mainfunction() 
	{
		$this->anotherfunction();
	}
	
	/**
	* Initializes object.
	* @param array $params
	* @throws Exception
	*/	
	
    public function init($params)
    {
		try {
			isset($params['var'])  ? $this->var  = $params['var'] : false; 
			} catch(Exception $e) {
			$this->message('Problem initializing:'.$e->getMessage());
		}
    }
	
	/**
	* shows a message to the user.
	* @param message
	* @return string
	*/
	public function message($string) 
	{
			return echo $string;
	}	

	/**
	* name
	* @param
	* @return
	*/
	public function name($string) 
	{
		
	}	

	/**
	* name
	* @param
	* @return
	*/
	public function name($string) 
	{
		
	}	

	/**
	* name
	* @param
	* @return
	*/
	public function name($string) 
	{
		
	}	

	/**
	* name
	* @param
	* @return
	*/
	public function name($string) 
	{
		
	}	

	/**
	* name
	* @param
	* @return
	*/
	public function name($string) 
	{
		
	}	
	
	/**
	* name
	* @param
	* @return
	*/
	public function name($string) 
	{
		
	}
	
	/**
	* Arrays
	* @var array
	*/
	public $myarray = array(
		'',
		'',
		'',
		''
	);
	
}


?>
