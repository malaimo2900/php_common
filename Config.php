<?php

namespace common;

// do configuration of the application
class Config
{

    private $valid_types = array(
        'log',
        'system',
        'php_value'
    );
    private $log_file;
    private $system = array();
    private $php_value = array();

    private static $instance = null;
    
    public static function obj($file = null)
    {
        if ($file === null)
        {
            $file = new \SplFileInfo($file);

            if (!$file->isReadable())
                throw new \RuntimeException('File does not exist');

            $config = parse_ini_file($file->getRealPath(), TRUE);

            self::$instance = new Config();

            foreach ($config as $type => $value)
            {
                if (in_array($type, self::$valid_types))
                {
                    self::$instance->{'set_' . strtolower($type)}($config[$type]);
                }
            }
            unset($file, $config, $type, $value);
        }
        return self::$instance;
    }

    private function set_log(array $logInfo)
    {
        $file = new \SplFileInfo($logInfo['file']);
        
        if (!$file->isWritable())
            throw new \RuntimeException('File does not exist');
        
        self::$log_file = $file->getRealPath();
    }

    private function set_system(array $system_info)
    {
        $this->system = $system_info;
    }

    public function __get($name)
    {
        if (!in_array($this->valid_types, $name))
        {
            throw new \UnexpectedValueException('Property does not exist');
        }
        return $this->$name;
    }

}
