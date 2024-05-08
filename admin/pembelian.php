<h2>DATA PEMBELIAN</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>ID Game</th>
            <th>Bukti Pembayaran</th>
        </tr>
    </thead>

    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM bukti"); ?>
        <?php while($pecah=$ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['id_game']; ?></td>
            <td>
                <img src="../bukti/<?php echo $pecah['bukti_pembayaran']; ?>" width="100px">
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>