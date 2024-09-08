<?php

echo ""
    . "<form action=\"post.php\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">"
    . "<label for=\"login\">Логин: </label>"
    . "<input type=\"text\" id=\"login\" name=\"login\" required/>"
    . "<br/>"
    . "<input type=\"submit\" value=\"Отправить\"/>"
    . "</form>";