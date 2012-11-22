<?php
namespace Elbits\AppEnvLoaderBundle\AppEnvLoader\AppEnvLoader;
use Elbits\AppEnvLoaderBundle\AppEnvLoader\AppEnvLoaderInterface;

 /**
  * @author pascal.schneider
  *
  */
abstract class AppEnvLoader implements AppEnvLoaderInterface {
	
	protected $possibleAppEnvs = array('local','dev', 'test','stage','prod');
	
	protected $appEnv = FALSE;
	
	protected $defaultAppEnv = 'local';

	/**
	 * @return string|bool The key of the current application environment or FALSE
	 */
	public function getEnvironment($strict = FALSE) {
			if(true === $strict) {
				return (bool)FALSE;
			} else {
				return $this->defaultAppEnv;
			}
	}
}
