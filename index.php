<?php

    require_once 'php/structure.php';

    $html = '<div class="sections" id="top">
                                <h2>Welcome to MustachedSquid\'s Website</h2>
                                <p>Hello! I am a Squid with a mustache</p>
                            </div>
                            <div class="separator" id="sepA"></div>

                            <div class="sections" id="info">
                                <h4>Stuff I like:</h4>
                                <ul>
                                    <li>Coding &nbsp;🖥</li>
                                    <li>Games &nbsp;🎮</li>
                                    <li>Squids &nbsp;🦑 </li>
                                    <li>Cookies 🍪 </li>
                                </ul>
                                <h4>Stuff I made:</h4>

                                <h5>Art <a class="funButtons" href="art/">[View]</a></h5>

                                <h4>Software:</h4>
                                <table class="projectsTable">
                                    
                                    <tr>
                                       <td>
                                            Tetris Clone
                                        </td>
                                        <td>
                                            <a class="funButtons" href="projects/tetris/index.html">[Play]</a>
                                        </td>
                                            <td>
                                                <a class="sourceCodes" href="https://github.com/MustachedSquid/tetris">[Source Code]</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Ink-scripts
                                            </td>
                                            <td>
                                                <a class="funButtons" href="projects/ink-scripts/index.html">[View]</a>
                                            </td>
                                            <td>
                                                <a class="sourceCodes" href="https://github.com/MustachedSquid/ink-scripts">[Source Code]</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                PAP
                                            </td>
                                            <td>
                                                <a class="funButtons" href="projects/pap_www/index.html">[View]</a>
                                            </td>
                                            <td>
                                                <a class="sourceCodes" href="https://github.com/MustachedSquid/Projeto_de_aptidao_profissional">[Source Code]</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Game Of Life
                                            </td>
                                            <td>
                                                <a class="funButtons" href="projects/game_of_life/index.html">[View]</a>
                                            </td>
                                            <td>
                                                <a class="sourceCodes" href="https://github.com/MustachedSquid/game_of_life">[Source Code]</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Playstation 3 JS
                                            </td>
                                            <td>
                                                <a class="funButtons" href="projects/ps3js/index.html">[View]</a>
                                            </td>
                                            <td>
                                                <a class="sourceCodes" href="https://github.com/MustachedSquid/ps3js">[Source Code]</a>
                                            </td>
                                        </tr>

                                   </table>



                            </div>
                            <div class="separator" id="sepB"></div>

                            <div class="separator" id="sepC"></div>
                            <div class="sections" id="links">
                                <h4>Contacts</h4>
                                 <a class="contacts" href="https://sr.ht/~mustachedsquid/"><img class="contactsImg" src="res/img/sourcehut.png"></a><a class="contacts" href="https://github.com/MustachedSquid"><img class="contactsImg" src="res/img/GitHub-Mark-Light-32px.png"></a><a class="contacts" href="mailto:contact@mustachedsquid.com"><img class="contactsImg" src="res/img/Gmail_logo.png"></a>
                            </div>';

    create_header();
    create_content($html);
    create_footer();

?>
