<?php

function get_page_content(String $page_location): array
{
    $html = file_get_contents($page_location);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    // Extract body text
    $body = $dom->getElementsByTagName('body')->item(0)->nodeValue ?? '';
    $cleaned_text = preg_replace('/\s+/', ' ', strip_tags($body));

    // Extract title
    $title = $dom->getElementsByTagName('title')->item(0)?->nodeValue ?? substr($cleaned_text, 0, 60);

    // Extract canonical URL
    $url = '';
    foreach ($dom->getElementsByTagName('link') as $link) {
        if ($link->getAttribute('rel') === 'canonical') {
            $url = $link->getAttribute('href');
            break;
        }
    }

    // Fallback to current path
    if (empty($url)) {
        $url = $_SERVER['PHP_SELF'];
    }

    // Extract keywords
    $keywords = [];
    foreach ($dom->getElementsByTagName('meta') as $meta) {
        if ($meta->getAttribute('name') === 'keywords') {
            $keywords = array_map('trim', explode(',', $meta->getAttribute('content')));
            break;
        }
    }

    // Generate description
    $description = substr($cleaned_text, 0, 160);

    $result = [
        'title' => $title,
        'url' => $url,
        'description' => $description,
        'keywords' => $keywords,
        'content' => $cleaned_text
    ];

    print_r($result);

    return $result;
}
