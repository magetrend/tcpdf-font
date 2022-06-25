<?php
/**
 * MB "Vienas bitas" (Magetrend.com)
 *
 * @category MageTrend
 * @package  Magetend/PdfCart2Quote
 * @author   Edvstu <edwin@magetrend.com>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.magetrend.com/magento-2-pdf-invoice-pro
 */

namespace Magetrend\TcpdfFont\Plugin;

use Magento\Framework\Exception\NoSuchEntityException;

class Path
{
    public function beforeGetPdf($subject, $objects, $forceTemplateId)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $directory = $objectManager->get('\Magento\Framework\Filesystem\DirectoryList');
        $rootPath  =  $directory->getPath('pub');
        define ('K_PATH_FONTS', $rootPath.'/media/tcpdf/fonts/');
        return [$objects, $forceTemplateId];
    }
}
