<?php /*a:1:{s:74:"D:\phpstudy_pro\WWW\rn.ylsoled.com\application\index\view\index\index.html";i:1729421631;}*/ ?>
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

        ul {
            list-style: none; /* Remove bullet points */
            padding: 0;
            margin: 0;
            display: flex; /* Make list items flex container */
        }

        li {
            margin-right: 10px; /* Add spacing between list items */
        }

        /* Hide additional columns initially */
        .more-column {
            display: none;
        }
    </style>

 <!-- Include jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                
                <!-- More columns initially hidden -->
                <th class="more-column">Communicate</th>
                <th class="more-column">Operating Environment</th>
                <th class="more-column">Other Interface</th>
                <th class="more-column">NPU</th>
                <th class="more-column">Ethernet Port</th>
                <th class="more-column">Camera</th>
                <th class="more-column">Graphic Port</th>

                <th class="more-column">Format Link</th>

                <th class="more-column">Type</th>
                <th class="more-column">Remark</th>

                <th>show more specification</th>
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
                
                <!-- More columns initially hidden -->
                <td class="more-column"><?php echo htmlentities($item['communicate']); ?></td>
                <td class="more-column"><?php echo htmlentities($item['operating_environment']); ?></td>
                <td class="more-column"><?php echo htmlentities($item['other_interface']); ?></td>
                <td class="more-column"><?php echo htmlentities($item['NPU']); ?></td>
                <td class="more-column"><?php echo htmlentities($item['ethernet_port']); ?></td>
                <td class="more-column"><?php echo htmlentities($item['camera']); ?></td>
                <td class="more-column"><?php echo htmlentities($item['graphic_port']); ?></td>

                <td class="more-column"><a href="<?php echo htmlentities($item['format_link']); ?>" target="_blank"> product link </a></td>
                

                <td class="more-column"><?php echo htmlentities($item['type']); ?></td>
                <td class="more-column"><?php echo htmlentities($item['remark']); ?></td>
                <td><button class="toggleMoreBtn">More>></button></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    

    <!-- 分页导航 -->
    <div class="pagination">
        <?php echo $paginationLinks; ?>
    </div>

    <script>
        // 使用 jQuery 切换列的可见性
        $(document).ready(function(){
            $('.toggleMoreBtn').on('click', function() {
                // 切换所有带有 .more-column 的列的显示状态
                $('.more-column').toggle();
    
                // 获取当前按钮的状态（是 More>> 还是 Less<<）
                var newText = $(this).text() === 'More>>' ? 'Less<<' : 'More>>';
    
                // 更新所有带有 .toggleMoreBtn 类的按钮文本
                $('.toggleMoreBtn').text(newText);
            });
        });
    </script>
</body>
</html>
