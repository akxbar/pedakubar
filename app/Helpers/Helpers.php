<?php

if (!function_exists('getYt')) {
    function getYt($url)
    {
        // Parse URL dan ambil query string
        $parsedUrl = parse_url($url);
        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParams);
            if (isset($queryParams['v'])) {
                return $queryParams['v'];
            }
        }
        return null; // Kode tidak ditemukan
    }
}


if (!function_exists('getbulan')) {
    function getbulan($bulan)
    {
        $months = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        return $months[$bulan] ?? 'Tidak Ada data';
    }
}


if (!function_exists('getBln')) {
    function getBln($tgl)
    {
        if (!empty($tgl)):
            $tanggal = substr($tgl, 8, 2);
            $bulan = getBulan(substr($tgl, 5, 2));
            $tahun = substr($tgl, 0, 4);
            return $bulan;
        else:
            return '-';
        endif;
    }
}

if (!function_exists('getBt')) {
    function getBt($tgl)
    {
        if (!empty($tgl)):
            $tanggal = substr($tgl, 8, 2);
            $bulan = getBulan(substr($tgl, 5, 2));
            $tahun = substr($tgl, 0, 4);
            return $bulan . ' ' . $tahun;
        else:
            return '-';
        endif;
    }
}

if (!function_exists('getTahun')) {
    function getTahun($tgl)
    {
        if (!empty($tgl)):
            $tanggal = substr($tgl, 8, 2);
            $bulan = getBulan(substr($tgl, 5, 2));
            $tahun = substr($tgl, 0, 4);
            return $tahun;
        else:
            return '-';
        endif;
    }
}

if (!function_exists('getTgl')) {
    function getTgl($tgl)
    {
        if (!empty($tgl)):
            $tanggal = substr($tgl, 8, 2);
            $bulan = getBulan(substr($tgl, 5, 2));
            $tahun = substr($tgl, 0, 4);
            return $tanggal;
        else:
            return '-';
        endif;
    }
}

if (!function_exists('getHari')) {
    function getHari($tgl)
    {
        $hari = date('w', strtotime($tgl));
        $hari_ini = ['', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'][$hari];
        return $hari_ini;
    }
}

if (!function_exists('tgl_indo')) {
    function tgl_indo($tgl)
    {
        if (!empty($tgl)):
            $tanggal = substr($tgl, 8, 2);
            $bulan = getBulan(substr($tgl, 5, 2));
            $tahun = substr($tgl, 0, 4);
            return $tanggal . ' ' . $bulan . ' ' . $tahun;
        else:
            return '-';
        endif;
    }

    if (!function_exists('tgl_singkat')) {
        function tgl_singkat($tgl)
        {
            if (!empty($tgl)):
                $tanggal = substr($tgl, 8, 2);
                $bulan = getBulan(substr($tgl, 5, 2));
                $tahun = substr($tgl, 0, 4);
                return $tanggal .
                    '-' .
                    substr(stripslashes($bulan), 0, 3) .
                    '-' .
                    $tahun;
            else:
                return '-';
            endif;
        }
    }
}

if (!function_exists('ubahTgl')) {
    function ubahTgl($tanggal)
    {
        if (!empty($tanggal)):
            $pisah = explode('-', $tanggal);
            $larik = [$pisah[2], $pisah[1], $pisah[0]];
            $satukan = implode('-', $larik);
            return $satukan;
        else:
            return '-';
        endif;
    }
}

if (!function_exists('ubahTgl2')) {
    function ubahTgl2($tanggal)
    {
        if (!empty($tanggal)):
            $pisah = explode('/', $tanggal);
            $larik = [$pisah[2], $pisah[1], $pisah[0]];
            $satukan = implode('-', $larik);
            return $satukan;
        else:
            return '-';
        endif;
    }
}
