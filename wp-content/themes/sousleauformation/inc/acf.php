<?php
namespace App;

/**
 * Charger automatiquement tous les groupes ACF depuis le dossier JSON
 * 
 * Assurez-vous que ACF est actif, sinon on ne fait rien
 */
if (!function_exists('acf_add_local_field_group')) {
    return;
}

// Dossier où sont stockés les fichiers JSON ACF
$acf_json_dir = get_template_directory() . '/app/ACF-json/';

// Vérifie que le dossier existe
if (!is_dir($acf_json_dir)) {
    return;
}

// Parcours tous les fichiers JSON et enregistre les groupes
foreach (glob($acf_json_dir . '*.json') as $acf_file) {
    $json = file_get_contents($acf_file);
    $acf_group = json_decode($json, true);

    if ($acf_group) {
        acf_add_local_field_group($acf_group);
    }
}
