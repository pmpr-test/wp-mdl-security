<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7bf3ad0c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Security\Recaptcha\Recaptcha; use Pmpr\Module\Security\Setting\Setting; class Security extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x53\145\x63\x75\162\x69\x74\171", PR__MDL__SECURITY); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cecuyayqoioasumi; } Setting::symcgieuakksimmu(); cecuyayqoioasumi: Recaptcha::symcgieuakksimmu(); } }