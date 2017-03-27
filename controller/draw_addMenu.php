<?php

function drawAddMenu(){
	if(isset($_COOKIE['user'])){
		?>
		<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formularis <b class="caret"></b></a>
	        <ul class="dropdown-menu">
			    <li>
			        <a href="?ctl=afegirpelicula">Afegir Pel·licula</a>
			    </li>
			    <li>
			        <a href="?ctl=afegiractor">Afegir Actor</a>
			    </li>
			    <li>
			        <a href="?ctl=afegirdirector">Afegir Director</a>
			    </li>                                
		    </ul>
	    </li> 
<?php
	}
}
?>