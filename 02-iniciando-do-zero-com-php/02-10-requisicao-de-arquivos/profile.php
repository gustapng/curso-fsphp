<article style="
    padding: 5px 20px;
    background: #eeeeee;
    border-radius: 4px;
">

    <h1><?= $profile->name; ?></h1>
    <p>Trabalha na <?= $profile->company; ?></p>
    <a title="Enviar Email" href="mailto:<?= $profile->email; ?>">Enviar Email</a>

</article>