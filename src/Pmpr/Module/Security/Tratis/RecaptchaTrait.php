<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106b522e75             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security\Tratis; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Security\Recaptcha\API; use Pmpr\Module\Security\Recaptcha\Recaptcha; use Pmpr\Module\Security\Recaptcha\Setting; use WP_Error; trait RecaptchaTrait { const mmeksogaieuuikmq = 'incorrect'; const ewiwasqsgesysueq = 'multiple_blocks'; const uqqesukysscwmimw = 'ERROR_NO_KEYS'; const iaaswmggymkykcys = 'RECAPTCHA_ADDED'; const siuiuwsyuaaeyoso = 'ERROR_WRONG_SECRET'; const qceqiuuakwieousk = 'VERIFICATION_FAILED'; const uaowqiioakckyisq = 'missing-input-secret'; const waykswawkyiyamkc = 'invalid-input-secret'; const ouigakuqekauuiae = 'incorrect-captcha-sol'; const omkowsgwgsgiwaoa = 'RECAPTCHA_SMALL_SCORE'; const mmqiaskgsaymagmk = 'RECAPTCHA_NO_RESPONSE'; const uyioyycseoqomeoq = 'RECAPTCHA_EMPTY_RESPONSE'; public function akquumwmywuqyeck(array $icwicymcioeyeyek = []) { $sogksuscggsicmac = $this->gmcyoyosemugmkgg(Constants::ioomakeyqiqowgmk, true, $icwicymcioeyeyek); if (!$sogksuscggsicmac[Constants::imqkacyywmmamsqm]) { $sogksuscggsicmac = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; } else { $sogksuscggsicmac = true; } return $sogksuscggsicmac; } public function eykosmsuqcyueagm($ykemyeyyuisoeegu) { $kucumcusyyckayas = $this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo(); $euueacigmgoqkimu = stripslashes($this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($ykemyeyyuisoeegu)); $emoqwwkmassqsoaw = $this->yuuymuwyqoqewkei(Setting::mkuaccemgegcsyuq); $yqimccamkgmmuuyg = API::symcgieuakksimmu(); try { $keccaugmemegoimu = $yqimccamkgmmuuyg->iywiwaoieigskusm($emoqwwkmassqsoaw, $euueacigmgoqkimu, $kucumcusyyckayas); } catch (Exception $wgaoewqkwgomoaai) { $ywmkwiwkosakssii = ['body' => ['secret' => $emoqwwkmassqsoaw, Constants::imqkacyywmmamsqm => $euueacigmgoqkimu, 'remoteip' => $kucumcusyyckayas], 'sslverify' => false]; $keccaugmemegoimu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ooeyomkwieykuywo($yqimccamkgmmuuyg->wwawisckiqeueoua(), $ywmkwiwkosakssii); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu)); } } return $keccaugmemegoimu; } public function gmcyoyosemugmkgg(string $eaoumsseceiowgsk = Constants::ioomakeyqiqowgmk, bool $cwwowqyuwccuykom = false, array $icwicymcioeyeyek = []) : array { $aggamyqqskiqkcea = ''; $ueeagokqmgisgauy = ''; $occymigcemkqucuw = true; if (empty($icwicymcioeyeyek)) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); } if (($cwwowqyuwccuykom || $this->wmkggougegmmywqg($eaoumsseceiowgsk)) && !$this->eoaaqqwmaswwweku()) { if (!$this->ockgcoyewecmsqag()) { $aggamyqqskiqkcea = self::uqqesukysscwmimw; $ueeagokqmgisgauy = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->iwcyqwuymeoesqem(), 503); $occymigcemkqucuw = false; } else { if (in_array($this->aaiqmckgssqmwqyc(), Setting::seisikuaqeewskuc, true)) { $ykemyeyyuisoeegu = $icwicymcioeyeyek[Recaptcha::aaskskmcwakmsogi] ?? false; if ($ykemyeyyuisoeegu === false) { $occymigcemkqucuw = false; $aggamyqqskiqkcea = self::mmqiaskgsaymagmk; } else { if (!$ykemyeyyuisoeegu) { $occymigcemkqucuw = false; $aggamyqqskiqkcea = self::uyioyycseoqomeoq; } else { $keccaugmemegoimu = $this->eykosmsuqcyueagm($ykemyeyyuisoeegu); if (isset($keccaugmemegoimu[Constants::ckcawaoawwioqecq]) && $keccaugmemegoimu[Constants::ckcawaoawwioqecq]) { if ($keccaugmemegoimu['score'] < 0.5 && Setting::VERSION_3 === $this->aaiqmckgssqmwqyc()) { $occymigcemkqucuw = false; $aggamyqqskiqkcea = self::omkowsgwgsgiwaoa; } } else { if (in_array(self::uaowqiioakckyisq, $keccaugmemegoimu['error-codes'], true) || in_array(self::waykswawkyiyamkc, $keccaugmemegoimu['error-codes'], true)) { $occymigcemkqucuw = false; $aggamyqqskiqkcea = self::siuiuwsyuaaeyoso; } else { $occymigcemkqucuw = false; $aggamyqqskiqkcea = self::qceqiuuakwieousk; } } } } } } } if (!$occymigcemkqucuw) { $ueeagokqmgisgauy = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->iwcyqwuymeoesqem($aggamyqqskiqkcea), 400); } return $this->ocksiywmkyaqseou('recaptcha_limit_attempts_check', [Constants::imqkacyywmmamsqm => $occymigcemkqucuw, 'reason' => $aggamyqqskiqkcea, Constants::iwyueouqaqegmcas => $ueeagokqmgisgauy], $eaoumsseceiowgsk); } public final function yuuymuwyqoqewkei(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); } public final function eoaaqqwmaswwweku() : bool { $gmeoaiyogiokeeau = false; $oyaokckqkgoscygw = (array) $this->yuuymuwyqoqewkei(Setting::geoseomocwukewek, []); if ($oyaokckqkgoscygw) { $wmgqwuwkogoacccs = $this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo(); $gmeoaiyogiokeeau = $wmgqwuwkogoacccs && in_array($wmgqwuwkogoacccs, $oyaokckqkgoscygw, true); } return $gmeoaiyogiokeeau; } public final function wmkggougegmmywqg(string $ccamueccusigaaio) : bool { return !$this->ockgcoyewecmsqag() && in_array($ccamueccusigaaio, $this->yuuymuwyqoqewkei(Setting::qsiqukssagkcqqig, []), true); } public final function kiysyykiwyiaqwou() : bool { $qqkyekmackggcick = false; global $current_user; if (isset($current_user->roles[0]) && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $qqkyekmackggcick = in_array($current_user->roles[0], $this->yuuymuwyqoqewkei(Setting::iogswiaewsiiqyac, []), true); } return $qqkyekmackggcick; } public final function ockgcoyewecmsqag() : bool { return $this->yuuymuwyqoqewkei(Setting::osoeuigkqaueacqg, false) && $this->yuuymuwyqoqewkei(Setting::vagagcuyyeiqoikg) && $this->yuuymuwyqoqewkei(Setting::mkuaccemgegcsyuq); } public final function aaiqmckgssqmwqyc() : string { return (string) $this->yuuymuwyqoqewkei(Setting::auugqowqueaocgsu, Setting::wceagiqwmmkosoqc); } public function akmqwuowiiwcksec() : array { $omeasucccsgakucy = Setting::symcgieuakksimmu()->owycguwssqiceayq(); return $this->ocksiywmkyaqseou('security_recaptcha_forms', $omeasucccsgakucy); } public final function iwcyqwuymeoesqem(string $ymacoouqwcqwwagu = self::mmeksogaieuuikmq, bool $koaqeegoeiaiccse = false) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wumguikkgaigkoee = [ self::uyioyycseoqomeoq => __('User response is missing.', PR__MDL__SECURITY), self::uaowqiioakckyisq => __('Secret Key is missing.', PR__MDL__SECURITY), self::waykswawkyiyamkc => sprintf('%s %s %s.', $swqimwqeweekeusq->ciuuiyckmsygceis(__('Secret Key is invalid.', PR__MDL__SECURITY)), $swqimwqeweekeusq->yuawgssgauywkiia(__('Check your domain configurations', PR__MDL__SECURITY), 'https://www.google.com/recaptcha/admin#list'), __('and enter it again', PR__MDL__SECURITY)), self::ouigakuqekauuiae => __('User response is invalid', PR__MDL__SECURITY), self::mmeksogaieuuikmq => __('You have entered an incorrect reCAPTCHA value.', PR__MDL__SECURITY), self::ewiwasqsgesysueq => __('More than one reCAPTCHA has been found in the current form. Please remove all unnecessary reCAPTCHA fields to make it work properly.', PR__MDL__SECURITY), self::omkowsgwgsgiwaoa => __('reCAPTCHA v3 test failed', PR__MDL__SECURITY), ]; if (isset($wumguikkgaigkoee[$ymacoouqwcqwwagu])) { $uamcoiueqaamsqma = $wumguikkgaigkoee[$ymacoouqwcqwwagu]; } else { $uamcoiueqaamsqma = $wumguikkgaigkoee['incorrect']; } $uamcoiueqaamsqma = __('reCAPTCHA', PR__MDL__SECURITY) . ": {$uamcoiueqaamsqma}"; if ($koaqeegoeiaiccse) { echo $uamcoiueqaamsqma; } return $uamcoiueqaamsqma; } public function aoomuuaiueuouuuu(array $ywmkwiwkosakssii = []) : string { $ewgwqamkygiqaawc = ''; if ($this->ockgcoyewecmsqag()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!$this->eoaaqqwmaswwweku()) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, 200), Constants::mgsccwumkcawaqcy => false, Constants::auugqowqueaocgsu => $this->aaiqmckgssqmwqyc(), 'recaptcha_name' => Recaptcha::aaskskmcwakmsogi, 'container_attrs' => []]); $ccamueccusigaaio = $ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy] ?? false; if (!$ccamueccusigaaio || $this->wmkggougegmmywqg($ccamueccusigaaio)) { $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw('index', $ywmkwiwkosakssii, ['class' => Recaptcha::class]); $swqimwqeweekeusq->wwckmeoskuagomki(self::iaaswmggymkykcys, 1); } } else { if ($uamcoiueqaamsqma = $this->yuuymuwyqoqewkei(Setting::ekgssegcouwygqqu, '')) { $ewgwqamkygiqaawc = $swqimwqeweekeusq->uuccukgasskgimsq('label', [], $uamcoiueqaamsqma); } } } return $ewgwqamkygiqaawc; } }
