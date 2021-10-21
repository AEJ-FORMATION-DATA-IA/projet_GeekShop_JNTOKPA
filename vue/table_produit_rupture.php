<div class="col-md-10 jnt-pad-top">
  <div class="content-panel">
    <h4 class="jnt-h4"> PRODUITS EN RUPTURE DE STOCK</h4>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <!--th>#</th-->
          <th>Reference</th>
          <th>Libelle</th>
          <th>Quantite minimale</th>
          <th>quantite en stock</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        while ($row = $select_all_produit_rupture->fetch()) {
          echo "<tr>";
          // echo "<td>$i</td>" ;
          echo "<td>$row[reference]</td>";
          echo "<td>$row[libelle]</td>";
          echo "<td>$row[quantite_minimale]</td>";
          echo "<td>$row[quantite_en_stock]</td>";
          echo "</tr>";
          $i++;
        }

        ?>
      </tbody>
    </table>
  </div>
</div>