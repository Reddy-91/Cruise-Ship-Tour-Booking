<!doctype html>
<html class="no-js" lang="en">

<?php include('metatag.php'); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include('sidebar.php'); ?>
    <!-- Start Welcome area -->
    <?php include('header.php'); ?>
            <!-- Mobile Menu start -->
                 <!-- Mobile Menu start -->
            <?php include('mobile_menu.php'); ?>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Products <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
												<option value="">Export Basic</option>
												<option value="all">Export All</option>
												<option value="selected">Export Selected</option>
											</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Product Title</th>
                                                <th data-field="company" data-editable="true">Stock</th>
                                                <th data-field="price" data-editable="true">Price</th>
												<th data-field="date" data-editable="true">Date</th>
												<th data-field="task" data-editable="true">Status</th>
												<th data-field="email" data-editable="true">Total Sales</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>1</td>
                                                <td>Product Title</td>
                                                <td>Out Of Stock</td>
												<td>$54</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>2</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>3</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>4</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>5</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>6</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>7</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>8</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>9</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>10</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>11</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>12</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>13</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>14</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>15</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>16</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>17</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>18</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>19</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>20</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>21</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
												<td>$5</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <?php include('footer.php'); ?>
</body>

</html>