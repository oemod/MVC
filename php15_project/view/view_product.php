<!-- san pham noi bat -->
            	<div class="box-container">
                	<div class="box-home box-product">
						<div class="header">
                            <div class="promote">
                                <a href="#"><span>Sản phẩm mới</span></a>
                            </div>
                        </div>
                        <div class="content">
                        	<ul>
                            <?php 
                                foreach($arr as $rows)
                                {
                             ?>
                            	<!-- product -->
                            	<li>
                                	<div class="image">
                                    	<a href="product/detail/<?php echo $rows["pk_product_id"]; ?>/<?php echo remove_unicode($rows["c_name"]); ?>" class="jt" title="<?php echo $rows["c_name"]; ?>" style="background:url(public/upload/product/<?php echo $rows["c_img"]; ?>) no-repeat 50% 50%">
                                        </a>
                                    </div>
                                    <div class="info">
                                    	<p><a href="product/detail/<?php echo $rows["pk_product_id"]; ?>/<?php echo remove_unicode($rows["c_name"]); ?>" class="jt" ><?php echo $rows["c_name"]; ?></a></p>
										<p><strong>Giá:</strong> <strong class="price"><?php echo number_format($rows["c_price"]); ?>VNĐ</strong> <a href="index.php?controller=cart&act=add&id=<?php echo $rows["pk_product_id"]; ?>"><img src="public/images/icon-cart.jpg" style="width:10px;" /> Cart</a></p>
                                    </div>
                                </li>
                                <!-- end product -->
                                <?php } ?>
                            </ul>                            
                        </div>
                    </div>
                    <!-- paging -->
                            <div class="pagination" style="padding-top:20px; padding-bottom:20px;">
                            <ul>
                            <li><a href="#" class="prevnext disablelink">Trang</a></li>
                            <?php 
                                for($i=1; $i<=$num_page;$i++)
                                {
                             ?>
                            <li><a href="index.php?controller=product&category_product_id=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                            </ul>
                            </div>
                            <!-- end paging -->
                </div>
                <!-- end san pham noi bat-->