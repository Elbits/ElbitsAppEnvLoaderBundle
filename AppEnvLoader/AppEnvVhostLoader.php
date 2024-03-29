<?php
namespace Elbits\ElbitsAppEnvLoaderBundle\AppEnvLoader;
use Elbits\ElbitsAppEnvLoaderBundle\AppEnvLoader\AppEnvLoader;

/**
 * @author pascal.schneider
 *
 */
class AppEnvVhostLoader extends AppEnvLoader {
	
	
	/**
	 * @return string|bool The key of the current application environment or FALSE
	 */
	public function getEnvironment($strict = FALSE) {
		$this->appEnv = getenv('APPLICATION_ENVIRONMENT');
		if (true === in_array($this->appEnv, $this->possibleAppEnvs)) {
			return $this->appEnv;
		} else {
			if(true === $strict) {
				return (bool)FALSE;
			} else {
				return $this->defaultAppEnv;
			}
		}
	}

}
