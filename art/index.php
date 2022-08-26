<?php

    require_once '../php/structure.php';

    $files = array_diff(scandir("/srv/http/www.mustachedsquid.com/art/img/"), array('.', '..'));



    $html = '<div class="sections" id="top">
                                <h2>Some art I made</h2>
                                <p>Licensed under the terms of <a href="https://creativecommons.org/licenses/by/4.0/">CC-BY-4.0</a></p>
                            </div>
                            <div class="separator" id="sepA"></div>

                            <div class="sections" id="info">';
    $i = 0;
    while($i < count($files)){
        $html = $html . "<img class='art_img' src='https://www.mustachedsquid.com/art/img/".$files[$i+2]."'>";
        $i++;
    }
    
    $html = $html . '</div>
                            <div class="separator" id="sepB"></div>

                            <div class="separator" id="sepC"></div>
                            <div class="sections" id="links">
                                <h4>Contacts</h4>
                                 <a class="contacts" href="https://sr.ht/~mustachedsquid/"><img class="contactsImg" src="/res/img/sourcehut.png"></a><a class="contacts" href="https://github.com/MustachedSquid"><img class="contactsImg" src="/res/img/GitHub-Mark-Light-32px.png"></a><a class="contacts" href="mailto:contact@mustachedsquid.com"><img class="contactsImg" src="/res/img/Gmail_logo.png"></a>
                            </div>';

    create_header();
    create_content($html);
    create_footer();

?>
