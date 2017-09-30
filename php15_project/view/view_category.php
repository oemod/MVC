<!-- danh mục sản phẩm -->
                <div class="box-container">
                    <div class="product-category">
                        <div class="header"><span>Danh mục sản phẩm</span></div>
                            <div id="product_category">
                            <ul>
                            <?php 
                                foreach($arr as $rows)
                                {
                             ?>
                                <li>
                                	<a href="product/category/<?php echo $rows["pk_category_product_id"]; ?>/<?php echo remove_unicode($rows["c_name"]); ?>"><span><?php echo $rows["c_name"]; ?></span></a>
                                </li>                          
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
				</div>
            	<!-- hết danh mục sản phẩm -->