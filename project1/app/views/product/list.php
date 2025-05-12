<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Danh sách sản phẩm</h1>
            <a href="/project1/Product/add" class="btn btn-success">Thêm sản phẩm mới</a>
        </div>

        <?php if (!empty($products)): ?>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Giá</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $index => $product): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?> VND</td>
                            <td>
                                <a href="/project1/Product/edit/<?php echo $product->getID(); ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="/project1/Product/delete/<?php echo $product->getID(); ?>" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-muted">Không có sản phẩm nào.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
