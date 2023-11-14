<?php

function loadXmlFile() {
    do {        
        echo "Enter the name of the file: ";
        $fileName = readline();
        $fileName .= '.xml';
        
        $xml = new XMLReader();
        $fileOpened = $xml->open($fileName);
        
        if (!$fileOpened) {
            echo "Error opening the XML file. Please try again.\n";
        }
    } while (!$fileOpened);
    
    return $xml;
}

?>