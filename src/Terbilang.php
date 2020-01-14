<?php

namespace Hammunima\Terbilang;

class Terbilang {

    public static function coba() {
        return 'Hello World!';
    }

    public static function nominal($nominal) {
        if (!is_numeric($nominal)) {
            return false;
        }        
        // return Self::kata($nominal) . ' rupiah';
        return Self::kata($nominal);
    }

    public static function kata($x) {
        $x = abs($x);

        $angka = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($x < 12) {
            $temp = " " . $angka[$x];
        } else if ($x < 20) {
            $temp = self::kata($x - 10) . " belas";
        } else if ($x < 100) {
            $temp = self::kata($x / 10) . " puluh" . self::kata($x % 10);
        } else if ($x < 200) {
            $temp = " seratus" . self::kata($x - 100);
        } else if ($x < 1000) {
            $temp = self::kata($x / 100) . " ratus" . self::kata($x % 100);
        } else if ($x < 2000) {
            $temp = " seribu" . self::kata($x - 1000);
        } else if ($x < 1000000) {
            $temp = self::kata($x / 1000) . " ribu" . self::kata($x % 1000);
        } else if ($x < 1000000000) {
            $temp = self::kata($x / 1000000) . " juta" . self::kata($x % 1000000);
        } else if ($x < 1000000000000) {
            $temp = self::kata($x / 1000000000) . " milyar" . self::kata(fmod($x, 1000000000));
        } else if ($x < 1000000000000000) {
            $temp = self::kata($x / 1000000000000) . " trilyun" . self::kata(fmod($x, 1000000000000));
        }
        return $temp;
    }
}