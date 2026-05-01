<?php
function generatePortfolio($dir) {
    $data = json_decode(file_get_contents("data/datas.json"), true);
    $chunks = array_chunk($data['portfolio'], 4, true);

    foreach ($chunks as $rowItems) {
        echo '<div class="row">';
        foreach ($rowItems as $imageName => $info) {
            echo '<div class="col-25 portfolio text-white text-center" style="background-image: url(\'' . $dir . '/' . $imageName . '\');">';
            echo '  <a href="' . $info['url'] . '" target="_blank" style="color: inherit; text-decoration: none;">';
            echo '      <h3>' . $info['title'] . '</h3>';
            echo '  </a>';
            echo '</div>';
        }
        echo '</div>';
    }
}
?>