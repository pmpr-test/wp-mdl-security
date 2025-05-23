<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             682fc6db4685c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Security\Defender\Defender; use Pmpr\Module\Security\Setting\Setting; use Pmpr\Module\Security\ThirdParty\Recaptcha\Recaptcha; class Security extends ModuleInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Security', PR__MDL__SECURITY); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Defender::symcgieuakksimmu(); Recaptcha::symcgieuakksimmu(); } }
