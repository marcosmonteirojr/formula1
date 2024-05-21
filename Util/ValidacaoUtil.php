<?php
class Validacao {
    public static function validarTexto($texto, $minLength = 3, $maxLength = 255) {
        if (empty($texto) || strlen($texto) < $minLength || strlen($texto) > $maxLength) {
            return false;
        }
        return true;
    }

    public static function validarEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public static function validarNumeroInteiro($numero) {
        if (!is_numeric($numero) || $numero != intval($numero)) {
            return false;
        }
        return true;
    }

    public static function validarNumeroDecimal($numero) {
        if (!is_numeric($numero)) {
            return false;
        }
        return true;
    }
}
