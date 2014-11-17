<?php
$clear_db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

return array(
    'clear_db_host' => $clear_db_url["host"],
    'clear_db_database' => substr($clear_db_url["path"], 1),
    'clear_db_username' => $clear_db_url["user"],
    'clear_db_password' => $clear_db_url["pass"]
);