<?php namespace Masterkey\Shield;
    /*
     *              ________________________________________
     *     ________|                                        |_______
     *     \       |           Masterkey Shield             |      /
     *      \      | Copyright © 2016 Masterkey Informática |     /
     *      /      |________________________________________|     \
     *     /__________)                                (___________\
     *
     * Os direitos acima e esta permissão informam que devem ser incluídas
     * em todas as cópias ou substanciais porções do software
     * =======================================================================
     * O SOFTWARE É FORNECIDO "COMO ESTÁ". TODAS AS MODIFICAÇÕES, SEJAM ELAS
     * INCLUSÕES, EXCLUSÕES OU CORREÇÕES DEVEM SER FEITAS EM CONFORMIDADE E COM
     * A PERMISSÃO DO AUTOR DO SOFTWARE. CASO HAJA QUALQUER ALTERAÇÃO NÃO
     * AUTORIZADA PELO O AUTOR, O MESMO NÃO SE RESPONSABILIZA POR QUALQUER FALHA
     * OU PERDA DE DADOS, DECORRENTE DE ERROS DE SOFTWARE
     * =======================================================================
     * original filename  : Sql.php
     * author             : Matheus Lopes Santos (@devMatheusLopes)
     * email              : fale_com_lopez@hotmail.com
     * =======================================================================
     */

    /**
     * Sql
     *
     * Classe desenvolvida para sanitizar uma string contra ataques de SQL Injection
     *
     * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @version 1.0.0
     * @since   01/03/2016
     */
    class Sql
    {
        /**
         * Realiza a limpeza de uma string não segura para uma string segura,
         * digna de ser utilizada em uma sql statement sem preocupações
         *
         * @access  public
         * @since   1.0.0 - 01/03/2016
         * @param   string  $valor_sujo
         * @return  string
         */
        public static function clear($valor_sujo = '')
        {
            // Retira possiveis palavras chaves do sql
            $string_segura = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\|1=1)/", "", $valor_sujo);

            // Limpa espaços vazios
            $string_segura = trim($string_segura);

            //tira tags html e php
            $string_segura = strip_tags($string_segura);

            //Adiciona barras invertidas a uma string
            $string_segura = addslashes($string_segura);

            return ($string_segura == '') ? NULL : $string_segura;
        }
    }
