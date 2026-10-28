<div class="debt">
    <h2> <?= $debt["title"]?> </h2>
    <h4> <?= $debt["description"]?> </h4>

    <p class="debt-value deb_net">
        <span>Netto</span>
        <span><?= number_format($debt["amount"], 2, ',', '.') ?> €</span>
    </p>

    <p class="debt-value deb_int">
        <span>Interessi</span>
        <span><?= number_format($debt["interest"], 2, ',', '.') ?> €</span>
    </p>

    <p class="debt-value deb_lor debt_divider">
        <span>Lordo

        <span class="tooltip">
            <span class="tooltip-icon">?</span>
            <span class="tooltip-message">NETTO + INTERESSI</span>
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

    <a href="prova-accredito.php?id=<?= number_format($debt["debt_id"], 2, ',', '.')?>" target="_blank" rel="noopener">Prova d'accredito</a>
</div>