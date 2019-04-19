<?php

class myclass {


	const MINMAX 	= 10000; // Constants. Call it within the class:  self::MINMAX
	private $var 	= 0; // Private variable
	
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
		return $string;
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
