<?php
class Helper {
    public static function setMessagem($type, $message) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['mensagem'][$type][] = $message;
    }

    public static function getMessagem() {
        if (!isset($_SESSION)) {
            session_start();
        }
        
        if (isset($_SESSION['mensagem'])) {
            foreach ($_SESSION['mensagem'] as $type => $messages) {
                foreach ($messages as $message) {
                    echo "<div class='alert alert-{$type}'>{$message}</div>";
                }
            }
            unset($_SESSION['mensagem']); // Limpa as mensagens após exibi-las
        }
    }
}