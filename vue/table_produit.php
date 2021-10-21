<div class="col-md-10 jnt-pad-top">
  <div class="content-panel">
    <h4 class="jnt-h4"> LISTE DES PRODUITS</h4>
    <hr>
    <?php include_once 'form_recherche.php'; ?>
    <table class="table">
      <thead>
        <tr>
          <!--th>#</th-->
          <th>Reference</th>
          <th>Libelle</th>
          <th>Quantite minimale</th>
          <th>quantite en stock</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        while ($row = $select_all_produit->fetch()) {
          echo "<tr>";
          // echo "<td>$i</td>" ;
          echo "<td>$row[reference]</td>";
          echo "<td>$row[libelle]</td>";
          echo "<td>$row[quantite_minimale]</td>";
          echo "<td>$row[quantite_en_stock]</td>";
          echo "<td>
                                    <a href=\"?del=$row[reference]\">Supprimer</a>
                                    | <a href=\"../vue/page_modif_caract_produit.php?modif=$row[reference]\">Modifier</a>
                                    | <a href=\"../vue/page_modif_qtt_produit.php?var=$row[reference]\">Variation Stock</a> ";
          echo "</tr>";
          $i++;
        }

        ?>
      </tbody>
    </table>
  </div>
</div>