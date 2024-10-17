<?php /*a:1:{s:74:"D:\phpstudy_pro\WWW\rn.ylsoled.com\application\index\view\index\index.html";i:1728853889;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minipc 列表</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Minipc 产品列表</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>CPU Brand</th>
                <th>Main Chip</th>
                <th>Brand</th>
                <th>Clock Speed</th>
                <th>Core Quantity</th>
                <th>CPU</th>
                <th>RAM</th>
                <th>ROM</th>
                <th>GPU</th>
                <th>Communicate</th>
                <th>Operating Environment</th>
                <th>Other Interface</th>
                <th>NPU</th>
                <th>Ethernet Port</th>
                <th>Camera</th>
                <th>Graphic Port</th>
                <th>Replace</th>
                <th>Link</th>
                <th>Format Link</th>
                <th>Link ID</th>
                <th>Price Check</th>
                <th>Type</th>
                <th>Remark</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($minipcData) || $minipcData instanceof \think\Collection || $minipcData instanceof \think\Paginator): $i = 0; $__LIST__ = $minipcData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($item['id']); ?></td>
                <td><?php echo htmlentities($item['product_name']); ?></td>
                <td><?php echo htmlentities($item['CPU_brand']); ?></td>
                <td><?php echo htmlentities($item['main_chip']); ?></td>
                <td><?php echo htmlentities($item['brand']); ?></td>
                <td><?php echo htmlentities($item['clock_speed']); ?></td>
                <td><?php echo htmlentities($item['core_quantity']); ?></td>
                <td><?php echo htmlentities($item['CPU']); ?></td>
                <td><?php echo htmlentities($item['ram']); ?></td>
                <td><?php echo htmlentities($item['rom']); ?></td>
                <td><?php echo htmlentities($item['GPU']); ?></td>
                <td><?php echo htmlentities($item['communicate']); ?></td>
                <td><?php echo htmlentities($item['operating_environment']); ?></td>
                <td><?php echo htmlentities($item['other_interface']); ?></td>
                <td><?php echo htmlentities($item['NPU']); ?></td>
                <td><?php echo htmlentities($item['ethernet_port']); ?></td>
                <td><?php echo htmlentities($item['camera']); ?></td>
                <td><?php echo htmlentities($item['graphic_port']); ?></td>
                <td><?php echo htmlentities($item['replace']); ?></td>
                <td><?php echo htmlentities($item['link']); ?></td>
                <td><?php echo htmlentities($item['format_link']); ?></td>
                <td><?php echo htmlentities($item['link_id']); ?></td>
                <td><?php echo htmlentities($item['price_check']); ?></td>
                <td><?php echo htmlentities($item['type']); ?></td>
                <td><?php echo htmlentities($item['remark']); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <!-- 分页导航 -->
    <div class="pagination">
        <?php echo $paginationLinks; ?>
    </div>
</body>
</html>
