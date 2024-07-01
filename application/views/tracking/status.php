<!DOCTYPE html>
<html>
<head>
    <title>Status Pesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Status Pesanan</h1>
    <?php if($order): ?>
        <p>ID: <?= $order->id ?></p>
        <p>Nama Pelanggan: <?= $order->customer_name ?></p>
        <p>Telepon: <?= $order->customer_phone ?></p>
        <p>Jenis Sepatu: <?= $order->shoe_type ?></p>
        <p>Tanggal Order: <?= $order->order_date ?></p>
        <p>Status: <?= $order->status ?></p>
    <?php else: ?>
        <p>Order tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
