<?php $__env->startSection('content'); ?>
    
    <?php echo Toastr::message(); ?>

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Invoice Grid</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Invoice Grid</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col"></div>
                    <div class="col-auto">
                        <a href="<?php echo e(route('invoice/list/page')); ?>" class="invoices-links">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo e(route('invoice/grid/page')); ?>" class="invoices-links active">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card report-card">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="app-listing">
                                <li>
                                    <div class="multipleSelection">
                                        <div class="selectBox">
                                            <p class="mb-0">
                                                <i class="fas fa-user-plus me-1 select-icon"></i> Select User
                                            </p>
                                            <span class="down-icon">
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div id="checkBoxes">
                                            <form action="#">
                                                <p class="checkbox-title">Customer Search</p>
                                                <div class="form-custom">
                                                    <input type="text" class="form-control bg-grey" placeholder="Enter Customer Name">
                                                </div>
                                                <div class="selectBox-cont">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Brian Johnson
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Russell Copeland
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Greg Lynch
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> John Blair
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Barbara Moore
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Hendry Evan
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Richard Miles
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                                <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="multipleSelection">
                                        <div class="selectBox">
                                            <p class="mb-0"><i class="fas fa-calendar me-1 select-icon"></i> Select
                                                Date</p>
                                            <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                        </div>
                                        <div id="checkBoxes">
                                            <form action="#">
                                                <p class="checkbox-title">Date Filter</p>
                                                <div class="selectBox-cont selectBox-cont-one h-auto">
                                                    <div class="date-picker">
                                                        <div class="form-custom cal-icon">
                                                            <input class="form-control datetimepicker" type="text"
                                                                placeholder="Form">
                                                        </div>
                                                    </div>
                                                    <div class="date-picker pe-0">
                                                        <div class="form-custom cal-icon">
                                                            <input class="form-control datetimepicker" type="text"
                                                                placeholder="To">
                                                        </div>
                                                    </div>
                                                    <div class="date-list">
                                                        <ul>
                                                            <li><a href="#" class="btn date-btn">Today</a></li>
                                                            <li><a href="#" class="btn date-btn">Yesterday</a></li>
                                                            <li><a href="#" class="btn date-btn">Last 7 days</a>
                                                            </li>
                                                            <li><a href="#" class="btn date-btn">This month</a></li>
                                                            <li><a href="#" class="btn date-btn">Last month</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="multipleSelection">
                                        <div class="selectBox">
                                            <p class="mb-0"><i class="fas fa-book-open me-1 select-icon"></i> Select
                                                Status</p>
                                            <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                        </div>
                                        <div id="checkBoxes">
                                            <form action="#">
                                                <p class="checkbox-title">By Status</p>
                                                <div class="selectBox-cont">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="name" checked>
                                                        <span class="checkmark"></span> All Invoices
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="name">
                                                        <span class="checkmark"></span> Paid
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="name">
                                                        <span class="checkmark"></span> Overdue
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="name">
                                                        <span class="checkmark"></span> Draft
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="name">
                                                        <span class="checkmark"></span> Recurring
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="name">
                                                        <span class="checkmark"></span> Cancelled
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                                <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="multipleSelection">
                                        <div class="selectBox">
                                            <p class="mb-0"><i class="fas fa-bookmark me-1 select-icon"></i> By
                                                Category</p>
                                            <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                        </div>
                                        <div id="checkBoxes">
                                            <form action="#">
                                                <p class="checkbox-title">Category</p>
                                                <div class="form-custom">
                                                    <input type="text" class="form-control bg-grey"
                                                        placeholder="Enter Category Name">
                                                </div>
                                                <div class="selectBox-cont">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="category">
                                                        <span class="checkmark"></span> Advertising
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="category">
                                                        <span class="checkmark"></span> Food
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="category">
                                                        <span class="checkmark"></span> Marketing
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="category">
                                                        <span class="checkmark"></span> Repairs
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="category">
                                                        <span class="checkmark"></span> Software
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="category">
                                                        <span class="checkmark"></span> Stationary
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="category">
                                                        <span class="checkmark"></span> Travel
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                                <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="report-btn">
                                        <a href="#" class="btn">
                                            <img src="assets/img/icons/invoices-icon5.png" alt="" class="me-2">
                                            Generate report
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card invoices-tabs-card border-0">
                <div class="card-body card-body pt-0 pb-0">
                    <div class="invoices-main-tabs border-0 pb-0">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="invoices-settings-btn invoices-settings-btn-one">
                                    <a href="invoices-settings.html" class="invoices-settings-icon">
                                        <i class="feather feather-settings"></i>
                                    </a>
                                    <a href="<?php echo e(route('invoice/add/page')); ?>" class="btn">
                                        <i class="feather feather-plus-circle"></i> New Invoice
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php $__currentLoopData = $invoiceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="<?php echo e(url('invoice/edit/'.$value->invoice_id)); ?>" class="invoice-grid-link"><?php echo e($value->invoice_id); ?></a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html">
                                            <i class="far fa-edit me-2"></i>Edit
                                        </a>
                                        <a class="dropdown-item" href="<?php echo e(url('invoice/view/'.$value->invoice_id)); ?>">
                                            <i class="far fa-eye me-2"></i>View Detail
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="far fa-trash-alt me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html">
                                        <img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="<?php echo e(URL::to('/images/photo_defaults.jpg')); ?>" alt="User Image"> <?php echo e($value->customer_name); ?>

                                    </a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$<?php echo e($value->total_amount); ?></h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0"><?php echo e(\Carbon\Carbon::parse($value->due_date)->format('d M Y')); ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-success-dark">Paid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                <div class="col-lg-12">
                    <div class="invoice-load-btn">
                        <a href="#" class="btn">
                            <span class="spinner-border text-primary"></span> Load more
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FIKRI\Downloads\kuliah\ABP\tubes\laravel\school_system_laravel_10-main\resources\views/invoices/grid_invoice.blade.php ENDPATH**/ ?>