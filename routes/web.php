<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>'web'],function(){
// ************************************************************************************************
//=================================== Public  routes =========================================
 Route::get('/',[
    'uses'=>'LoginController@signin',
    'as'=>'signIn',
    ]);

Route::post('/login', [
    'uses' => 'LoginController@login',
    'as' => 'login'
]);

Route::get('/logout', [
    'uses' => 'LoginController@logout',
    'as' => 'logout'
]);

Route::get('/Lock', [
    'uses' => 'LoginController@lock',
    'as' => 'LockUser'
]);

// ************************************************************************************************
//=================================== End Public  routes =======================================
// ************************************************************************************************
//===================================== Admin routes ===========================================

    Route::get('/admin/home',[
        'uses'=>'HomeController@adminHome',
         'as'=>'admin.home',
         'middleware'=>'roles',
         'roles'=>['Admin']
     ]);

    Route::get('/admin/user/add',[
        'uses'=>'UserController@index',
        'as'=>'admin.user.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/user/store',[
        'uses'=>'UserController@store',
        'as'=>'admin.user.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// ************************************************************************************************




// -------------------------- Employee Routes -------------------------------------------------
    Route::get('/admin/employee/index',[
        'uses'=>'EmployeeController@index',
        'as'=>'admin.employee.index',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/employee/store',[
        'uses'=>'EmployeeController@store',
        'as'=>'admin.employee.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/employee/list',[
        'uses'=>'EmployeeController@index_list',
        'as'=>'admin.employee.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    /* Section for update and delete */

    Route::get('/admin/employee/destroy/{id}',[
        'uses'=>'EmployeeController@destroy',
        'as'=>'admin.employee.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/employee/edit/{id}',[
        'uses'=>'EmployeeController@edit',
        'as'=>'admin.employee.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/employee/update/{id}',[
        'uses'=>'EmployeeController@update',
        'as'=>'admin.employee.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/employee/create/user/{id}',[
        'uses'=>'EmployeeController@createUser',
        'as'=>'admin.employee.create.user',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    /* End Section for update and delete */

// -------------------------- End Employee Routes -------------------------------------------------
// ************************************************************************************************
// -------------------------- Customer Routes -----------------------------------------------------
    Route::get('/admin/customer/index',[
        'uses'=>'CustomerController@index',
        'as'=>'admin.customer.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/customer/store',[
        'uses'=>'CustomerController@store',
        'as'=>'admin.customer.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/customer/list',[
        'uses'=>'CustomerController@index_list',
        'as'=>'admin.customer.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/customer/destroy/{id}',[
        'uses'=>'CustomerController@destroy',
        'as'=>'admin.customer.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/customer/edit/{id}',[
        'uses'=>'CustomerController@edit',
        'as'=>'admin.customer.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/customer/update/{id}',[
        'uses'=>'CustomerController@update',
        'as'=>'admin.customer.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// * * * * * - - - - - Quotation Routes - - - - - - - - -  * * * * * *
    Route::get('/admin/quotation/index',[
        'uses'=>'QuotationController@index',
        'as'=>'admin.quotation.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/quotation/store',[
        'uses'=>'QuotationController@store',
        'as'=>'admin.quotation.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/quotation/list',[
        'uses'=>'QuotationController@index_list',
        'as'=>'admin.quotation.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/quotation/show/{id}',[
        'uses'=>'QuotationController@show',
        'as'=>'admin.quotation.show',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
// * * * * * - - - - - End Quotation Routes - - - - - - - - -  * * * * * *

// - - - - - - - - * * * * * * * * * *  Invoice Routes - - - - - - - - * * * * * * * * * *
    Route::get('/admin/invoice/index',[
        'uses'=>'InvoiceController@index',
        'as'=>'admin.invoice.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/invoice/store',[
        'uses'=>'InvoiceController@store',
        'as'=>'admin.invoice.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/invoice/list',[
        'uses'=>'InvoiceController@index_list',
        'as'=>'admin.invoice.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/invoice/show/{id}',[
        'uses'=>'InvoiceController@show',
        'as'=>'admin.invoice.show',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
// - - - - - - - - * * * * * * * * * * End Invoice Routes - - - - - - - - * * * * * * * * * *
// -------------------------- End Customer Routes -------------------------------------------------
// ************************************************************************************************
// -------------------------- Supplier Routes -----------------------------------------------------
    Route::get('/admin/supplier/index',[
        'uses'=>'SupplierController@index',
        'as'=>'admin.supplier.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    /* Store the information of the supplier */
    Route::post('/admin/supplier/store',[
        'uses'=>'SupplierController@store',
        'as'=>'admin.supplier.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    /* End Store the information of the supplier */
    Route::get('/admin/supplier/list',[
        'uses'=>'SupplierController@index_list',
        'as'=>'admin.supplier.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    /* Delete the information of the supplier*/
    Route::get('/admin/supplier/destroy/{id}',[
        'uses'=>'SupplierController@destroy',
        'as'=>'admin.supplier.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    /* End Delete the information of the supplier*/

    /* Get the information of the user in the form */
    Route::get('/admin/supplier/edit/{id}',[
        'uses'=>'SupplierController@edit',
        'as'=>'admin.supplier.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/supplier/update/{id}',[
        'uses'=>'SupplierController@update',
        'as'=>'admin.supplier.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    /* End Get the information of the user in the form */

// - - - - - - - - * * * * * * * * * *  Purchase Order Routes - - - - - - - - * * * * * * * * * *
    Route::get('/admin/purchase/index',[
        'uses'=>'PurchaseOrderController@index',
        'as'=>'admin.purchase_order.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/purchase/store',[
        'uses'=>'PurchaseOrderController@store',
        'as'=>'admin.purchase_order.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/purchase/list',[
        'uses'=>'PurchaseOrderController@index_list',
        'as'=>'admin.purchase_order.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/purchase/show\{id}',[
        'uses'=>'PurchaseOrderController@show',
        'as'=>'admin.purchase_order.show',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
// - - - - - - - - * * * * * * * * * * End Purchase order Routes - - - - - - - - * * * * * * * * * *
// -------------------------- End Supplier Routes -------------------------------------------------
// ************************************************************************************************
// -------------------------- Account Routes -----------------------------------------------------
    Route::get('/admin/account/index',[
        'uses'=>'AccountController@index',
        'as'=>'admin.account.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/account/list',[
        'uses'=>'AccountController@index_list',
        'as'=>'admin.account.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/account/store',[
        'uses'=>'AccountController@store',
        'as'=>'admin.account.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/account/destroy/{id}',[
        'uses'=>'AccountController@destroy',
        'as'=>'admin.account.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/account/edit/{id}',[
        'uses'=>'AccountController@edit',
        'as'=>'admin.account.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/account/update/{id}',[
        'uses'=>'AccountController@update',
        'as'=>'admin.account.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
// -------------------------- End Account Routes -------------------------------------------------
// ************************************************************************************************

// -------------------------- Start Expense Routes -------------------------------------------------
    Route::get('/admin/expense/create',[
        'uses'=>'ExpenseController@index',
        'as'=>'admin.expense.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    Route::post('/admin/expense/store',[
        'uses'=>'ExpenseController@store',
        'as'=>'admin.expense.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    Route::get('/admin/expense/list',[
        'uses'=>'ExpenseController@list',
        'as'=>'admin.expense.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
// -------------------------- End Expense Routes -------------------------------------------------
// ************************************************************************************************
// -------------------------- Branch Routes -----------------------------------------------------
    Route::get('/admin/branch/index',[
        'uses'=>'BranchController@index',
        'as'=>'admin.branch.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/branch/store',[
        'uses'=>'BranchController@store',
        'as'=>'admin.branch.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/branch/list',[
        'uses'=>'BranchController@index_list',
        'as'=>'admin.branch.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/branch/destroy/{id}',[
        'uses'=>'BranchController@destroy',
        'as'=>'admin.branch.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/branch/edit/{id}',[
        'uses'=>'BranchController@edit',
        'as'=>'admin.branch.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/branch/update/{id}',[
        'uses'=>'BranchController@update',
        'as'=>'admin.branch.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// -------------------------- End Branch Routes -------------------------------------------------
// ************************************************************************************************
// -------------------------- Stock Routes -----------------------------------------------------
    Route::get('/admin/stock/index',[
        'uses'=>'StockController@index',
        'as'=>'admin.stock.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== Route to store the Stock ====================== ***
    Route::post('/admin/stock/store',[
        'uses'=>'StockController@store',
        'as'=>'admin.stock.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    // *** ====================== End Route to store the Stock ====================== ***
    Route::get('/admin/stock/list',[
        'uses'=>'StockController@index_list',
        'as'=>'admin.stock.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/stock/destroy/{id}',[
        'uses'=>'StockController@destroy',
        'as'=>'admin.stock.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/stock/edit/{id}',[
        'uses'=>'StockController@edit',
        'as'=>'admin.stock.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/stock/update/{id}',[
        'uses'=>'StockController@update',
        'as'=>'admin.stock.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// -------------------------- End Stock Routes -------------------------------------------------
// ************************************************************************************************
// -------------------------- Product Routes -----------------------------------------------------
    Route::get('/admin/product/index',[
        'uses'=>'ProductController@index',
        'as'=>'admin.product.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== Route to store the Product ====================== ***
    Route::post('/admin/product/store',[
        'uses'=>'ProductController@store',
        'as'=>'admin.product.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== End Route to store the Product ====================== ***
    Route::get('/admin/product/list',[
        'uses'=>'ProductController@index_list',
        'as'=>'admin.product.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/product/destroy/{id}',[
        'uses'=>'ProductController@destroy',
        'as'=>'admin.product.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/product/edit/{id}',[
        'uses'=>'ProductController@edit',
        'as'=>'admin.product.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/product/update/{id}',[
        'uses'=>'ProductController@update',
        'as'=>'admin.product.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
// -------------------------- End Product Routes -------------------------------------------------
// ************************************************************************************************
// -------------------------- Bill Routes -----------------------------------------------------
    Route::get('/admin/bill/index',[
        'uses'=>'BillController@index',
        'as'=>'admin.bill.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/bill/store',[
        'uses'=>'BillController@store',
        'as'=>'admin.bill.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/bill/insert_payment',[
        'uses'=>'BillController@insert_payment',
        'as'=>'admin.bill.insert_payment',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/bill/list',[
        'uses'=>'BillController@index_list',
        'as'=>'admin.bill.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/bill/show/{id}',[
        'uses'=>'BillController@show',
        'as'=>'admin.show.list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/bill/payment/{id}',[
        'uses'=>'BillController@payment',
        'as'=>'admin.bill.payment',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// -------------------------- End Bill Routes -------------------------------------------------
// ************************************************************************************************
// ************************************************************************************************
// -------------------------- Setting Routes -----------------------------------------------------
    Route::get('/admin/product/category',[
        'uses'=>'productController@product_category',
        'as'=>'admin.product_category.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== Route to store the Product Categories ====================== ***
    Route::post('/admin/product/categorystore',[
        'uses'=>'ProductController@product_category_store',
        'as'=>'admin.category.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== End Route to store the Product Categories ====================== ***
    Route::get('/admin/setting/positions',[
        'uses'=>'EmployeeController@add_position',
        'as'=>'admin.position.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== Route to store the Positions ====================== ***
    Route::post('/admin/position/store',[
        'uses'=>'EmployeeController@store_position',
        'as'=>'admin.position.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    // *** ====================== Route to Delete the Positions ====================== ***
    Route::get('/admin/setting/positions/destroy/{id}',[
        'uses'=>'EmployeeController@destroy_position',
        'as'=>'admin.position.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/setting/positions/edit/{id}',[
        'uses'=>'EmployeeController@edit_position',
        'as'=>'admin.position.edit',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/setting/positions/update/{id}',[
        'uses'=>'EmployeeController@update_position',
        'as'=>'admin.position.update',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);


    // *** ====================== End Route to store the Positions ====================== ***
    Route::get('/admin/setting/measureUnit',[
        'uses'=>'ProductController@product_unit_of_measure',
        'as'=>'admin.unit_of_measure.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== Route to store the Unit of Measure ====================== ***
    Route::post('/admin/product/measureUnitStore',[
        'uses'=>'ProductController@product_unit_of_measure_store',
        'as'=>'admin.unitmeasure.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
    // *** ====================== End Route to store the Unit of Measure ====================== ***

    Route::get('/admin/setting/type',[
        'uses'=>'ExpenseController@expense_type',
        'as'=>'admin.expense_type.add',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/setting/expense_type',[
        'uses'=>'ExpenseController@store_expense_type',
        'as'=>'admin.expense_type.store',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/setting/expense_type/destroy/{id}',[
        'uses'=>'ExpenseController@type_destroy',
        'as'=>'admin.expense_type.destroy',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);
// -------------------------- End Invoice Routes -------------------------------------------------
// ************************************************************************************************

// -------------------------- Start Reports Routes -------------------------------------------------
// ************************************************************************************************

    Route::get('/admin/report/expense/list',[
        'uses'=>'ExpenseController@expense_list',
        'as'=>'admin.report.expense_list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/income_list',[
        'uses'=>'ReportController@income_list',
        'as'=>'admin.report.income_list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/account_list',[
        'uses'=>'ReportController@account_list',
        'as'=>'admin.report.account_list',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/account_transactions',[
        'uses'=>'ReportController@account_transaction',
        'as'=>'admin.report.account_transaction',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/customer_transactions',[
        'uses'=>'ReportController@customer_transaction',
        'as'=>'admin.report.customer_transaction',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/supplier_transactions',[
        'uses'=>'ReportController@supplier_transactions',
        'as'=>'admin.report.supplier_transaction',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/most_selling_product',[
        'uses'=>'ReportController@most_selling_product',
        'as'=>'admin.report.most_selling_product',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/customer_account_transactions/{id}',[
        'uses'=>'ReportController@customer_atr',
        'as'=>'admin.report.customer_account_transactions',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/report/supplier_account_transactions/{id}',[
        'uses'=>'ReportController@supplier_atr',
        'as'=>'admin.report.supplier_account_transactions',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

// -------------------------- End Reports Routes -------------------------------------------------
// ************************************************************************************************


//===================================== End Admin routes ===========================================

//---------------------------------User Routes-----------------------------------------
Route::get('/user/home',[
    'uses'=>'HomeController@userHome',
    'as'=>'user.home',
    'middleware'=>'roles',
    'roles'=>['User']
]);
// ----------------------------- End User Routes
});
