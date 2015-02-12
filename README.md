yii-phpexcel
============

Wrapper for the PHPExcel library.

## Installation:

1. Unzip the contents of this directory to protected/extensions/phpexcel
2. Download the latest version of PHPExcel: https://github.com/PHPOffice/PHPExcel/tags
3. Unzip the contents of the folder Classes to a new folder protected/extensions/phpexcel/vendor

## Installation with Composer

```javascript
"repositories": [
// ... some code
{
            "type": "package",
            "package": {
                "name": "RooTooZ/yii-phpexcel",
                "version": "dev-master",
                "source": {
                    "url": "https://github.com/RooTooZ/yii-phpexcel.git",
                    "type": "git",
                    "reference": "origin/master"
                }
            }
        },
        {
            "type": "package",
            "package": {
                "name": "PHPOffice/PHPExcel",
                "version": "dev-master",
                "source": {
                    "url": "https://github.com/PHPOffice/PHPExcel.git",
                    "type": "git",
                    "reference": "origin/master"
                }
            }
        }
        // ... some code
        ],
        "require": {
            // ... some code
            "PHPOffice/PHPExcel": "dev-master",
            "RooTooZ/yii-phpexcel": "dev-master"
            // ... some code
        }
```

## Usage:

```php
# yii config file

// ... some code
'components' => array(
    // ... some code
    'XPHPExcel' => array(
        'class' => 'vendor.RooTooZ.yii-phpexcel.XPHPExcel',
        'phpExcelPath' => 'vendor.PHPOffice.PHPExcel.Classes' // where is folder PHPExcel
    ),
    // ... some code
)
```


```php

$phpExcel = Yii::app()->XPHPExcel->createPHPExcel();
```

Or if you don't want a PHPExcel object:

```php
Yii::app()->XPHPExcel->init();
```

## Troubleshooting

Q: Error message: "include(PHPExcel_Style_Supervisor.php) [function.include]: failed to open stream: No such file or directory"
A: https://github.com/marcovtwout/yii-phpexcel/issues/3#issuecomment-38112059
    
    
