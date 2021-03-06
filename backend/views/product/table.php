<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">
    <div class="page page-tables-datatables">
        <div class="pageheader">
            <h2>Sản phẩm</h2>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="admin.php?controller=product">Sản phẩm</a></li>
                </ul>
            </div>
        </div
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-md-12">
                <!-- tile -->
                <section class="tile">
                    <!-- tile header -->
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font"><strong>Sản phẩm</strong></h1>
                        <ul class="controls">
                            <li>
                                <a  href="admin.php?controller=product&amp;action=edit" role="button" tabindex="0" id="add-entry"><i class="fa fa-plus mr-5"></i> Thêm mới</a>
                            </li>
                            <li class="dropdown">

                                <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <i class="fa fa-spinner fa-spin"></i>
                                </a>

                                <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                    <li>
                                        <a role="button" tabindex="0" class="tile-toggle">
                                            <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                            <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-refresh">
                                            <i class="fa fa-refresh"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-fullscreen">
                                            <i class="fa fa-expand"></i> Fullscreen
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>
                    <!-- /tile header -->
                    <!-- tile body -->
                    <div class="tile-body">
                        <div class="table-responsive">
                        	<form id="category_form" method="post" action="admin.php?controller=product" role="form">
                            <table class="table table-custom" id="editable-usage">
                                <thead>
                                <tr>
                                	<th style="width:20px;">
                                        <label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0">
                                            <input type="checkbox" id="select-all"><i></i>
                                     	</label>
                                    </th>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Tên Sản phẩm</th>
                                    <th style="width: 160px;" class="no-sort">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($products as $product): ?>
                                <tr class="odd gradeX">
                                	<td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input class="selectMe" name="pid[]" type="checkbox" value="<?php echo $product['id'];?>"><i></i></label></td>
                                    <td><?php echo $product['id'];?></td>
                                    <td>
										<?php
										$image = 'public/upload/product/'.$product['image'];
										if (is_file($image)) {
					                        echo '<image src="'.$image.'?time='.time().'" style="max-width:50px; max-height:50px;" />';
					                    }
					                    ?>
					                </td>
                                    <td><a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['id'];?>"><?php echo $product['name'];?></a></td>
                                    <td class="actions"><a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['id'];?>" role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['id'];?>" role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a></td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                    <!-- /tile body -->
                    <!-- tile footer -->
                    <div class="tile-footer dvd dvd-top">
                        <div class="row">
                            <div class="col-sm-5 hidden-xs">
                                <select class="input-sm form-control w-sm inline">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Delete selected</option>
                                    <option value="2">Archive selected</option>
                                    <option value="3">Copy selected</option>
                                </select>
                                <button class="btn btn-sm btn-default">Apply</button>
                            </div>
                            <div class="col-sm-3 text-center">
                                <small class="text-muted">showing 0-15 of <?php echo $total_rows; ?> items</small>
                            </div>
                            <div class="col-sm-4 text-right">
                                <?php echo $pagination_backend; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /tile footer -->
                </section>
                <!-- /tile -->
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>               
</section>
<!--/ CONTENT -->