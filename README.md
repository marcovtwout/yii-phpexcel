yii-phpexcel
============

Wrapper for the PHPExcel library.

Install:
--------

1. Unzip the contents of this directory to protected/extensions/phpexcel
2. Download the latest version of PHPExcel: https://github.com/PHPOffice/PHPExcel/tags
3. Unzip the contents of the folder Classes to a new folder protected/extensions/phpexcel/vendor

Usage:
------

    Yii::import('ext.phpexcel.XPHPExcel');		
    $phpExcel = XPHPExcel::createPHPExcel();

Or if you don't want a PHPExcel object:

    Yii::import('ext.phpexcel.XPHPExcel');		
    XPHPExcel::init();