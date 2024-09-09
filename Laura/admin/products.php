<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../includes/config.php'; // Database Connection
    include '../includes/header.php';
    ?>
    <link rel="stylesheet" href="assets/admin-style.css">

    <style>
        /* Static Variables */
        :root {
            --admin-header-height: 70px;
            /* --admin--height: 70px; */
            --admin-nav-width: 250px;
            --spacing: 1rem;
            --column-count: 2;
        }

        /* Global CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100%;
            overflow-x: hidden;
        }

        /* Main Layout Grid */
        .admin {
            display: flex;
            flex-wrap: wrap;
            display: grid;
            height: 100vh;
            grid-template-rows: 70px auto;
            grid-template-columns: 250px 1fr;
            grid-template-areas:
                "header header"
                "nav main";
        }

        .admin__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-right: 50px;
            flex-basis: 100%;
            grid-area: header;
            height: var(--admin-header-height);
            background-color: #fff;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
            position: relative;
        }

        .admin__nav {
            flex: 0 0 var(--admin-nav-width);
            grid-area: nav;
            background-color: #313541;
        }

        .admin__nav .menu {
            padding: 20px 40px;
        }

        .menu__item {
            margin-bottom: 20px;
            list-style: none;
        }

        .menu__item a {
            color: #FFF;
            font-size: 18px;
        }

        .admin__main {
            flex: 1;
            grid-area: main;
            padding: var(--spacing);
            overflow-y: auto;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
            background-color: #f4f7fa;
        }

        .admin__footer {
            display: flex;
            grid-area: footer;
            flex-basis: 100%;
            justify-content: space-between;
            align-items: center;
            height: var(--admin-footer-height);
            padding: 0 var(--spacing);
            color: #4e5561;
            background-color: #1d2127;
        }

        /* Dashboard Overview Grid */
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            margin: 0 calc(var(--spacing) * -0.5);
            display: grid;
            grid-template-columns: repeat(var(--column-count), 1fr);
            grid-gap: var(--spacing);
        }

        .dashboard__item {
            flex: 1 1 50%;
            grid-column-end: span 2;
            padding: calc(var(--spacing) / 2);
        }

        .dashboard__item--full {
            flex-basis: 100%;
            grid-column: 1 / -1;
        }

        .dashboard__item--col {
            flex-basis: calc(100% / var(--column-count));
            grid-column-end: span 1;
        }

        /* Demo stuff to make it look nice */
        a {
            color: #dc5a60;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .logo {
            display: flex;
            flex: 0 0 var(--admin-nav-width);
            height: var(--admin-header-height);
            justify-content: center;
            align-items: center;
            position: relative;
            margin: 0;
            color: #fff;
            background-color: #dc5a60;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>

<body>

    <div class="admin">
        <header class="admin__header">
            <a href="#" class="logo">
                <h1>GridAdmin</h1>
            </a>
            <div class="toolbar">
                <a href="#" class="logout">
                    Log Out
                </a>
            </div>
        </header>
        <nav class="admin__nav">
            <ul class="menu">
                <li class="menu__item">
                    <a class="menu__link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="products.php">Products</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Campagins</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Servers</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Foobars</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#">Plumbuses</a>
                </li>
            </ul>
        </nav>
        <main class="admin__main">
            <h2>Dashboard</h2>
            <button class="btn"><a href="product-add.php">Add Item</a></button>
            <br>
            <table id="customers">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Product Code</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <?php
                    $sql = "SELECT * FROM product";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?>
                        <tr>
                            <td>
                                <?php echo $row['product_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['product_name']; ?>
                            </td>
                            <td><img src="../assets/images/uploads/<?php echo $row['product_image']; ?>" alt="avatar"
                                    style="width: 80px; height: 80px; object-fit: cover;"></td>
                            <td>
                                <?php echo $row['product_price']; ?>
                            </td>
                            <td>
                                <?php echo $row['qty']; ?>
                            </td>
                            <td>
                                <?php echo $row['product_code']; ?>
                            </td>
                            <td>
                                <a href="vehicle-edit.php?vehicle_id=<?php echo $row['product_id']; ?>" class="edit-badge"
                                    title="Edit"><i class="ri-pencil-fill"></i></a>
                                <a href="includes/vehicle-process.php?vehicle_id=<?php echo $row['product_id']; ?>"
                                    class="del-badge" title="Delete"><i class="ri-delete-bin-7-fill"></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
                </tr>

            </table>
        </main>

    </div>
</body>

</html>