<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'home') ? 'active' : '' }}"  href="{{route('admin.home')}}" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="fa fa-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'employee') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="icon-people mr-20"></i><span class="right-nav-text">Employees</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.employee.index')}}">Add Employee</a>
                </li>
                <li>
                    <a href="{{route('admin.employee.list')}}">List of Employees</a>
                </li>
            </ul>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>Customers</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'customer') ? 'active' : '' }}"  href="javascript:void(0);" data-toggle="collapse" data-target="#customers_dr"><div class="pull-left"><i class="fa fa-users mr-20"></i><span class="right-nav-text">Customers</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="customers_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.customer.add')}}">Add Customer</a>
                </li>
                <li>
                    <a href="{{route('admin.customer.list')}}">List of Customers</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'quotation') ? 'active' : '' }}"  href="javascript:void(0);" data-toggle="collapse" data-target="#quotation_dr"><div class="pull-left"><i class="fa fa-file-text-o mr-20"></i><span class="right-nav-text">Quotation</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="quotation_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.quotation.add')}}">New Quotation</a>
                </li>
                <li>
                    <a href="{{route('admin.quotation.list')}}">Quotation List</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'invoice') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr"><div class="pull-left"><i class="fa fa-file-text mr-20"></i><span class="right-nav-text">Invoice</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="invoice_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.invoice.add')}}">New Invoice</a>
                </li>
                <li>
                    <a href="{{route('admin.invoice.list')}}">Invoice List</a>
                </li>
            </ul>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>Supplier</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'supplier') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#suppliers_dr"><div class="pull-left"><i class="fa fa-users mr-20"></i><span class="right-nav-text">Suppliers</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="suppliers_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.supplier.add')}}">Add Supplier</a>
                </li>
                <li>
                    <a href="{{route('admin.supplier.list')}}">List of Suppliers</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'purchase') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#purchase_order_dr"><div class="pull-left"><i class="fa fa-file-text-o mr-20"></i><span class="right-nav-text">Purchase Order</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="purchase_order_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.purchase_order.add')}}">New Purchase Order</a>
                </li>
                <li>
                    <a href="{{route('admin.purchase_order.list')}}">PO List</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'bill') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#bill_dr"><div class="pull-left"><i class="fa fa-file-text mr-20"></i><span class="right-nav-text">Bill</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="bill_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.bill.add')}}">New Bill</a>
                </li>
                <li>
                    <a href="{{route('admin.bill.list')}}">Bill List</a>
                </li>
            </ul>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>Financial</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'account') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#account_dr"><div class="pull-left"><i class="fa fa-bank mr-20"></i><span class="right-nav-text">Account</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="account_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.account.add')}}">New Account</a>
                </li>
                <li>
                    <a href="{{route('admin.account.list')}}">List of Accounts</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'expense') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#expense_dr"><div class="pull-left"><i class="fa fa-money mr-20"></i><span class="right-nav-text">Expenses</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="expense_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.expense.add')}}">New Expense</a>
                </li>
                <li>
                    <a href="{{route('admin.expense.list')}}">List of Expense</a>
                </li>
            </ul>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>Stock</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'branch') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#branch_dr"><div class="pull-left"><i class="fa fa-home mr-20"></i><span class="right-nav-text">Branch</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="branch_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.branch.add')}}">New Branch</a>
                </li>
                <li>
                    <a href="{{route('admin.branch.list')}}">List of Branches</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'stock') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#stock_dr"><div class="pull-left"><i class="fa fa-database mr-20"></i><span class="right-nav-text">Stock</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="stock_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.stock.add')}}">New Stock</a>
                </li>
                <li>
                    <a href="{{route('admin.stock.list')}}">List of Stocks</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'product') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#products_dr"><div class="pull-left"><i class="fa fa-cubes mr-20"></i><span class="right-nav-text">Products</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="products_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.product.add')}}">New Product</a>
                </li>
                <li>
                    <a href="{{route('admin.product.list')}}">List of Products</a>
                </li>
            </ul>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>Configuration</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'report') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#report_dr"><div class="pull-left"><i class="fa fa-bar-chart-o mr-20"></i><span class="right-nav-text">Report</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="report_dr" class="collapse collapse-level-1">
                <li>
                    <a href="#">Balance Sheet</a>
                </li>
                <li>
                    <a href="{{route('admin.report.expense_list')}}">Expense List</a>
                </li>
                <li>
                    <a href="{{route('admin.report.income_list')}}">Income List</a>
                </li>
                <li>
                    <a href="{{route('admin.report.account_list')}}">Account List</a>
                </li>
                <li>
                    <a href="{{route('admin.report.account_transaction')}}">Account Transactions</a>
                </li>
                <li>
                    <a href="{{route('admin.report.customer_transaction')}}">Customers Transactions</a>
                </li>
                <li>
                    <a href="{{route('admin.report.supplier_transaction')}}">Suppliers Transactions</a>
                </li>
                <li>
                    <a href="{{route('admin.report.most_selling_product')}}">Most Selling product</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ (request()->segment(2) === 'setting') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#settings_dr"><div class="pull-left"><i class=" fa fa-cogs mr-20"></i><span class="right-nav-text">Settings</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="settings_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('admin.position.add')}}">Positions</a>
                </li>
                <li>
                    <a href="{{route('admin.unit_of_measure.add')}}">Unit of measure</a>
                </li>
                <li>
                    <a href="#">Backup</a>
                </li>
                <li>
                    <a href="{{route('admin.expense_type.add')}}">Expense type</a>
                </li>
                <li>
                    <a href="{{route('admin.product_category.add')}}">Product Categories</a>
                </li>
            </ul>
        </li>
    </ul>

</div>
