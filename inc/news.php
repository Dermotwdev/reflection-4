<?php
include ('functions.php');

echo "<div class=\"news\">
    <div class=\"news-header-wrapper\">
        <div class=\"news-header-grid\">
            <div class=\"news-header\">
                <h3>LATEST</h3>
                <div class=\"news-divider\"></div>
            </div>
        </div>
    </div>
    <div class=\"news-wrapper\">
        <div class=\"news-body\">";

         $news = get_news_items();
            for ($i=1; $i<4; $i++) {
                $j = $i - 1;
                echo "<div class=\"news-card card-$i\">
                    <div class=\"news-img-container\">
                    <div class=\"news-img-border\">
                            <a href=\"#\">
                                <img src=\"" . $news['imgurl'][$j] . "\" class=\"news-img news-img-$i\" alt=\"Simon Wright May notable employee\">
                            </a>
                        </div>
                        <div class=\"news-tag news-tag-" . $news['theme'][$j] ." tag-$i\">
                            <div class=\"news-tooltip tip-$i\">View all: Web Design / News</div>
                            <a class=\"tag-link\" href=\"#\">" . $news['tag'][$j] . "</a>
                        </div>
                    </div>
                    <div class=\"news-summary news-summary-$i\">
                        <h4><a href=\"#\">" . $news['title'][$j] . "</a></h4>
                        <p>" . $news['comment'][$j] . "</p>
                        <div class=\"a-btn news-btn\">
                            <a class=\"a-btn\" href=\"#\">
                                <div class=\"btn " . $news['theme'][$j] . " news-btn-" . $news['theme'][$j] . "\">Read More</div>
                            </a>
                        </div>
                        <div class=\"news-footer\">
                            <img src=\"" . $news['authorimg'][$j] . "\" class=\"author nm\" alt=\"small netmatters logo\">
                            <div class=\"news-details\">
                                <strong>Posted by" . $news['author'][$j] . "</strong>
                                <p>" . $news['date'][$j] . "</p>
                            </div>
                        </div>
                    </div>
                </div>";
            }
            ?>
            </div>
        </div>
    </div>
           
