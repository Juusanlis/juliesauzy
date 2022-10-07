<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <?php wp_head(); ?>
    <script>
      tailwind.config = {
        theme: {
          container: {
            center: true,
            padding: '2rem',
          },
          extend: {
            colors: {
              "beige": "var(--beige)",
              "black": "var(--black)",
              "light-black": "var(--light-black)",
              "dark-green": "var(--dark-green)",
              "light-green": "var(--light-green)",
              "dark-corail": "var(--dark-corail)",
              "light-corail": "var(--light-corail)",
              "light-white": "var(--light-white)"
            }
          }
        }
      }
  </script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
