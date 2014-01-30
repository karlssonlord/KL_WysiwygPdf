<?php


class KL_WysiwygPdf_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Extract href attribute from data containing the pdf url
     *
     * @param $data
     * @return mixed
     */
    public function getPdfHref($data)
    {
        $dom = new DOMDocument;
        @$dom->loadHTML($data);
        if (strstr($data, 'href')) {
            foreach ($dom->getElementsByTagName('a') as $tag) {
                $href = $tag->getAttribute('href');
            }
        } else {
            $href = $data;
        }
        return $href;
    }
} 
