<?php
class ConfigurationManager {
    private static $configFile = 'config.txt';
    
    // Write default configuration to the file
    public static function writeDefaultConfig() {
        $content = "servername=\nusername=\npassword=\ntableName=";
        file_put_contents(self::$configFile, $content);
    }
    
    // Read configuration from the file
    public static function readConfig() {
        if (!file_exists(self::$configFile)) {
            self::writeDefaultConfig(); // Restore the file if it doesn't exist
        }
        
        $lines = file(self::$configFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $config = [];
        foreach ($lines as $line) {
            list($key, $value) = explode('=', $line, 2) + [NULL, NULL];
            if (!is_null($key)) {
                $config[trim($key)] = trim($value);
            }
        }
        
        return $config;
    }
}
?>