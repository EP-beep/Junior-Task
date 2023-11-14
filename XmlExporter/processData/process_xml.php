<?php

class ProductLoader {
    public function loadProductsFromXML($xmlReader) {
        $productsArray = [];
        
        while ($xmlReader->read()) {
            if ($xmlReader->nodeType == XMLReader::ELEMENT && $xmlReader->name == 'item') {
                $productXmlString = $xmlReader->readOuterXml();
                $productXmlElement = new SimpleXMLElement($productXmlString);
                
                $product = new Product();
                $product->entityId = (integer)$productXmlElement->entity_id;
                $product->categoryName = (string)$productXmlElement->CategoryName;
                $product->sku = (string)$productXmlElement->sku;
                $product->name = (string)$productXmlElement->name;
                $product->shortDesc = (string)$productXmlElement->shortdesc;
                $product->price = (string)$productXmlElement->price;
                $product->link = (string)$productXmlElement->link;
                $product->image = (string)$productXmlElement->image;
                $product->brand = (string)$productXmlElement->Brand;
                $product->rating = (string)$productXmlElement->Rating;
                $product->caffeineType = (string)$productXmlElement->CaffeineType;
                $product->count = (string)$productXmlElement->Count;
                $product->flavored = (string)$productXmlElement->Flavored;
                $product->Seasonal = (string)$productXmlElement->Seasonal;
                $product->inStock = (string)$productXmlElement->Instock;
                $product->facebook = (string)$productXmlElement->Facebook;
                $product->isKCup = (string)$productXmlElement->IsKCup;
                
                $productsArray[] = $product;
            }
        }
        
        return $productsArray;
    }
}

?>