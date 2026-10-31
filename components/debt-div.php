<?php

$type = "active";

if($debt["amount"] - $debt["amount_paid"] <= 0) $type = "pseudo-active";

if($debt["amount"] + $debt["interest"] - $debt["amount_paid"] <= 0) $type = "closed";

if($debt["debt_id"] == 0) $type ="";

?>

<div class="debt <?=$type?>">
    <h2> <?= $debt["title"]?> </h2>
    <h4><?= $debt["description"]?></h4>

    <p class="debt-value deb_net">
        <span>Netto</span>
        <span><?= number_format($debt["amount"], 2, ',', '.') ?> €</span>
    </p>

    <p class="debt-value deb_int">
        <span>Servizi</span>
        <span><?= number_format($debt["interest"], 2, ',', '.') ?> €</span>
    </p>

    <p class="debt-value deb_lor debt_divider">
        <span>Lordo

        <span class="tooltip">
            <span class="tooltip-icon">?</span>
            <span class="tooltip-message">NETTO + SERVIZI</span>
        </span>

        </span>
        <span><?= number_format($debt["amount"] + $debt["interest"], 2, ',', '.') ?> €</span>
    </p>

    <p class="debt-value deb_pag">
        <span>Pagato</span>
        <span><?= number_format($debt["amount_paid"], 2, ',', '.') ?> €</span>
    </p>

    <p class="debt-value deb_rim debt_divider">
        <span>Rimanente

            <span class="tooltip">
                <span class="tooltip-icon">?</span>
                <span class="tooltip-message">LORDO - PAGATO</span>
            </span>
        </span>
        <span><?= number_format($debt["amount"] + $debt["interest"] - $debt["amount_paid"], 2, ',', '.') ?> €</span>
    </p>

    <br>

    <a class="<?php if(!isset($debt["proof"])) echo "invisible"; ?>" href="prova-accredito.php?id=<?=$debt["debt_id"]?>" target="_blank" rel="noopener">
        Prova d'accredito
    </a>
</div>