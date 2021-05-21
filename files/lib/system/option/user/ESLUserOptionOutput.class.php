<?php
namespace wcf\system\option\user;
use wcf\util\StringUtil;
use wcf\data\user\User;
use wcf\data\user\option\UserOption;

/*
* @author      DMedia
* @license     GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
* @copyright   2018-2021
* @package     us.bossmod.wcf.esportprofiles
*/

class ESLUserOptionOutput implements IUserOptionOutput {
    public function getOutput(User $user, UserOption $option, $value) {
		$output = '';
		if (!empty($value)) {
			$url = StringUtil::encodeHTML('https://play.eslgaming.com/player/'.$value);
			$value = StringUtil::encodeHTML($value);
			$output = '<a href="'.$url.'" class="externalURL"'.(EXTERNAL_LINK_REL_NOFOLLOW ? ' rel="nofollow"' : '').(EXTERNAL_LINK_TARGET_BLANK ? ' target="_blank"' : '').'>'.$value.'</a>';			
		}

		return $output;
	}
}