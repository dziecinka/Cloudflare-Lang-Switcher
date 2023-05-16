<?php
// Pobierz aktualny adres URL
$currentURL = $_SERVER['REQUEST_URI'];

// Sprawdź język na podstawie adresu URL i przekieruj użytkownika
if (strpos($currentURL, '/de') === 0) {
  // Niemiecki
  header('Location: https://netcloud24.com/de/');
  exit();
} elseif (strpos($currentURL, '/en') === 0) {
  // Angielski
  if (strpos($currentURL, '/en-gb') === 0) {
    // Brytyjski
    header('Location: https://netcloud24.com/en-gb/');
  } elseif (strpos($currentURL, '/en-ie') === 0) {
    // Irlandia
    header('Location: https://netcloud24.com/en-ie/');
  } else {
    // Standardowy angielski
    header('Location: https://netcloud24.com/en/');
  }
  exit();
} elseif (strpos($currentURL, '/es') === 0) {
  // Hiszpański
  header('Location: https://netcloud24.com/es/');
  exit();
} elseif (strpos($currentURL, '/fr') === 0) {
  // Francuski
  header('Location: https://netcloud24.com/fr/');
  exit();
} else {
  // Polski (domyślny język)
  header('Location: https://netcloud24.com/pl/');
  exit();
}

// Dodaj informację dla robota Google o wielojęzyczności strony
header('Content-Language: pl, de, en, en-gb, en-ie, es, fr');
?>

