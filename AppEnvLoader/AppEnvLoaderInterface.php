<?php

namespace Elbits\AppEnvLoaderBundle\AppEnvLoader;

interface AppEnvLoaderInterface {
	
	/**
	 * @return string|bool The key of the current application environment or FALSE
	 */
	public function getEnvironment($strict = FALSE);
}