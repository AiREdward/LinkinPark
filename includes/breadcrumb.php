<style>
    :root{
    --txtcolor: #EEE0F1;
}

        .breadcrumb {
            font-size: 1rem;
            color: var(--txtcolor);
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #007bff;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .breadcrumb span {
            font-weight: bold;
            color: #555;
        }

        #checkboxService {
            justify-content: space-between;
        }
    </style>

<?php
// Recupera il percorso corrente dalla URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = array_filter(explode('/', $path));

// Determina automaticamente la base URL
$script_name = dirname($_SERVER['SCRIPT_NAME']);
$base_url = rtrim($script_name, '/');

// Rimuovi il nome del progetto dai segmenti, se esiste
$project_name = trim($base_url, '/');
if (!empty($segments) && isset($segments[0]) && $segments[0] === $project_name) {
    array_shift($segments); // Rimuove il nome del progetto
}

// Costruisci la breadcrumb
echo '<div class="breadcrumb">Ti trovi in: ';
echo '<a href="' . $base_url . '">Home</a>';

$current_path = $base_url;
foreach ($segments as $index => $segment) {
    // Ignora il nome del progetto durante la generazione della breadcrumb
    if ($segment === $project_name) {
        continue;
    }

    // Rimuovi l'estensione .php dall'ultimo segmento
    if ($index === array_key_last($segments)) {
        $segment = preg_replace('/\.php$/', '', $segment);
    }

    $current_path .= '/' . $segment;
    if ($index !== array_key_last($segments)) {
        echo ' &gt; <a href="' . $current_path . '">' . ucfirst($segment) . '</a>';
    } else {
        echo ' &gt; <span>' . ucfirst($segment) . '</span>';
    }
}
echo '</div>';
?>





