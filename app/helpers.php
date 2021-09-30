<?php

function varname($var){

	return (isset($var))? array_search($var, $skillsArray) : false;

}
