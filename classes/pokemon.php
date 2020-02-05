<?php
	class pokemon 
	{
		private $_degats; // dégats du personnage
		private $_force; // force du personnage
		private $_vie; // vie du pokemon

		public function frapper(personnage $persoAFrapper)
  		{
    		$persoAFrapper->_degats += $this->_force;
  		}
        
		 // Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
		public function degats()
		{
		    return $this->_degats;
		}
		        
		  // Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
		public function force()
		{
		    return $this->_force;
		}

		public function vie()
		{
			return $this->_vie;
		}
		        
	}	
?>