# tcpdf-font

This script is for PDF Invoice for Magento 2 extension: https://www.magetrend.com/magento-2-pdf-invoice

The script should be installed if:
 - tcpdf processor is used
 - printing PDFs isn't working
 - and there is similar error message: Unable to generate PDF :( Warning: fopen(file:////***/vendor/tecnickcom/tcpdf/fonts/arial.z): failed to open stream: Read-Only filesystem



To install this script, run the following magento commands:

composer require magetrend/tcpdf-font  
php bin/magento setup:upgrade;
php bin/magento setup:di:compile;
php bin/magento setup:static-content:deploy;


After installation, there is need to create a directory: MAGENTO_DIR/pub/media/tcpdf/
And you need to copy all the fonts from: MAGENTO_DIR/vendor/tecnickcom/tcpdf/fonts/ to MAGENTO_DIR/pub/media/tcpdf/fonts/
This directory has to be writtable. 





