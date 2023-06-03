<?php
error_reporting(0);

function time_elapsed_A($secs)
{
    $bit = array(
        'tahun' => $secs / 31556926 % 12,
        'bulan' => $secs / 604800 % 52,
        'hari' => $secs / 86400 % 7,
        'jam' => $secs / 3600 % 24,
        'menit' => $secs / 60 % 60,
        // 'detik' => $secs % 60
    );

    foreach ($bit as $k => $v)
        if ($v > 0) $ret[] = $v . $k;

    return join(' ', $ret);
}

function tgl($tanggal)
{
    $th = substr($tanggal, 0, 4);
    $bl = substr($tanggal, 5, 2);
    $tg = substr($tanggal, 8, 2);

    return $tg . ' - ' . $bl . ' - ' . $th;
}
