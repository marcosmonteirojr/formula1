<?php
class Helper
{
    public static function setMessagem($type, $message)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['mensagem'][$type][] = $message;
    }

    public static function getMessagem()
    {
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
    public static function getForm($valor = "")
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($valor) && isset($_SESSION['piloto_form'][$valor])) {
            return $_SESSION['piloto_form'][$valor];
        } else {
            return '';
        }
    }
    public static function limpaForm()
    {
        if (isset($_SESSION['piloto_form'])) {
            unset($_SESSION['piloto_form']);
        }
    }
}
