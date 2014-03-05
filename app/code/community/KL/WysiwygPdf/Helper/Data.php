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

        $hrefs = array();
        if (strstr($data, 'href')) {
            foreach ($dom->getElementsByTagName('a') as $tag) {
                $hrefs[] = $tag->getAttribute('href');
            }
        }
        else {
            $hrefs[] = $data;
        }

        return $hrefs;
    }
}