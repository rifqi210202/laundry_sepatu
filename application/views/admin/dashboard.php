<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Dashboard Admin</h1>
    <a href="<?= site_url('admin/logout') ?>">Logout</a>
    <h2>Daftar Orderan</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Telepon</th>
            <th>Jenis Sepatu</th>
            <th>Tanggal Order</th>
            <th>Status</th>
            <th>Ubah Status</th>
        </tr>
        <?php foreach($orders as $order): ?>
        <tr>
            <td><?= $order->id ?></td>
            <td><?= $order->customer_name ?></td>
            <td><?= $order->customer_phone ?></td>
            <td><?= $order->shoe_type ?></td>
            <td><?= $order->order_date ?></td>
            <td><?= $order->status ?></td>
            <td>
                <form method="post" action="<?= site_url('admin/update_status/'.$order->id) ?>">
                    <select name="status">
                        <option value="received" <?= $order->status == 'received' ? 'selected' : '' ?>>Received</option>
                        <option value="cleaning" <?= $order->status == 'cleaning' ? 'selected' : '' ?>>Cleaning</option>
                        <option value="completed" <?= $order->status == 'completed' ? 'selected' : '' ?>>Completed</option>
                    </select>
                    <button type="submit">Update</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
