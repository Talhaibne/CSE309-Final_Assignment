<?php
// info.php

header('Content-Type: application/json');


$project_details = array(
    "name" => "Md Talha Ibne Anwar", 
    "id" => "1722021", 
    "personal_notion_page" => "https://www.notion.so/1e78f24c81e1804a9b62d0060e3d7dcd",
    "personal_group_page_notion" => "N/A", 
    "github_id" => "https://github.com/Talhaibne", 
    "project_github_link" => "https://github.com/Talhaibne/CSE309-Final_Assignment"
);


echo json_encode($project_details);
?>
