<?php

if (!empty($_FILES['file']['tmp_name'])){
    $file = $_FILES['file']['tmp_name'];

    $json = json_decode(file_get_contents($file), 1);

    if (is_array($json)){
        $html = '<ul>';
        foreach ($json as $item){
            $html .= "<li>ID:{$item['id']}, цвет:{$item['name']}, группа цветов: {$item['group']}</li>";
        }
        $html .= '</ul>';
    }
}

echo json_encode($html);