<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b7068eb34             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security\Recaptcha; use Exception; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; class API extends BaseClass { public function __construct() { $this->domain = "\x68\164\164\160\163\72\57\57\167\167\x77\x2e\x67\157\x6f\x67\x6c\x65\x2e\x63\x6f\155\57\162\x65\143\141\160\x74\x63\x68\141\57\x61\x70\x69"; $this->ueqoossgegqyosem(["\x73\x65\x63\x72\145\164" => null, "\x72\x65\x73\x70\157\x6e\163\x65" => null]); parent::__construct(); } public function iywiwaoieigskusm($agguukmgmwmmmcow, $keccaugmemegoimu, $yeceiswwssseqgqc, array $qiouiwasaauyaaue = []) { $kuukgsmqkagwaciu = null; $iswcokucwmiosiaq = null; $occymigcemkqucuw = false; try { $this->ueqoossgegqyosem(["\x73\145\143\162\x65\164" => $agguukmgmwmmmcow, "\x72\x65\163\160\x6f\x6e\163\x65" => $keccaugmemegoimu, "\x72\145\x6d\157\164\145\151\x70" => $yeceiswwssseqgqc], true); $kuukgsmqkagwaciu = $this->get("\x2f\163\151\x74\145\166\145\162\x69\146\171", $qiouiwasaauyaaue); $kuukgsmqkagwaciu = $this->qemyqseaomicaacs($kuukgsmqkagwaciu); if ($kuukgsmqkagwaciu) { $occymigcemkqucuw = true; } } catch (Exception $wgaoewqkwgomoaai) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai); } return $occymigcemkqucuw && $kuukgsmqkagwaciu ? $kuukgsmqkagwaciu : [Constants::ckcawaoawwioqecq => false, Constants::imkacwmiuiykyuim => $iswcokucwmiosiaq, "\x65\162\162\157\x72\x2d\143\157\144\x65\x73" => ["\147\145\x6e\x65\x72\x61\154\x2d\146\141\x69\154"]]; } }
