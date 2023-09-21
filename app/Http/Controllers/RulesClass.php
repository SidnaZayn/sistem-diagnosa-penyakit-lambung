<?php

/*
* 0 = TIDAK
* 1 = AGAK
* 2 = YA
**/

class RulesClass
{
    public static function is_gastritis_atau_maag($muntah_asam, $muntah_darah, $panas, $sakit_perut_atau_nyeri, $buang_air_besar, $bibir_kering_pecah_hingga_mulut_luka, $pusing, $kembung_perut_bagian_atas, $bengkak_rahang, $feses_berdarah_berlendir, $tidak_buang_besar)
    {
        // "muntah asam, muntah darah, "
        if ($muntah_asam >= 1 && $muntah_darah == 0 ) {
            # code...
        }
    }
}