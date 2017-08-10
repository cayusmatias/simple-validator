<?php
/**
 * :attribute => nome do input
 * :params => regras dos parâmetros ( eg: :params(0) = 10 of max_length(10) )
 */
return array(
    'required' => 'O campo :attribute é obrigatório',
    'integer' => 'O campo :attribute deve ser um número inteiro',
    'float' => 'O campo :attribute deve ser um número ponto flutiante',
    'numeric' => 'O campo :attribute deve ser numérico',
    'email' => 'O campo :attribute não contém um endereço de email válido',
    'alpha' => 'O campo :attribute deve conter apenas letras',
    'alpha_numeric' => 'O Campo :attribute deve ser um valor alfanumérico',
    'ip' => 'O campo :attribute deve conter um número IP válido',
    'url' => 'O campo :attribute deve conter uma URL',
    'max_length' => 'O campo :attribute deve ter no máximo :params(0) caracteres',
    'min_length' => 'O campo :attribute deve ter no mínimo :params(0) caracteres',
    'exact_length' => 'O campo :attribute deve ter exatamente :params(0) caracteres',
    'equals' => 'O campo :attribute deve ser igual a :params(0)'
);
