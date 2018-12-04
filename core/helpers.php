<?php

/**
 *
 * Fonction permettant de charger une vue depuis le contrôleur
 * Prend en paramètre le chemin de la vue depuis le dossier views
 * sous la forme 'dossier.vue' (ex.: 'pages.home')
 * Accepte en second argument optionnel un tableau de variables
 * qui seront passées à la vue
 *
 * @param $path
 * @param array $data
 * @return mixed
 */
function view($path, $data = []) {
  extract($data);
  $parts = explode('.', $path);
  return require "../app/views/{$parts[0]}/{$parts[1]}.view.php";
}

/**
 * Helper function to redirect
 * to a given path
 *
 * @param $path
 */
function redirect($path) {
  header("Location: /{$path}");
}

/**
 * @param $data
 * @return string
 */
function clean($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
