<?php

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


$site = 'https://www.viswajitnikhathgymnastiks.in/';
$level = 1;
$links_array = array();


// To ignore unwanted urls
function filterURL($url) {
    if(
        strpos($url, 'tel:') !== false || 
        strpos($url, 'wa.me') !== false || 
        strpos($url, 'mailto:') !== false ||
        strpos($url, 'whatsapp:') !== false ||
        strpos($url, 'www.facebook.com') !== false ||
        strpos($url, 'www.instagram.com') !== false ||
        strpos($url, 'g.page') !== false ||
        strpos($url, '..') !== false
        
    ) { return true; }
    return false;
}

function addDomainToURL($url) {
    global $site;
    if($url == '/') return $site;
    if(strpos($url, $site) == false) {
        return $site . $url;
    }
    else {
        return $url;
    }
}

function getURLs($domain) {
    
    global $level;
    global $links_array;

    // echo $level . '<br>';
    // echo "Domain: $domain<br>";
    $level++;


    // Webpage URL
    $webUrl= $domain;
    $html = file_get_contents($webUrl);
    
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    
    // get all the content on the page
    $xpath = new DOMXPath($dom);
    
    // finding the a tag
    $hrefs = $xpath->evaluate("/html/body//a");

    //Loop to display all the links
    for ($i = 0; $i < $hrefs->length; $i++)
    {
        $href = $hrefs->item($i);
        $url = $href->getAttribute('href');
        if(!in_array(addDomainToURL($url), $links_array)){
            if (!filterURL($url)) {

                $links_array[] = addDomainToURL($url);
                // echo "URL : " . addDomainToURL($url) . "<br>";

                // getURLs(addDomainToURL($url));

                if($level < 200) getURLs(addDomainToURL($url)); // Next Level Down

            }
        }
        else {
            // do nothing
        }
        // echo $url."<br>";
    }
}

function writeSitemap($links_array) {

    $sitemap = fopen("../sitemap.xml", "w") or die("Unable to open file!");
    $xml = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";
    $xml = $xml . ' <!--  created automatically by AMR Sitemap Generator  -->';

    for($i = 0; $i < count($links_array); $i++) {
        $xml = $xml . " 
        <url>
            <loc>$links_array[$i]</loc>
            <lastmod> " . date("Y-m-d") . "T". date("H:i:s+05:30") . "</lastmod>
            <priority>1.00</priority>
        </url>";
    }
    $xml = $xml . "\n</urlset>";

    fwrite($sitemap, $xml);
    fclose($sitemap);
}


getURLs($site);
writeSitemap($links_array);



echo '<pre>';
print_r($links_array);
echo '</pre>';


?>