<div>
    <h2> <?= $debt["title"]?> </h2>
    <h4> <?= $debt["description"]?> </h4>
    <p>Prova d'accredito: <a href="prova-accredito.php?id=<?= $debt["debt_id"]?>" target="_blank" rel="noopener">File</a></p>
    <p>(N) Netto: <?= $debt["amount"]?>€</p>
    <p>(I) Interessi: <?= $debt["interest"]?>€</p>
    <p>(L) Lordo [N+I]: <?= $debt["amount"]+$debt["interest"]?>€</p>
    <p>(P) Pagato: <?= $debt["amount_paid"]?>€</p>
    <p>(R) Rimanente [L-P]: <?= $debt["amount"]+$debt["interest"]-$debt["amount_paid"]?>€</p>
    <br><br><br>
</div>