<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106b522e75             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Segment; use Pmpr\Module\Security\Tratis\RecaptchaTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Markup as BackendMarkup; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Markup as FrontendMarkup; abstract class AbstractSecurity extends Segment { use RecaptchaTrait; public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('security_module')->jyumyyugiwwiqomk(20)->gswweykyogmsyawy(__('Security', PR__MDL__SECURITY))->saemoowcasogykak(IconInterface::cokkqwmiaowmqcqs)->gucwmccyimoagwcm(__('Security module configuration', PR__MDL__SECURITY))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('recaptcha')->saemoowcasogykak(IconInterface::ysgoocymyaeiqqog)->gswweykyogmsyawy(__('reCAPTCHA Configuration', PR__MDL__SECURITY))->ewweaossowcqywaw($this->iucqycygmekqcggo()))); } public function iucqycygmekqcggo() : array { return []; } public function gusaciukmokcqeik(string $wuomgsuaoscwgsmq = Constants::iickqyckyaqcaokm) { $aiowsaccomcoikus = null; $gmsquaqoucwysesw = $this->aoomuuaiueuouuuu(); if (!empty($gmsquaqoucwysesw)) { if ($wuomgsuaoscwgsmq === Constants::qiaqeaemuukkikmi) { $aiowsaccomcoikus = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yqgagqgesqyuyuqq('recaptcha'); } else { $aiowsaccomcoikus = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yqgagqgesqyuyuqq('recaptcha'); } $aiowsaccomcoikus->oguessuismosauuu($gmsquaqoucwysesw)->jyumyyugiwwiqomk(50); } return $aiowsaccomcoikus; } }
