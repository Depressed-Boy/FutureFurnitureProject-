<?php ob_start()?>
<?php
    $errol = false;
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if (isset($_GET['action'])) {
        function update_cart($add = false)
        {
            foreach ($_POST['quantity'] as $id => $quantity) {
                if ($quantity == 0) {
                    unset($_SESSION['cart'][$id]);
                } else {
                    if ($add) {
                        $_SESSION['cart'][$id] += $quantity;
                    } else {
                        $_SESSION['cart'][$id] = $quantity;
                    }
                }
            }
        }
        switch ($_GET['action']) {
            case "add":
                update_cart(true);
                header('Location:tranggiohang1.php');
                break;
            case "delete":
                if (isset($_GET['id'])) {
                    unset($_SESSION['cart'][$_GET['id']]);
                }
                header('Location:tranggiohang1.php');
                break;
            case "deleteall":
                unset($_SESSION['cart']);
                header('Location:tranggiohang1.php');
                break;
            case "submit":
                if (isset($_POST['update_click'])) {
                    update_cart();
                    header('Location:tranggiohang1.php');
                } elseif (isset($_POST['order_click'])) {
                    if (empty($_POST['name'])) {
                        $errol = "Bạn chưa nhập tên người nhận!";
                    } elseif (empty($_POST['phone'])) {
                        $errol = "Bạn chưa nhập sô điện thoại người nhận!";
                    } elseif (empty($_POST['add'])) {
                        $errol = "Bạn chưa nhập địa chỉ người nhận!";
                    } elseif (empty($_POST['quantity'])) {
                        $errol = "Gio hàng rỗng";
                    }
                    if ($errol == false and !empty($_POST['quantity'])) { //LUU THONG TIN VÀO DATABASE
                        $products = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                        $total = 0;
                        $orderProducts = array();
                        while ($row = mysqli_fetch_array($products)) {
                            $orderProducts[] = $row;
                            $total += $row['gia'] * $_SESSION['cart'][$row['ID']];
                        }
                        $insert = mysqli_query($conn, "INSERT INTO `quanlybanhang` (`ma_dh`, `ma_kh`, `thoidiemmuahang`, `diachigiaohang`, `ghichukhachhang`, `tonggiatridonhang`
                         ) VALUES (NULL,'" . $_SESSION['user']['ma_kh' ]. "','" .time() . "','" . $_POST['add'] . "','" . $_POST['note'] . "','" . $total . "')");
                        $order_id = $conn->insert_id;
                        $insertString = "";
                        foreach ($orderProducts as $key => $product) {
                            $insertString .= "(NULL, '" . $order_id . "', '" . $product['ID'] . "', '" . $_POST['quantity'][$product['ID']] . "', '" . $product['gia'] . "', '" . time() . "', '" . time() . "')";
                            if ($key != count($orderProducts) - 1) {
                                $insertString .= ",";
                            }
                        }
                        $insertOrder = mysqli_query($conn, "INSERT INTO `order_detail` (`id`, `order_id`, `produc_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES " . $insertString . ";");
                    }
                }
                break;
        }
    }
    if (!empty($_SESSION['cart'])) {
        $product = mysqli_query($conn, "SELECT *FROM chitietsanpham WHERE ID IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
    }
    ?>