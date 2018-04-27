<?php

/**
 * Description of Log
 *
 * @author Edmilson
 */
abstract class Log {

    /**
     * Construtor do tipo protegido previne que uma nova inst�ncia da
     * Classe seja criada atrav�s do operador `new` de fora dessa classe.
     */
    protected function __construct()
    {
    }

    /**
     * M�todo clone do tipo privado previne a clonagem dessa inst�ncia
     * da classe
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * M�todo unserialize do tipo privado para prevenir a desserializa��o
     * da inst�ncia dessa classe.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
    
    /**
     * Retorna uma inst�ncia �nica de uma classe.
     *
     * @staticvar Log $instance A inst�ncia �nica dessa classe.
     *
     * @return Log A Inst�ncia �nica.
     */
    public static function getIntance(){
        static $instance = null;
        if(null=== $instance){
            $instance = new static();
        }
        return $instance;
            
    }
    
    public static function escreverLog($texto) {                     
        $hoje = date("Y_m_d");
        if (!is_dir("Log")) {
            mkdir("Log");
        }
        $arquivo = fopen("Log/log_tarefa.$hoje.txt", "ab");
        fwrite($arquivo, "$texto .\r\n");
        $hora = date("H:i:s T");
        fwrite($arquivo, "[$hora] Tarefa executada.\r\n");
        fclose($arquivo);
    }

}
