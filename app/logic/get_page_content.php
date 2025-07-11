<?php

function get_page_content(string $page_location): array
{
    if (!file_exists($page_location)) {
        echo "<p class='text-danger'>Error: File not found - $page_location</p>";
        return [];
    }

    // 1. Read file contents
    $html = file_get_contents($page_location);

    // 2. Remove PHP code blocks
    $html = preg_replace('/<\?(php)?[\s\S]*?\?>/', '', $html);

    // 3. Convert misread encoding to UTF-8
    $html = iconv('Windows-1252', 'UTF-8//IGNORE', $html);

    // 4. Decode entities
    $html = html_entity_decode($html, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    // 5. Remove <style> tags
    $styleTags = $dom->getElementsByTagName('style');
    for ($i = $styleTags->length - 1; $i >= 0; $i--) {
        $styleTags->item($i)->parentNode->removeChild($styleTags->item($i));
    }

    // 6. Define character replacements for corrupted symbols
    $charFixMap = [
        'ÃÂ' => '',
        'Ãâ' => '',
        'ÃÅ¾Å' => '→',    // Arrow
        'Â'   => '',
        'Ã'   => '',
        'Å'   => '',
        'â'   => '',
        '¢'   => '',
        '®'   => '(R)',
        '°'   => '°',
        'µ'   => 'µ',
        '–'   => '-',
        '…'   => '...',
        '‚'   => ',',
        '“'   => '"',
        '”'   => '"',
        '‘'   => "'",
        '’'   => "'",
        '×'   => 'x'
    ];

    // 7. Extract and clean paragraph content
    $cleaned_text = '';
    $description = '';
    foreach ($dom->getElementsByTagName('p') as $index => $p) {
        $text = $p->textContent;

        // Apply character replacements
        $text = str_replace(array_keys($charFixMap), array_values($charFixMap), $text);

        // Strip stray control or symbol characters
        $clean = preg_replace('/[^\p{L}\p{N}\s.,:;()%\-\/]/u', '', $text);
        $line = trim($clean);
        if (!empty($line)) {
            $cleaned_text .= $line . "\n\n";
            if ($description === '') {
                $description = substr($line, 0, 160);
            }
        }
    }

    // 8. Get title
    global $title;
    $page_title = isset($title) && !empty($title) ? $title : '';
    if (empty($page_title)) {
        $title_tags = $dom->getElementsByTagName('title');
        if ($title_tags->length > 0) {
            $title_raw = $title_tags->item(0)->nodeValue;
            $title_clean = str_replace(array_keys($charFixMap), array_values($charFixMap), $title_raw);
            $page_title = trim(html_entity_decode($title_clean, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        }
    }

    // 9. Canonical URL fallback
    $url = '';
    foreach ($dom->getElementsByTagName('link') as $link) {
        if ($link->getAttribute('rel') === 'canonical') {
            $url = $link->getAttribute('href');
            break;
        }
    }
    if (empty($url)) {
        $rawPath = $_SERVER['PHP_SELF'];
        $cleanPath = str_replace('/app/views', '', $rawPath);
        $url = preg_replace('/\.php$/', '', $cleanPath);
    }

    // 10. Extract keywords
    $keywords = [];
    foreach ($dom->getElementsByTagName('meta') as $meta) {
        if (strtolower($meta->getAttribute('name')) === 'keywords') {
            $keywords = array_map('trim', explode(',', $meta->getAttribute('content')));
            break;
        }
    }

    // 11. Build final result array
    $result = [
        'title' => $page_title,
        'url' => $url,
        'description' => $description,
        'keywords' => $keywords,
        'content' => $cleaned_text
    ];

    // 12. Display output
    echo "<h1>" . htmlspecialchars($page_title) . "</h1>";
    echo "<p class='text-muted'>URL: <a href='" . htmlspecialchars($url) . "' target='_blank'>" . htmlspecialchars($url) . "</a></p>";

    echo "<h4 class='mt-3'>Keywords:</h4><ul class='list-inline'>";
    foreach ($keywords as $keyword) {
        echo "<li class='list-inline-item'>" . htmlspecialchars($keyword) . "</li>";
    }
    echo "</ul>";

    echo "<h5 class='mt-5'>Content Preview:</h5><pre style='white-space:pre-wrap; font-family:Arial, sans-serif;'>$cleaned_text</pre>";

    return $result;
}


if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    header("Location: /404");
    exit('Forbidden');
}
