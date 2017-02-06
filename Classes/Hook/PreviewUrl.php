<?php
declare(strict_types=1);
namespace Helhum\ImageCropperTest\Hook;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Helmut Hummel <info@helhum.io>
 *  All rights reserved
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the text file GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class PreviewUrl
{
    public function generate(array $params): string {
        $urlArgs = [
            'id' => $params['databaseRow']['pid'],
            'file' => $params['file']->getUid(),
        ];
        return 'http://master.dev/index.php?' . GeneralUtility::implodeArrayForUrl('', $urlArgs, '', true, true);
    }
}