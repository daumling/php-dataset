<?php

/**
 * List all database files, which are files
 * that match the pattern in the "path" options.
 */
include '../src/Dataset.php';
use \Daumling\Dataset\File as DB;

DB::setOptions([
    'path' => __DIR__.'/data/*.json'
]);

$tables = DB::list();

echo count($tables)." tables found\n";

echo implode(' ', $tables)."\n";
