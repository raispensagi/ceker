<?php
 goto MzGcu; r93QL: $total = trim(fgets(STDIN)); goto nnJZX; nnJZX: function acak($panjang) { $karakter = "\x41\x42\x43\104\105\x46\x47\110\111\x4a\113\x4c\x4d\116\117\x50\121\x52\x53\124\125\x56\x57\x58\x59\132\141\142\x63\144\145\x66\x67\150\x69\152\153\x6c\x6d\156\x6f\160\161\162\x73\x74\x75\x76\x77\x78\x79\x7a\61\x32\x33\64\65\66\x37\x38\x39"; $string = ''; for ($i = 0; $i < $panjang; $i++) { $pos = rand(0, strlen($karakter) - 1); $string .= $karakter[$pos]; } return $string; } goto WL6UV; MzGcu: echo "\124\x6f\x74\x61\154\x20\x41\x6b\x75\156\x20\x59\x61\156\147\40\115\x61\x75\40\x44\x69\x62\x75\x61\164\x20\72\40"; goto r93QL; WL6UV: for ($x = 1; $x <= $total; $x++) { $hasil_1 = acak(6); $hasil_2 = acak(7); $headers = array(); $headers[] = "\x55\163\x65\x72\55\101\147\x65\x6e\x74\x3a\40\x53\x70\157\164\x69\146\171\x2f\70\x2e\65\56\x35\x31\x20\x41\x6e\x64\x72\x6f\151\x64\57\x32\62\x20\50\123\115\x2d\101\71\60\x38\x4e\x29"; $headers[] = "\103\x6f\x6e\164\x65\156\x74\x2d\124\x79\x70\x65\x3a\x20\x61\x70\160\x6c\x69\x63\x61\x74\151\x6f\x6e\x2f\170\x2d\167\x77\x77\x2d\x66\x6f\x72\155\x2d\165\162\154\x65\156\x63\x6f\x64\145\144"; $getnada = curl("\150\164\x74\x70\x73\72\57\x2f\x67\145\x74\x6e\141\144\141\56\143\x6f\x6d\x2f\141\160\x69\57\x76\61\x2f\151\x6e\x62\x6f\170\x65\163\x2f" . $hasil_1 . "\x40\147\x65\164\156\x61\144\x61\x2e\143\157\155", null, null); $gas = curl("\150\164\x74\x70\x73\72\x2f\57\163\160\x63\x6c\151\x65\156\164\x2e\167\x67\56\x73\160\x6f\x74\151\x66\x79\x2e\143\157\155\x2f\x73\x69\x67\x6e\x75\160\57\160\x75\142\154\x69\143\x2f\x76\x31\x2f\x61\143\x63\x6f\x75\156\x74\x2f", "\153\145\x79\x3d\61\64\x32\x62\x35\70\x33\x31\62\x39\142\x32\x64\146\70\62\71\144\145\63\x36\x35\x36\x66\71\145\x62\64\70\64\x65\66\46\x70\141\163\163\167\157\x72\144\75\101\x6e\x6a\x61\x79\100\x31\x32\63\x26\x63\x72\145\x61\164\151\x6f\156\137\x70\157\151\156\164\x3d\x63\154\x69\145\156\x74\137\x6d\x6f\x62\151\154\145\x26\x6e\141\x6d\x65\75\101\167\167\x26\x67\x65\156\x64\x65\x72\75\155\x61\x6c\x65\46\151\x61\x67\162\x65\145\75\x74\x72\x75\x65\46\160\x6c\x61\x74\146\157\x72\x6d\x3d\101\x6e\x64\x72\157\151\144\x2d\101\x52\x4d\x26\142\x69\x72\x74\x68\x5f\x64\141\x79\x3d\x36\46\x62\151\x72\164\x68\x5f\155\x6f\x6e\164\150\75\64\x26\142\x69\x72\164\150\x5f\171\x65\141\x72\75\62\x30\x30\x36\46\160\141\x73\163\167\x6f\162\144\x5f\x72\145\160\x65\x61\x74\75\101\156\152\x61\x79\100\61\x32\x33\46\145\x6d\141\151\154\x3d" . $hasil_1 . "\100\x67\x65\164\156\x61\144\141\56\x63\x6f\x6d", $headers); if (strpos($gas[1], "\x45\x6d\141\151\x6c\40\x69\164\165\40\163\165\144\x61\150\40\x74\145\162\144\141\x66\164\x61\x72\40\x70\141\144\141\x20\141\153\165\156\56")) { echo "\133\x47\x61\x67\x61\x6c\135\40{$hasil_1}\100\x67\x65\164\156\x61\x64\141\56\143\x6f\155\174\101\156\152\x61\171\100\61\62\63\12"; } else { echo "\x5b\x53\165\143\x63\145\163\163\x20\x52\x65\x67\151\x73\164\145\x72\x5d\40{$hasil_1}\x40\x67\145\x74\x6e\141\144\x61\x2e\x63\157\155\174\x41\156\x6a\x61\171\x40\61\62\63\xa"; fwrite(fopen("\163\x70\x6f\164\x69\146\171\55\154\151\x76\145\x2e\164\x78\x74", "\x61"), "\x5b\123\x75\143\x63\x65\163\163\40\122\x65\x67\x69\163\x74\x65\162\x5d\x20\x7c\40{$hasil_1}\100\147\145\164\156\141\x64\141\x2e\143\x6f\x6d\x7c\101\x6e\x6a\141\171\100\x31\x32\x33\40\12"); } } goto XBrGG; XBrGG: function curl($url, $post, $headers) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HEADER, 1); if ($headers !== null) { curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); } if ($post !== null) { curl_setopt($ch, CURLOPT_POSTFIELDS, $post); } $result = curl_exec($ch); $body = substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); preg_match_all("\x2f\136\123\145\x74\x2d\103\x6f\x6f\x6b\x69\145\x3a\134\x73\x2a\50\133\136\73\x5d\x2a\51\57\155\x69", $result, $matches); $cookies = array(); foreach ($matches[1] as $item) { parse_str($item, $cookie); $cookies = array_merge($cookies, $cookie); } return array($headers, $body, $cookies); }