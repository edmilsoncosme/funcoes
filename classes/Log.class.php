<?php

/**
 * Description of Log
 *
 * @author Edmilson
 */
abstract class Log {

    /**
     * Construtor do tipo protegido previne que uma nova instância da
     * Classe seja criada através do operador `new` de fora dessa classe.
     */
    protected function __construct()
    {
    }

    /**
     * Método clone do tipo privado previne a clonagem dessa instância
     * da classe
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Método unserialize do tipo privado para prevenir a desserialização
     * da instância dessa classe.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
    
    /**
     * Retorna uma instância única de uma classe.
     *
     * @staticvar Log $instance A instância única dessa classe.
     *
     * @return Log A Instância única.
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
