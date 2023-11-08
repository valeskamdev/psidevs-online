<?php

namespace Psidevs\Entity;

use DateTime;

abstract class Utilitarios
{
    public static function dataParaBanco(string $data) : DateTime
    {
        return DateTime::createFromFormat('Y-m-d', $data);
    }

    public static function codificaSenha(string $senha): string
    {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    public static function formataString($str): string
    {
        $str = strtolower($str);
        $str = str_replace(' ', '_', $str);
        $str = iconv('UTF-8', 'ASCII//TRANSLIT', $str);

        return preg_replace('/[^a-z0-9_]/', '', $str);
    }

    public static function inputAnoConclusao(): array
    {
        $ano_atual = date("Y");
        $anos = [];
        for ($ano = $ano_atual; $ano >= 1930; $ano--) {
            $anos[] = strval($ano);
        }
        return $anos;
    }

    public static function formataPreco(float $preco) : string
    {
        return "R$ " .  number_format($preco, 2, ',', '.');
    }

    public static function precoParaBanco(string $preco) : float
    {
        $preco = str_replace('R$ ', '', $preco);
        $preco = str_replace('.', '', $preco);
        $preco = str_replace(',', '.', $preco);
        return floatval($preco);
    }

    public static function dataHoraParaBanco(string $data, string $hora): DateTime
    {
        $data = DateTime::createFromFormat('d/m/Y', $data);
        $hora = DateTime::createFromFormat('H:i', $hora);
        $data->setTime($hora->format('H'), $hora->format('i'));
        return $data;
    }

    public static function formataData(DateTime $data): string
    {
        return $data->format('d/m/Y');
    }

    public static function formataHora(DateTime $data): string
    {
        return $data->format('H:i');
    }

    public static function formataDataParaInputDate(DateTime $data): string
    {
        return $data->format('Y-m-d');

    }

    public static function formataDiaDaSemana(string $palavra) : string
    {
        $palavra = strtolower($palavra);
        $palavra = self::formataString($palavra);
        $palavra = ucwords($palavra);
        return substr($palavra, 0, 3);
    }

    public static function primeriaLetraMaiscula(string $status) : string
    {
        return ucwords($status);
    }
}