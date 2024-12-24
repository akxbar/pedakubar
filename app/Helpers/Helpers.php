<?php

if (!function_exists('getYt')) {
    function getYt($url)
    {
        // Parse URL dan ambil query string
        $pattern = '/(?:youtube\.com\/(?:.*[?&]v=|(?:embed|v|e)\/|.*[?&]list=.*[?&]v=)|youtu\.be\/|youtube\.com\/user\/.*#.*\/|youtube\.com\/.*#p\/.*\/)([a-zA-Z0-9_-]{11})/';
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
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
        return date('d', strtotime($tgl)) ?: '-';
    }
}

if (!function_exists('getHari')) {
    function getHari($tgl)
    {
        return ['', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'][(int) date('w', strtotime($tgl))];
    }
}

if (!function_exists('tgl_indo')) {
    function tgl_indo($tgl)
    {
        return empty($tgl) ? '-' : date('d F Y', strtotime($tgl));
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


if (!function_exists('getTimePeriod')) {
    function getTimePeriod($hour)
    {
        if ($hour >= 4 && $hour < 6) {
            return "Early Morning (Subuh)";
        } elseif ($hour >= 6 && $hour < 9) {
            return "Morning";
        } elseif ($hour >= 9 && $hour < 12) {
            return "Late Morning";
        } else {
            return "Out of Morning Range";
        }


        // $currentHour = date("G");
    }

}
