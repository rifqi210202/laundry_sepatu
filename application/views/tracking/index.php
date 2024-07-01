<!DOCTYPE html>
<html>
<head>
    <title>Tracking Pesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Tracking Pesanan</h1>
    <form method="post" action="<?= site_url('tracking/check_status') ?>">
        <input type="text" name="order_id" placeholder="Masukkan ID Pesanan" required>
        <button type="submit">Cek Status</button>
    </form>
</body>
</html>
