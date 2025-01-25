<style>
    nav[aria-label="breadcrumb"] p {
        font-size: 16px;
        font-family: Arial, sans-serif;
    }

    nav[aria-label="breadcrumb"] a {
        text-decoration: none;
        color: #007bff;
    }

    nav[aria-label="breadcrumb"] a:hover {
        text-decoration: underline;
    }

    nav[aria-label="breadcrumb"] .active {
        font-weight: bold;
        color: #555;
        pointer-events: none;
        text-decoration: none;
    }
</style>

<nav aria-label="breadcrumb">
    <p>Ti trovi in
        <?php
        // Array del percorso: ogni elemento rappresenta una voce della breadcrumb
        $breadcrumb = isset($breadcrumb) ? $breadcrumb : [];

        // Iterazione sulle voci del breadcrumb
        foreach ($breadcrumb as $key => $item) {
            // Controlla se è l'ultimo elemento
            if ($key === array_key_last($breadcrumb)) {
                echo '<span class="active">' . htmlspecialchars($item['name']) . '</span>';
            } else {
                echo '<a href="' . htmlspecialchars($item['url']) . '">' . htmlspecialchars($item['name']) . '</a> > ';
            }
        }
        ?>
    </p>
</nav>