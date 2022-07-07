<?php

namespace wcf\system\option\user;

use wcf\util\StringUtil;
use wcf\data\user\User;
use wcf\data\user\option\UserOption;

/*
* @author      Moritz Dahlke (DMedia)
* @license     GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
* @copyright   2018-2022
* @package     us.bossmod.wcf.esportprofiles
*/
class FACEITUserOptionOutput implements IUserOptionOutput
{
    public function getOutput(User $user, UserOption $option, $value)
    {
        $output = '';
        if (!empty($value)) {
            $url = StringUtil::encodeHTML('https://www.faceit.com/de/players/' . $value);
            $value = StringUtil::encodeHTML($value);
            $output = '<a href="' . $url . '" class="externalURL"' . (EXTERNAL_LINK_REL_NOFOLLOW ? ' rel="nofollow"' : '') . (EXTERNAL_LINK_TARGET_BLANK ? ' target="_blank"' : '') . '>' . $value . '</a>';
        }
        return $output;
    }
}
