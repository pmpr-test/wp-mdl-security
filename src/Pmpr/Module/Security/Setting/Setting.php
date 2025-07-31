<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             688b66f17f79d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Security\Defender\Auth\Setting as AuthSetting; use Pmpr\Module\Security\Defender\Config\Setting as ConfigSetting; use Pmpr\Module\Security\Defender\File\Setting as FileSetting; use Pmpr\Module\Security\Defender\Resource\Setting as ResourceSetting; use Pmpr\Module\Security\ThirdParty\Recaptcha\Setting as RecaptchaSetting; class Setting extends BaseClass { public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::kekcgssiyagioocg, 50); } public function wyyuauosmqoeucmg() { $this->title = __('Security Setting', PR__MDL__SECURITY); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __('Security', PR__MDL__SECURITY)); } public function ykwqaukkycogooii() { parent::ykwqaukkycogooii(); $this->kwugkiaumqigagwm(); } public function kwugkiaumqigagwm() { AuthSetting::symcgieuakksimmu(); ConfigSetting::symcgieuakksimmu(); FileSetting::symcgieuakksimmu(); ResourceSetting::symcgieuakksimmu(); RecaptchaSetting::symcgieuakksimmu(); } }
