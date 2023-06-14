// Para crear una etiqueta canonical dentro de la home de PrestaShop, será suficiente con editar el fichero que encontraremos en: /theme/nombre-de-tu-tema/templates/_partials/head.tpl

// 1º Buscar el bloque de código siguiente en el archivo head.tpl

{if $page.canonical}
        <link rel="canonical" href="{$page.canonical}">
{/if}

// 2º Modifícalo por el que te dejo a continuación sustuyendo la URl de miweb.com por la de tu web

{if $page.page_name == 'index'}
        <link rel="canonical" href="https://www.miweb.com">
{elseif $page.canonical}
        <link rel="canonical" href="{$page.canonical}">
{/if}

//3º Guarda cambios asegurando una copia de seguridad del archivo
