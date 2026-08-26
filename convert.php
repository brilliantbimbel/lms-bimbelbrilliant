<?php
$sqliteFile = __DIR__ . '/database/database.sqlite';
$outputFile = __DIR__ . '/data_bimbel_mysql.sql';

if (!file_exists($sqliteFile)) {
    die("File SQLite tidak ditemukan!\n");
}

$pdoSqlite = new PDO('sqlite:' . $sqliteFile);
$tables = $pdoSqlite->query("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'")->fetchAll(PDO::FETCH_COLUMN);

$sqlContent = "-- Konversi SQLite ke MySQL untuk Hostinger\n";
$sqlContent .= "SET FOREIGN_KEY_CHECKS=0;\n\n";

foreach ($tables as $table) {
    // Ambil struktur create table (perlu disesuaikan dikit atau ambil data insert-nya saja)
    $rows = $pdoSqlite->query("SELECT * FROM \"$table\"")->fetchAll(PDO::FETCH_ASSOC);

    if (empty($rows)) continue;

    $sqlContent .= "-- Data untuk tabel: `$table`\n";

    foreach ($rows as $row) {
        $columns = array_keys($row);
        $values = array_values($row);

        $escapedValues = array_map(function($val) {
            if ($val === null) return "NULL";
            return "'" . addslashes($val) . "'";
        }, $values);

        $sqlContent .= "REPLACE INTO `$table` (`" . implode('`, `', $columns) . "`) VALUES (" . implode(', ', $escapedValues) . ");\n";
    }
    $sqlContent .= "\n";
}

$sqlContent .= "SET FOREIGN_KEY_CHECKS=1;\n";
file_put_contents($outputFile, $sqlContent);
echo "Berhasil! File SQL tersimpan di: $outputFile\n";
