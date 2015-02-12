<?php

/**
 * Wrapper for the PHPExcel library.
 * @see README.md
 */
class XPHPExcel extends CComponent
{
	private $_isInitialized = false;

	/**
	 * Path to phpExcel from  yii config
	 * @var null
	 */
	public  $phpExcelPath = null;

	/**
	 * Register autoloader.
	 */
	public function init()
	{
		if ($this->phpExcelPath == null){
			throw new CException('Configure path to PHPExcel in config file!');
		}

		if ($this->_isInitialized === false) {
			spl_autoload_unregister(array('YiiBase', 'autoload'));
			require(Yii::getPathOfAlias($this->phpExcelPath) . DIRECTORY_SEPARATOR . 'PHPExcel.php');
			spl_autoload_register(array('YiiBase', 'autoload'));
			$this->_isInitialized = true;
		}
	}
	
	/**
	 * Returns new PHPExcel object. Automatically registers autoloader.
	 * @return PHPExcel
	 */
	public function createPHPExcel()
	{
		$this->init();
		return new PHPExcel;
	}
}
