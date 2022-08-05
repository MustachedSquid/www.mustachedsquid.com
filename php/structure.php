<?php

    $html = "";

    function create_header(){

        echo '<!doctype html>
        <html class="no-js" lang="">
        <head>
        <meta charset="utf-8">
        <title>MustachedSquid\'s Website</title>
        <meta name="description" content="MustachedSquid\'s Website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/favicon.ico?">
        <link rel="stylesheet" href="/css/index.css">
        </head>
        <body>';
    }


    function create_content($html){

        echo '<div id="content">

            <table>
                <tr>
                    <td id="navTable">
                        <div id="navigation" class="contentDivs">
                            <div class="sections" id="nav">
                                <h4>Navigation</h4>
                                <ul id="navList">
                                    <li class="navList"><a class="navLink" href="/index.php">Home</a></li>
                                    <li><h5>Projects</h5>
                                        <ul>
                                            <li class="navList"><a class="navLink" href="/projects/tetris/index.html">Tetris Clone</a></li>
                                            <li class="navList"><a class="navLink" href="/projects/ink-scripts/index.html">Ink-scripts</a></li>
                                            <li class="navList"><a class="navLink" href="/projects/pap_www/index.html">PAP</a></li>
                                            <li class="navList"><a class="navLink" href="/projects/game_of_life/index.html">Game of Life</a></li>
                                            <li class="navList"><a class="navLink" href="/projects/ps3js/index.html">Playstation 3 JS</a></li>

                                        </ul>
                                    </li>
                                </ul>
                                <h4>Websites I like</h4>
                                <ul>
                                    <li><a href="https://status.cafe"><img src="https://status.cafe/assets/button.png" alt="Status Cafe"/></a></li>
                                    <li><a href="https://links.yesterweb.org/"><img src="/res/img/yesterlinks-button.png" alt="Yesterweb Links"></a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id="center" class="contentDivs">

                            '.$html.'

                        </div>
                    </td>
                </tr>
            </table>
        </div>';
    }


    function create_footer(){
        echo '</body></html>';
    }
