<?php
	class RequestFilter{
		private $controller;
		private $action;
		private $request;

		public function __construct($request){
			$this->request = $request;
			if($this -> request['controller'] == "")
			{
				$this -> controller = 'home';
			}
			else
			{
				$this -> controller = $this -> request ['controller'];
			}

			if($this -> request['action'] == "")
			{
				$this -> action = 'index';
			}
			else
			{
				$this -> action = $this -> request['action'];
			}

			//echo $this->controller . ',' .$this->action;
		}

		public function createController()
		{
			// check exists
			if(class_exists($this->controller))
			{
				$parent = class_parents($this->controller);
				
				// check extend

				if(in_array("Controller", $parent))
				{
					// check method exists
					if(method_exists($this ->controller, $this -> action))
					{
						return new $this ->controller($this -> action, $this -> request);
					}
					else
					{
						// method dose not exists

						echo "<h1> Method does not exists</h1>";
						return;
					}
				}
				else
				{
					// Base controller does not exists
					echo "<h1> Base controller not found</h1>";
							return; 
				}

			}
			else
			{
				// Controller Class does not exists
				echo "<h1> Controller class does not exists</h1>";
							return; 
			}
			
		}
	}

?>